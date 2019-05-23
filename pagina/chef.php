<?php 

$conexion=mysqli_connect('bhvvnhldc187tsiitiio-mysql.services.clever-cloud.com','ub7skhfoscwcmgdz','eUcpD6hq3DsacPx04Q5o','bhvvnhldc187tsiitiio');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>NOMBRE</td>
			<td>TELEFONO</td>
			<td>CORREO</td>
			<td>PRECIO</td>
			<td>UBICACION</td>	
		</tr>

		<?php 
		$sql="SELECT * from chef";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['NOMBRE'] ?></td>
			<td><?php echo $mostrar['TELEFONO'] ?></td>
			<td><?php echo $mostrar['CORREO'] ?></td>
			<td><?php echo $mostrar['PRECIO'] ?></td>
			<td><?php echo $mostrar['UBICACION'] ?></td>
		
		</tr>
	<?php 
	}
	 ?>
	</table>
<body background="fenix2 (2).png">
</body>
</html>