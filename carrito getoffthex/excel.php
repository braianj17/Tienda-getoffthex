<?php
//$excel=$_POST['export']; 
header("Content-type: application/vnd.ms-excel; charset=UTF-16LE"); 
header("Content-disposition: attachment; filename=Reporte.xls"); 


	include 'global/config.php';
	include 'global/conexion.php';
	include 'carrito.php';
//MYSQL

//ValidarRegistro
	$sentencia=$pdo->prepare ("select id,ClaveTransaccion,Fecha,Correo,Total,status,Nombre,curp,RFC,Telefono from tbventas");
	$sentencia->execute();
$listaVentas=$sentencia->fetchAll(PDO::FETCH_ASSOC);


		if(count($sentencia) < 1)
			{			
					echo $msg = "<h2>No se encontraron datos.</2>";
			}
				else
					{
						?>
							<table border="1" cellpadding="4" cellspacing="1" width="100%">
								<caption style="color: gray;">Tabla de datos </caption>
								<thead>
									<tr>
										<th style="font-size:15px"><div align="center"><strong>#</strong></div></th>
										<th style="font-size:15px"><div align="center"><strong>ClaveTransaccion</strong></div></th>
										<th style="font-size:15px"><div align="center"><strong>Fecha</strong></div></th>
										<th style="font-size:15px"><div align="center"><strong>Correo</strong></div></th>
										<th style="font-size:15px"><div align="center"><strong>Total</strong></div></th>
										<th style="font-size:15px"><div align="center"><strong>status</strong></div></th>
										<th style="font-size:15px"><div align="center"><strong>Nombre</strong></div></th>
										<th style="font-size:15px"><div align="center"><strong>Curp</strong></div></th>
										<th style="font-size:15px"><div align="center"><strong>RFC</strong></div></th>
										<th style="font-size:15px"><div align="center"><strong>Telefono</strong></div></th>
					
									</tr>
								</thead>
									<?php
										foreach($listaVentas as $d)
											{
												echo "<tr>
														<td>".$d['id']."</td>
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
							</table>
					<?php
		}
	
?>