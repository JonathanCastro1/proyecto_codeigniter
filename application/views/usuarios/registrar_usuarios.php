<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Notas:
// *No crear carpetas en controller y model
// *No crear carpeta tipo assets adentro de carpeta application
?>

<br>
<br>
<br>
<br>


<!-- Nota el print_r es util para ver el formato objeto,json etc -->

  <!-- <h1><?php print_r($datos); ?></h1>  -->

<!--   Aqui mostramos un solo resultado con el return del row() del model -->
<!-- <h1><?php echo $datos->estado ?></h1> -->


<!-- muestra los mensajes de errores al validar -->
<!-- <?php echo validation_errors(); ?> -->


<!-- <script >
	 $.ajax({ 
	 	method: "POST",
   	url: "/index.php/usuarios_controller/cargarciudad"  
	 })
   	.done(function( resp ) {

     // $("#ciudad").html(resp);
    alert(resp);
  	 });
</script> -->



	<div class="row col-md-4 col-md-offset-4">

<!-- 	<form action="<?php echo base_url();?>index.php/usuarios_controller/registrarUsuarios" method="post"> -->

<!-- muestra los mensajes de errores al validar -->

		<div class="page-header"><h2>Registro de usuarios</h2></div>

		<div class="text-danger"><?php echo validation_errors(); ?></div>

		<form action="" method="post">
			
			<label>Nombre:</label>
			<input type="text" class="form-control" name="nombre" id="nombre">
			
			<label>Apellido:</label>
			<input type="text" class="form-control" name="apellido" id="apellido">

	 		<label>Estado:</label>
			<select name="estado" class="form-control" id="estado" >
				<?php

				foreach ($estado as $dato) {

				?>

		
				<option><?php echo $dato->estado?></option>
		
				<?php
				}
				?>
			</select>

			<label>Ciudad:</label>
			<select name="ciudad" class="form-control" id="ciudad" >
				<?php

				foreach ($ciudad as $dato) {

				?>

		
				<option><?php echo $dato->ciudad?></option>
		
				<?php
				}
				?>
			</select>			

			<label>Municipio:</label>
			<select name="municipio" class="form-control" id="municipio" >
				<?php

				foreach ($municipio as $dato) {

				?>

		
				<option><?php echo $dato->municipio?></option>
		
				<?php
				}
				?>
			</select> 

			<!-- prueba ajax -->
			<!-- <label>Estado:</label>
			<select name="estado" class="form-control" id="estado" >
				
			</select>

			<label>Ciudad:</label>
			<select name="ciudad" class="form-control" id="ciudad" >
			
			</select>			

			<label>Municipio:</label>
			<select name="municipio" class="form-control" id="municipio" >
			
			</select>  -->
	

			<label>Usuario:</label>
			<input type="text" class="form-control" name="usuario" id="usuario">

			<label>Contraseña:</label>
			<input type="password" class="form-control" name="contrasena" id="contrasena">

			<br>
			<button type="submit" name="submit" value="submit" class="btn-success btn-sm glyphicon glyphicon-ok"
			>Registrar</button>
			<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancelar</button>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>

		</form>
		
	</div>
