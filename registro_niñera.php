<!DOCTYPE html>
<html>
<head>
	<title>NIÑERAS</title>
	<?php include 'bootstrap.php';?>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">		

</head>
<body>

<h1> Registro Niñera </h1><br>
<body>
<font size=6 face="Comic Sans MS,arial,verdana">
<form action="guardarniñera.php" method= "POST">
<table >

<div >
	Nombres:       
	<input type="text" name="nombres" size="40" >


	Apellidos: 
	<input type="text" name="apellidos" >

</div>
<HR>
<div>
	Tipo documento:
	<input type="text" name="apellido1" >
		
	Numero de documento:
	<input type="text" name="apellido2" >
</div>
<HR>
<div>
	Pais:
	<input type="text" name="apellido1" >
		
	Ciudad:
	<input type="text" name="apellido2" >
	Direccion:
	<input type="text" name="direccion">
</div>
<HR>	
<div>
	Telefono:
	<input type="text" name="apellido1" >
		
	Correo:
	<input type="text" name="apellido2" >
	
</div>
    	

   <div class="input-group">
  <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
  <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">SUBIR HOJA DE VIDA</button>
</div>
	


</table> 
<input class="redondeando2" type="submit" name="guardarniñera" value="GUARDAR" >
</form>
</div>  
</font>
</body>
</html>