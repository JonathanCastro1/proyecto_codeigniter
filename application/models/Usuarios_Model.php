<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_Model extends CI_Model {

	function __construct()
	{		
		parent::__construct();
		// Carga de la base de datos de una vez
		$this->load->database();
	}


	public function seleccionar()
	{
		// Carga de la base de datos
		// $this->load->database();
		
		$sql = "SELECT nombre,apellido,estado,ciudad,municipio
		 from usuarios";

		$query = $this->db->query($sql);

		return $query;
	}

		public function registrarUsuarios($nombre ,$apellido ,$estado ,$ciudad ,$municipio,$usuario , $contrasena)
	{
		// Carga de la base de datos
		$this->load->database();
		
		$sql = "INSERT INTO usuarios VALUES
		       (null,
		        '$nombre',
		         '$apellido',
		         '$estado',
		         '$ciudad',
		         '$municipio',
		         '$usuario',
		         '$contrasena')";

		$query = $this->db->query($sql);

		return $query;
	}

		public function cargarEstado()
	{
		
		
		// $sql = "SELECT estado
		//  from usuarios";

		$query = $this->db->query("SELECT estado
		 from hubicacion");


		
         // Retornamos 1 sola fila
		 // return $query->row();

		  // Retornamos todoslos resultados
		  return $query->result();

		   // Retornamos en json
		// return json_encode($query);
	}

		public function cargarCiudad()
	{
				

		$query = $this->db->query("SELECT ciudad
		 from hubicacion");      

		  
		  return $query->result();

		 
	}

		public function cargarMunicipio()
	{
				

		$query = $this->db->query("SELECT municipio
		 from hubicacion");      

		  
		  return $query->result();

		 
	}


	// en proceso no me ha salido

	// 	public function cargarTodo($id)
	// {
				

	// 	$query = $this->db->query("SELECT estado,municipio,ciudad from usuarios where id='$id' ");      

		  
	// 	  return $query;

		 
	// }


		public function seleccionarContabilidad()
	{
				

		$query = $this->db->query("SELECT id,fecha,descripcion,ingreso,egreso
		 from contabilidad");	
        

		  return $query->result();
	}



	public function agregarContabilidad($fecha ,$descripcion ,$ingreso ,$egreso)
	{
				
		$sql = "INSERT INTO contabilidad VALUES
		       (null,
		        '$fecha',
		        '$descripcion',
		        '$ingreso',
		        '$egreso')";

		$query = $this->db->query($sql);

		return $query;
	}


	public function totalIngresos()
	{
			
			// Importante poner el alias osea(totalingresos) para poder mostrarla en la vista	
		$sql = "SELECT SUM(ingreso)  AS totalingresos FROM contabilidad WHERE ingreso < 10000000";

		$query = $this->db->query($sql);    	
		
		 return $query->row();
	}

		public function totalEgresos()
	{			
				
		$sql = "SELECT SUM(egreso)  AS totalegresos FROM contabilidad WHERE egreso < 10000000";

		$query = $this->db->query($sql);    	
		
		 return $query->row();
	}

		public function eliminarContabilidad($id)
	{			
				
		$sql = "DELETE from contabilidad where id='$id'";

		$query = $this->db->query($sql);    	
		
		 return $query;
	}

			public function editarContabilidad($fecha,$descripcion ,$ingreso ,$egreso ,$id)
	{			
				
		$sql = "UPDATE contabilidad SET fecha = '$fecha',
				descripcion = '$descripcion',
				ingreso = $ingreso,
				egreso = $egreso
		       WHERE id = $id";

		$query = $this->db->query($sql);    	
		
		 return $query;
	}

	public function obtenerContabilidadId($id)
	{
		
		$sql = "SELECT id,fecha,descripcion,ingreso,egreso
		 from contabilidad where id= $id";

		$query = $this->db->query($sql);

		return $query->row();
	}


		public function loginUsuarios($usuario,$contrasena)
	{
		
		$sql = "SELECT usuario,contrasena from usuarios where usuario='$usuario' and
		contrasena='$contrasena'	
		";

		$query = $this->db->query($sql);

		return $query->row();
	}


}

		