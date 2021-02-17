<!DOCTYPE html>
<html>
<head>
	<title>NIÑERAS</title>
	<?php include 'bootstrap.php';
	include 'conexionbd.php';?>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">		

</head>
<body>

<font size=5 face="Comic Sans MS,arial,verdana">

<section class="container">
	<div class="row justify-content-center">
		
         <div class="col-12 col-lg-6 bg-light">

         	<h1 class="text-center mt-5"> Registro de Clientes</h1>
		
		<form action="guardar_cliente.php" method= "POST">

			 <div class="form-group mt-3">
				<input type="text" name="nombres" class="form-control bg-light" size="40" placeholder="Nombres" >
			</div>
			 <div class="form-group mt-3">
				<input type="text" name="apellidos" class="form-control bg-light" size="40" placeholder="Apellidos" >
			</div>
	
			 <div class="form-group mt-3">
			 	

				<label for="tipoidenti" class="form-label">Tipo de identificación</label>
		
				<select class="form-control" name="tipo_identificacion" id="tipoidenti">  
 
	 				<?php 
				    	
						$consulta=" SELECT * FROM tipo_identificacion" ;
						$ejecutar =mysqli_query($conectar,$consulta ) or die (mysql_error($conectar));
					?>
	             
					<?php foreach ($ejecutar as $opciones):  ?>

						<option value="<?php echo $opciones ['id_tipo_identificacion']?>"> <?php echo $opciones ['nombre']?></option> 

				    <?php endforeach ?>
				</select>
			</div>
		
	
			<div class="form-group mt-3">
			
				<input type="text" name="numero_identificacion" class="form-control bg-light" size="40" placeholder="Número documento" >
			</div>			

		
			 <div class="form-group mt-3">
			 	<label for="fechana" class="form-label">Fecha de nacimiento</label>
				<input type="date" class ="form-control bg-light" name="fecha_nacimiento" id="fechana" placeholder="Fecha de nacimiento">
			</div>
		
		 <div class="form-group mt-3">
				<input type="text" name="apellidos" class="form-control bg-light" size="40" placeholder="Apellidos" >
		</div>

	</div>	

 </div>

	
</section>


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

