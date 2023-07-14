<?php
	include 'global/config.php';
	include 'global/conexion.php';
	include 'carrito.php';
	include 'templates/cabecera.php';
	
?>



<script type="text/javascript">
	
$(document).ready(function () {
 
    (function ($) {
 
        $('#filtrar').keyup(function () {
 
             var rex = new RegExp($(this).val(), 'i');
 
             $('.buscar tr').hide();
 
             $('.buscar tr').filter(function () {
               return rex.test($(this).text());
             }).show();
 
        })
 
    }(jQuery));
 
});
</script>






<?PHP

$sentencia=$pdo->prepare("SELECT * FROM `tbventas` ");
$sentencia->execute();
$listaVentas=$sentencia->fetchAll(PDO::FETCH_ASSOC);
//print_r($listaProductos);
		?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<br>
<br>
<div class="input-group">
  <span class="input-group-addon">Buscar</span>
  <input id="filtrar" type="text" class="form-control" placeholder="Ingresa la informacion que desea buscar...">
</div>


<div id="body-wrapper" >
	<a href="http://arkpruebas.xyz/tienda/carrito/excel.php" >
													<span class="glyphicon glyphicon-download-alt"></span> Descargar a Excel
										</a>
	</div>
<br>
<br>

<table class="table table-responsive table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>ClaveTransaccion</th>
            <th>Fecha</th>
            <th>Correo</th>
            <th>Total</th>
            <th>Status</th>
            <th>Nombre</th>
            <th>Curp</th>
            <th>RFC</th>
            <th>Telefono</th>
            
        </tr>
    </thead>
    <tbody class="buscar">

	<?php
							
						 foreach($listaVentas as $d)
							{
								echo "<tr>
										<td>".$d['ID']."</td>
										<td>".$d['ClaveTransaccion']."</td>
										<td>".$d['Fecha']."</td>
										<td>".$d['Correo']."</td>
										<td>".$d['Total']."</td>
										<td>".$d['status']."</td>
										<td>".$d['Nombre']."</td>
										<td>".$d['curp']."</td>
										<td>".$d['RFC']."</td>
										<td>".$d['Telefono']."</td>
										
									  <tr>";
							}
							?>

  

    </tbody>
</table>



</body>



<?php
include 'templates/pie.php';

?>
</html>