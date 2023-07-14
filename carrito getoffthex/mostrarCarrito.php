<?php
	include 'global/config.php';
	include 'carrito.php';
	include 'templates/cabecera.php';
	
?>
<br>
<h3> Lista del carrito</h3>
<?php  if(!empty($_SESSION['CARRITO'])){


?>
<table class="table table-light table-bordered">
    <tbody>
        <tr>
            <th while="40%">Descripcion</th>
            <th while="15%" class="text-center">Cantidad</th>
            <th while="20%" class="text-center">Precio</th>
            <th while="50%" class="text-center">Total</th>
            <th while="5%">---</th>
        </tr>

        <?php $total=0;    ?>
        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){ ?>  
        <tr>
            <td while="40%" ><?php echo $producto['NOMBRE']?> </td>
            <td while="15%" class="text-center"> <?php echo $producto['CANTIDAD']?> </td>
            <td while="20%" class="text-center">  <?php echo $producto['PRECIO']?> </td>
            <td while="50%" class="text-center">  <?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2);?> </td>
            <td while="5%"> 
                
            <form action="" method="post">

            <input type="hidden" 
            name="id" 
            id="id"
            value="<?php echo  openssl_encrypt($producto['ID'],COD,KEY); ?>">
                <button 
                class="btn btn-danger" 
                type="submit" 
                name="btnAccion"
                value="Eliminar"

                >Eliminar </button> 
            </form>
            </td>
        </tr>
        <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);    ?>

        <?php } ?>  

    <tr>
<td colspan="3" align="right" ><h3>Total</h3> </td>
<td align="rigth"><h3><?php echo number_format($total,2);?></h3></td>
<td></td>
    </tr>
            <tr>
                <td colspan="5">
                    <form action="pagar.php" method="post">
                        <div class="alert alert-success">


  <div class="form-group">
    <label for="my-input">Nombre</label>
    <input id="Nombre" name="Nombre"  class="form-control" type="text" placeholder="Por favor escribe tu nombre" required>
  </div>

   <div class="form-group">
    <label for="my-input">curp</label>
    <input id="curp" name="curp"  class="form-control" type="text" placeholder="Por favor escribe tu Curp" required>
  </div>

     <div class="form-group">
    <label for="my-input">RFC</label>
    <input id="RFC" name="RFC"  class="form-control" type="text" placeholder="Por favor escribe tu RFC" required>
  </div>

     <div class="form-group">
    <label for="my-input">TELEFONO</label>
    <input id="TELEFONO" name="TELEFONO"  class="form-control" type="tel" placeholder="Por favor escribe tu Telefono" required>
  </div>

    


                        <div class="form-group">
                        <label for="my-input">Correo de contacto:</label>
                        <input 
                        id="email" 
                        name="email" 
                        class="form-control" 
                        type="email"
                        placeholder="Por favor escribe tu correo"
                        required>
                    </div>

                    <small 
                    id="emailHelp" 
                    class="form-text text-muted"
                    >
                    Los productos se enviaran a este correo.
                    </small>
                        </div>

                        <button
                        class="btn btn-primary btn-lg btn-block"
                        type="submit"
                        name="btnAccion"
                        value="proceder"
                        >
                        Proceder a pagar >>>>>

                        </button>
                
                    </form>
                </td>
            </tr>

    </tbody>
</table>
<?php } else { ?>

<div class="alert alert-success">
 No hay productos 
</div>
<?php  } ?>


<?php include 'templates/pie.php'; ?>