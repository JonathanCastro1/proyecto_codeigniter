	<div class="row col-md-4 col-md-offset-4">

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

		<div class="page-header"><h2>Login de usuarios</h2></div>

		<div class="text-danger"><?php echo validation_errors(); ?></div>


		<form action="" method="POST">
			<label>Usuario:</label>
			<input type="text" class="form-control" name="usuario">

			<label>Contraseña:</label>
			<input type="password" class="form-control" name="contrasena">
			
			<br>
			<br>
			<button type="submit" name="submit" value="submit" class="btn-success btn-sm glyphicon glyphicon-ok">Ingresar</button>
			<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancelar</button>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</form>
	
	</div>
