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
  			<h1>Lista de Usuarios <small>Registrados</small></h1>
		</div>

		<table id="tabla" >    
												
	                    <thead>
	                        <tr>
	                            <th >Nombre</th>
	                            <th >Apellido</th>
	                            <th >Estado</th>
	                            <th >Ciudad</th>
	                            <th >Municipio</th>	                          
			                            
			                 </tr>
			               </thead>

			 <tbody>
			<?php

		foreach ($datos->result() as $dato) {

			?>
		<tr>		
		<td><?php echo $dato->nombre ?> </td>
		<td><?php echo $dato->apellido ?> </td>
		<td><?php echo $dato->estado ?> </td>
		<td><?php echo $dato->ciudad ?> </td>
		<td><?php echo $dato->municipio ?> </td>

		</tr>

		

		<?php

		}


		?>


		</table>


<!-- <a href="<?php echo base_url();?>index.php/usuarios_controller/registrarUsuarios">INICIO</a> -->
<br>
<br>
<br>


</div>

