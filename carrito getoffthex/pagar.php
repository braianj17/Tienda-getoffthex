<?php
    include 'global/config.php';
    include 'global/conexion.php';
    include 'carrito.php';
    include 'templates/cabecera.php';
    
?>


<?php

if($_POST){

    $total=0;
    $SID=session_id();
    $Correo=$_POST['email'];
    $Nombre=$_POST['Nombre'];
     $curp=$_POST['curp'];
      $RFC=$_POST['RFC'];
    $telefono=$_POST['TELEFONO'];
    foreach( $_SESSION['CARRITO'] as $indice=>$producto){
 $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);

    }

    $sentencia=$pdo->prepare("INSERT INTO `tbventas` 
    (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`, `Nombre`,  `curp`, `RFC`, `Telefono`) 
    VALUES 
    (NULL,:ClaveTransaccion, '' , NOW(), 
    :Correo,:Total, 'pendiente', :Nombre, :curp, :RFC, :TELEFONO);");

$sentencia->bindParam(":ClaveTransaccion",$SID);
$sentencia->bindParam(":Correo",$Correo);
$sentencia->bindParam(":Total",$total);
$sentencia->bindParam(":Nombre",$Nombre);
$sentencia->bindParam(":curp",$curp);
$sentencia->bindParam(":RFC",$RFC);
$sentencia->bindParam(":TELEFONO",$telefono);

$sentencia->execute();
$idVenta=$pdo->lastInsertId();

foreach( $_SESSION['CARRITO'] as $indice=>$producto){
$sentencia=$pdo->prepare("INSERT INTO 
`tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`,`DESCARGADO`)
 VALUES (NULL, :IDVENTA, :IDPRODUCTO, :PRECIOUNITARIO, :CANTIDAD, '0');");


$sentencia->bindParam(":IDVENTA",$idVenta);
$sentencia->bindParam(":IDPRODUCTO",$producto['ID']);
$sentencia->bindParam(":PRECIOUNITARIO",$producto['PRECIO']);
$sentencia->bindParam(":CANTIDAD",$producto['CANTIDAD']);
$sentencia->execute();

}
  // echo "<h3>".$total."</h3>";


}

?>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<style>

@media screen and( max-width:400px){
    #paypal-button-container{
        width: 100%;
    }
}

@media screen and(min-width:400px){
    #paypal-button-container{
        width: 250px;
        display: inline-block;
    }
}
</style>
<div class="jumbotron text-center">
    <h1 class="display-4">!Paso Final!</h1>
    <hr class="my-4">
    <p class="lead">Estas a punto de pagar con PayPal la cantidad de:</p>
    <h4>$<?PHP echo number_format($total,2); ?> </h4>
    <div id="paypal-button-container"></div>
    <p>Los productos seran descargados una vez se procese el pago<br></p>
    <strong>(para aclaraciones :braianj174@gmail.com)</strong>
</div>




<script>
        paypal.Button.render({
            env:'sandbox',

            style:{

                label:'checkout',
                size:'responsive',
                shape:'pill',
                color:'gold'
            },


            client: {
                sandbox:'ATqyN18EASUI5r6GAL09Sw7Y80JzHFga2yHHYwyPfjelXSCazVDdjghjFufKMYxUPLDAwclNkCJsWSmr',
                production:'AfxnH_0czsV4a2QrSMBqUjhAsVK1SPg1Jax15cP18r24k9YjZqgH5yIi6Kb8cjUxa6-WGbb3UJ8DdIOr'
            },
       
       payment: function(data,actions){
            return actions.payment.create({
                payment:{
                    transactions:[
                        {
                            amount:{ total: '<?php echo $total;  ?>', currency:'MXN' },
                            description:"Compra de productos a ARK:$<?php echo number_format($total,2);?>  ",
                            custom:"<?php echo $SID; ?>#<?php echo openssl_encrypt($idVenta,COD,KEY); ?>"
                        }
                    ]
                }
            });

       },

   onAuthorize: function(data, actions){
       return actions.payment.execute().then(function(){
        console.log(data);
        window.location="verificador.php?paymentToken="+data.paymentToken+"&paymentID="+data.paymentID;
       });
   }
   }, '#paypal-button-container');

    </script>

<?php include 'templates/pie.php'; ?>