<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Notas:
// *No crear carpetas en controller y model
// *No crear carpeta tipo assets adentro de carpeta application
?>


<br>
<br>
<br>


	<div class="row col-md-4 col-md-offset-4">

		<div class="page-header">
  			<h1>Datos Contables <small>Registro Mensual</small></h1>
		</div>

		<table id="tabla" class="table-responsive table-hover" >    
												
	                    <thead>
	                        <tr>
	                            <th >ID</th>
	                            <th >FECHA</th>
	                            <th >DESCRIPCION</th>
	                            <th >INGRESO</th>
	                            <th >EGRESO</th>
			                            
			                 </tr>
			               </thead>

			 <tbody>
			<?php

		foreach ($datos as $dato) {

			?>
		<tr>
		<td><?php echo $dato->id ?> </td>
		<td><?php echo $dato->fecha ?> </td>
		<td><?php echo $dato->descripcion ?> </td>
		<td><?php echo $dato->ingreso ?> </td>
		<td><?php echo $dato->egreso ?> </td>
		<td>
		 <a  href="<?php echo base_url("index.php/usuarios_controller/editar/$dato->id") ?>" ><span class="btn-info btn-sm glyphicon glyphicon-pencil">Editar</span></a>
		</td>
		<td>
		 <a id="eliminar"  href="<?php echo base_url("index.php/usuarios_controller/eliminar/$dato->id") ?>" ><span class="btn-danger btn-sm glyphicon glyphicon-alert">Eliminar</span></a>
		</td>
		</tr>

		

		<?php

		}


		?>
<!-- 
  <?php

foreach ($ingresos as $data) {
	# code...



?>
<h2><?php echo $data->totalingresos ?> </h2>

<?php

}
?>  -->



		<tfoot >  
		  <td colspan="3" class="text-primary">Total para la fecha:<?php echo date("d-m-y"); ?></td>	 
		  <td colspan="1"><?php echo $ingresos->totalingresos?></td>
		  <td colspan="1"><?php echo $egresos->totalegresos?></td>		  
		</tfoot>
<!-- <?php

	print_r($ingresos);
?>
 -->

<!-- <?php
//sacar valor de un array por pantalla

	var_dump($ingresos);
?> -->

		</table>


<a href="<?php echo base_url();?>index.php/usuarios_controller/agregar"><span class="btn-success btn-sm glyphicon glyphicon-plus">Agregar</span></a>
<a  href="<?php echo base_url();?>index.php/usuarios_controller/reporte"><span class="btn-danger btn-danger btn-sm glyphicon glyphicon-file">Version PDF</span></a>
<br>
<br>
<br>


</div>
