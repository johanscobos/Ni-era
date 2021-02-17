<!DOCTYPE html>
<html>
<head>
	<title>NIÑERAS</title>
	<?php include 'bootstrap.php';
	include 'conexionbd.php';?>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">		

</head>
<body>



<section class="container">
	
<h1 class="text-center mt-5"> Registro Clientes</h1><br>
<body>
<font size=5 face="Comic Sans MS,arial,verdana">


<form action="guardar_cliente.php" method= "POST">
<table >

<div>
	Nombres:       
	<input type="text" name="nombres" size="40" >


	Apellidos: 
	<input type="text" name="apellidos" >

</div>
<HR>
<div>

	
			<h2> Tipo de identificacion  </h2>
				
				<select class="form-control" name="tipo_identificacion">   
	 				<?php 
				    	
						$consulta=" SELECT * FROM tipo_identificacion" ;
						$ejecutar =mysqli_query($conectar,$consulta ) or die (mysql_error($conectar));
					?>
	             
					<?php foreach ($ejecutar as $opciones):  ?>

						<option value="<?php echo $opciones ['id_tipo_identificacion']?>"> <?php echo $opciones ['nombre']?></option> 

				    <?php endforeach ?>
				</select>
		
	Numero de documento:
	<input type="text" name="numero_identificacion" >
    Fecha de nacimiento  
	<input type="date" class ="form-control"name="fecha_nacimiento" placeholder="USUARIO">

<HR>
<div>
	Pais:
	 <select name="pais">   
	 				<?php 
				    	
						$consulta=" SELECT * FROM pais" ;
						$ejecutar =mysqli_query($conectar,$consulta ) or die (mysql_error($conectar));
					?>
	             
					<?php foreach ($ejecutar as $opciones):  ?>

						<option value="<?php echo $opciones ['codigo']?>"> <?php echo $opciones ['pais']?></option> <br>

				    <?php endforeach ?>
				</select>
		
	Ciudad:
	<select name="ciudad">   
	 				<?php 
				    	
						$consulta=" SELECT * FROM ciudad" ;
						$ejecutar =mysqli_query($conectar,$consulta ) or die (mysql_error($conectar));
					?>
	             
					<?php foreach ($ejecutar as $opciones):  ?>

						<option value="<?php echo $opciones ['codigo']?>"> <?php echo $opciones ['ciudad']?></option> <br>

				    <?php endforeach ?>
				</select>
	Direccion:
	<input type="text" name="direccion">
		Telefono:
	<input type="text" name="telefono" >
</div>
<HR>	
<div>

		
	Correo:
	<input type="text" name="correo" >
	Contraseña:
	<input type="password" name="contraseña" >
	
</div>
<div>
	

	
</div>
    	

    </select>
	


</table> 
<br>
<input class="redondeando2" type="submit" name="guardar_cliente" value="GUARDAR" >
</form>
</div> 


</section> 
</font>
</body>
</html>