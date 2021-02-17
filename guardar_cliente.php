<?php
	include 'conexionbd.php';


	if (isset ($_POST["guardar_cliente"])){
	

	$tipo_identificacion=$_POST["tipo_identificacion"];
	$numero_identificacion=$_POST["numero_identificacion"];
	$fecha_nacimiento=$_POST["fecha_nacimiento"];
	$nombres=$_POST["nombres"];
	$apellidos=$_POST["apellidos"];
	$pais=$_POST["codigo"];
	
	$ciudad=$_POST["ciudad"];
	$telefono=$_POST["telefono"];
	$correo=$_POST["correo"];

	


	 mysqli_query($conectar," INSERT into cliente (tipo_identificacion,numero_identificacion,fecha_nacimiento,nombre,apellido,pais,ciudad,telefono,correo) values ($tipo_identificacion,$numero_identificacion,'$fecha_nacimiento','$nombres','$apellidos',$pais,$ciudad,'$telefono','$correo')") or die ("problemas en el select" .mysqli_error($conectar));

	mysqli_close($conectar);
	}
?>