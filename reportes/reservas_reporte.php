<?php

include("../conexion/conectar.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte_reservaciones.xls");


$conet = new Conexion();
$c = $conet->conectando();   
$query="SELECT estado.nombre_estado, numero_reservacion.n_reservacion, numero_reservacion.fecha_hora, mesa.num_mesa, numero_reservacion.num_personas, numero_reservacion.observaciones, persona.id_persona FROM estado INNER JOIN numero_reservacion ON estado.id_estado = numero_reservacion.id_estado INNER JOIN persona ON numero_reservacion.id_cliente = persona.id_persona INNER JOIN mesa ON mesa.mesa_id = numero_reservacion.mesa_id;";
$resultado = mysqli_query($c, $query);
$arreglo = mysqli_fetch_array($resultado); 

?>
<meta charset="UTF-8">
<table class="table table-striped" style="text-align: center;">
    <thead>
		<tr class="table-primary">
			<td>Estado de la reservación</td>
			<td>Reservación N°</td>
			<td>Fecha y Hora</td>
			<td>Numero de mesa</td>
			<td>Numero de personas</td>
			<td>Observaciones</td>
			<td>Cliente</td>	
		</tr>
	</thead>`
	<?php
		while($arreglo = mysqli_fetch_array($resultado)){
	?>
	<tbody>
		<tr>
			<td><?php echo $arreglo['nombre_estado'] ?></td>
			<td><?php echo $arreglo['n_reservacion'] ?></td>
			<td><?php echo $arreglo['fecha_hora'] ?></td>
			<td><?php echo $arreglo['num_mesa'] ?></td>
			<td><?php echo $arreglo['num_personas'] ?></td>
			<td><?php echo $arreglo['observaciones'] ?></td>
			<td><?php echo $arreglo['id_persona'] ?></td>							
		</tr>
    </tbody>
	<?php 
	}
	?>
</table>	


