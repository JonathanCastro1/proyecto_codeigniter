


<br>
<br>
<br>
<br>
<br>
<br>

	<div class="row col-md-4 col-md-offset-4">

		<form action="" method="post">
			
			<label>Fecha:</label>
			<input type="text" id="datepicker" name="fecha" class="form-control"
			value="<?php echo $datos->fecha ?>">
			
			<label>Descripcion:</label>
			
			<textarea name="descripcion"  class="form-control"
			><?php echo $datos->descripcion ?></textarea>
			

			<label>Ingreso:</label>
			<input type="text" class="form-control" name="ingreso"
			value="<?php echo $datos->ingreso ?>">

			<label>Egreso:</label>
			<input type="text" class="form-control" name="egreso"
			value="<?php echo $datos->egreso ?>">

			<br>
			
			<button type="submit" name="submit" value="submit" class="btn-success btn-sm glyphicon glyphicon-ok">Actualizar</button>
			<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancelar</button>

			<br>
			<br>	
			<a href="<?php echo base_url();?>index.php/usuarios_controller/contabilidad"><span class="btn-default btn-sm glyphicon glyphicon-arrow-left">Regresar</span></a>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>

		</form>
		
	</div>