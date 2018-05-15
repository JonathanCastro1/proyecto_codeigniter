<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_Controller extends CI_Controller {

	
	function __construct()
	{

		// Cargamos el modelo de una vez
		parent::__construct();
		$this->load->model('usuarios_model');
		$this->load->library('fpdf');

	}




	public function index()
	{
		
		// $this->load->model('usuarios_model');

		// Mostramos la data
		 // $data['nombre'] = "algo";


       	// mantego abierta los datos de la session
		$data['usuario'] = $this->session->userdata('usuario');
		$data['contrasena'] = $this->session->userdata('contrasena');


		$data['datos'] = $this->usuarios_model->seleccionar();
		$this->load->view('header/header');
		$this->load->view('navbar/navbar_usuarios',$data);
		$this->load->view('sidebar/sidebar');
		$this->load->view('usuarios/usuarios',$data);
		$this->load->view('footer/footer');

	}

		public function registrarUsuarios()	{
		
		// $data = array('nombre' => $this->input->post('nombre'),
		// 'apellido' => $this->input->post('apellido'),
		// 'estado' => $this->input->post('estado'),
		// 'usuario' => $this->input->post('usuario'),
		// 'contrasena' => $this->input->post('contrasena')			
		//  );		
			
		// $data['nombre'] = "algo";


		// Una forma de transformar en json lo que viene del modelo
		 // $dat = $this->usuarios_model->cargarEstado();

   //       $data['datos'] = json_de($dat);


				// no me ha salido con id en proceso
		  // $data['todo'] = $this->usuarios_model->cargarTodo($id);

 		  $data['estado'] = $this->usuarios_model->cargarEstado();
          $data['ciudad'] = $this->usuarios_model->cargarCiudad();
          $data['municipio'] = $this->usuarios_model->cargarMunicipio();


          // Establecemos las reglas de validacion
         $this->form_validation->set_rules('nombre', 'Ingrese un nombre', 'required|max_length[10]');
         $this->form_validation->set_rules('apellido', 'Ingrese un apellido', 'required|max_length[10]');
         $this->form_validation->set_rules('estado', 'Seleccione un estado', 'required');
         $this->form_validation->set_rules('ciudad', 'Seleccione una ciudad', 'required');
         $this->form_validation->set_rules('municipio', 'Seleccione un municipio', 'required');
         $this->form_validation->set_rules('usuario', 'Ingrese un usuario', 'required|max_length[10]');
         $this->form_validation->set_rules('contrasena', 'Ingrese una contraseña', 'required|max_length[10]');



			if ($this->form_validation->run() == FALSE){

				// Si la validacion es incorreta no mantenemos en esta vista
                   
                    $this->load->view('usuarios/registrar_usuarios',$data);
				
                }else{
				
				// Si la validacion es correta procedemos con el registro

		            $nombre = $this->input->post('nombre');
					$apellido = $this->input->post('apellido');
					$estado = $this->input->post('estado');
					$ciudad = $this->input->post('ciudad');
					$municipio = $this->input->post('municipio');
					$usuario = $this->input->post('usuario');
					$contrasena = $this->input->post('contrasena');

					$this->usuarios_model->registrarUsuarios($nombre ,$apellido ,$estado , $ciudad,$municipio ,$usuario , $contrasena);		



                      $this->load->view('usuarios/mensaje_registro');
                	
                }


		$this->load->view('header/header');
		$this->load->view('navbar/navbar');
		// $this->load->view('usuarios/registrar_usuarios');		
		
		$this->load->view('footer/footer');




          // $data['estado'] = $this->usuarios_model->cargarEstado();
          // $data['ciudad'] = $this->usuarios_model->cargarCiudad();
          // $data['municipio'] = $this->usuarios_model->cargarMunicipio();





		
		// Validamos el formulario

		// if (isset($_POST['submit'])) {
		// 	$nombre = $this->input->post('nombre');
		// 	$apellido = $this->input->post('apellido');
		// 	$estado = $this->input->post('estado');
		// 	$ciudad = $this->input->post('ciudad');
		// 	$municipio = $this->input->post('municipio');
		// 	$usuario = $this->input->post('usuario');
		// 	$contrasena = $this->input->post('contrasena');

		// 	$this->usuarios_model->registrarUsuarios($nombre ,$apellido ,$estado , $ciudad,$municipio ,$usuario , $contrasena);				
		// } 
		

		// $nombre = $this->input->post('nombre');
		// $apellido = $this->input->post('apellido');
		// $estado = $this->input->post('estado');
		// $ciudad = $this->input->post('ciudad');
		// $municipio = $this->input->post('municipio');
		// $usuario = $this->input->post('usuario');
		// $contrasena = $this->input->post('contrasena');			
		 
  		// Pasamos las variables enviadas por Post al metodo registrarUsuarios
		// $this->usuarios_model->registrarUsuarios($nombre ,$apellido ,$estado , $ciudad,$municipio ,$usuario , $contrasena);

		// $this->load->view('header/header');
		// $this->load->view('navbar/navbar');		
		// $this->load->view('usuarios/registrar_usuarios',$data);
		// $this->load->view('footer/footer');

		

	}


		public function cargarCiudad()
	{
	
		 $data['datos'] = $this->usuarios_model->cargarCiudad();


	
		
		

	}


	public function contabilidad()	{
		
			// mantego abierta los datos de la session
		$data['usuario'] = $this->session->userdata('usuario');
		$data['contrasena'] = $this->session->userdata('contrasena');



       $data['datos'] = $this->usuarios_model->seleccionarContabilidad();
       $data['ingresos'] = $this->usuarios_model->totalIngresos(); 
       $data['egresos'] = $this->usuarios_model->totalEgresos();  		
		
		

		$this->load->view('header/header');
		$this->load->view('navbar/navbar_usuarios',$data);
		$this->load->view('sidebar/sidebar');			
		$this->load->view('usuarios/contabilidad',$data);
		$this->load->view('footer/footer');

		

	}

		public function agregar()	{

		// mantego abierta los datos de la session
		$data['usuario'] = $this->session->userdata('usuario');
		$data['contrasena'] = $this->session->userdata('contrasena');

       	
		if (isset($_POST['submit'])) {
			$fecha = $this->input->post('fecha');
			$descripcion = $this->input->post('descripcion');
			$ingreso = $this->input->post('ingreso');
			$egreso = $this->input->post('egreso');			

			$this->usuarios_model->agregarContabilidad($fecha ,$descripcion ,$ingreso , $egreso);
			redirect(base_url("index.php/usuarios_controller/contabilidad"));				
		} 		

		$this->load->view('header/header');
		$this->load->view('navbar/navbar_usuarios',$data);
		$this->load->view('sidebar/sidebar');			
		$this->load->view('usuarios/agregar');
		$this->load->view('footer/footer');


		

	}


		public function eliminar($id)	{
       

			$this->usuarios_model->eliminarContabilidad($id);

			// redirect("base_url()/index.php/usuarios_controller/contabilidad");				
				
				

	}

		// obtengo el parametro id
		public function editar($id)	{       
				
		 	// mantego abierta los datos de la session
			$data['usuario'] = $this->session->userdata('usuario');
			$data['contrasena'] = $this->session->userdata('contrasena');	
			
 			$data['datos'] = $this->usuarios_model->obtenerContabilidadId($id);


				if (isset($_POST['submit'])) {
							$fecha = $this->input->post('fecha');
							$descripcion = $this->input->post('descripcion');
							$ingreso = $this->input->post('ingreso');
							$egreso = $this->input->post('egreso');

				$data['datos']= $this->usuarios_model->editarContabilidad($fecha,$descripcion ,$ingreso ,$egreso ,$id);
				$this->load->view('usuarios/editar',$data);

				redirect(base_url("index.php/usuarios_controller/contabilidad"));
							
				
				} 
				
				$this->load->view('header/header');
				$this->load->view('navbar/navbar_usuarios',$data);
				$this->load->view('sidebar/sidebar');			
				$this->load->view('usuarios/editar',$data);
				$this->load->view('footer/footer');						

	}

	

	public function dashboard()	{


       	// mantego abierta los datos de la session
		$data['usuario'] = $this->session->userdata('usuario');
		$data['contrasena'] = $this->session->userdata('contrasena');

		$data['ingresos'] = $this->usuarios_model->totalIngresos(); 
       	$data['egresos'] = $this->usuarios_model->totalEgresos();  		
		

		$this->load->view('header/header');
		$this->load->view('navbar/navbar_usuarios',$data);
		$this->load->view('sidebar/sidebar');			
		$this->load->view('usuarios/dashboard',$data);
		$this->load->view('footer/footer',$data);

		

	}



	public function login()	{       	
		

		$this->form_validation->set_rules('usuario', 'Ingrese un usuario', 'required|max_length[10]');
         $this->form_validation->set_rules('contrasena', 'Ingrese una contraseña', 'required|max_length[10]');


         if ($this->form_validation->run() == FALSE){

				// Si la validacion es incorreta no mantenemos en esta vista

         			$this->load->view('header/header');
		 			$this->load->view('navbar/navbar');
                    $this->load->view('usuarios/login');
					$this->load->view('footer/footer');

                }else{

  //               		$this->session->set_userdata('nombre','Israel');
		// echo $this->session->userdata('nombre');


					$usuario = $this->input->post('usuario');
					$contrasena = $this->input->post('contrasena');


					$this->session->set_userdata('usuario',$usuario);
					$this->session->set_userdata('contrasena',$contrasena);

					$data['usuario'] = $this->session->userdata('usuario');
					$data['contrasena'] = $this->session->userdata('contrasena');

					// Validamos si existe el usuario y contraseña
					$existeUserPass=$this->usuarios_model->loginUsuarios($usuario ,$contrasena);

					if ($existeUserPass)
				 {
					$this->load->view('header/header');
		 			$this->load->view('navbar/navbar_usuarios',$data);
		 			$this->load->view('sidebar/sidebar');
					$this->load->view('usuarios/dashboard',$data);              
					$this->load->view('footer/footer');		
						
					} else {
						redirect(base_url("index.php/usuarios_controller/login"));
					}
					


					// $this->load->view('header/header');
		 		// 	$this->load->view('navbar/navbar_usuarios',$data);
		 		// 	$this->load->view('sidebar/sidebar');
					// $this->load->view('usuarios/dashboard',$data);              
					// $this->load->view('footer/footer');				

				// redirect(base_url("index.php/usuarios_controller/dashboard"));
				
				// Si la validacion es correta procedemos con el registro
		       						
						// $this->usuarios_model->loginUsuarios($usuario ,$contrasena);
						// $this->load->view('sidebar/sidebar');
						// $this->load->view('usuarios/dashboard');
						
					
					

					// $this->usuarios_model->loginUsuarios($usuario ,$contrasena);		


				 //  $this->load->view('usuarios/dashboard');
				 //  $this->load->view('sidebar/sidebar');	
                      // $this->load->view('usuarios/mensaje_registro');
                	
                }
		

	}


	public function cerrarSession()	{       	
	
		$this->session->sess_destroy();

		redirect(base_url("index.php/usuarios_controller/login"));
	}


	public function reporte()	{       	
	
	 $data = $this->usuarios_model->seleccionarContabilidad();


	 $totalI = $this->usuarios_model->totalIngresos();

	 $totalE = $this->usuarios_model->totalEgresos();  

	 // Creacion del PDF
 
    /*
     * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
     * heredó todos las variables y métodos de fpdf
     */

	 $this->pdf = new fpdf();
    // Agregamos una página
    $this->pdf->AddPage();
    // Define el alias para el número de página que se imprimirá en el pie
    $this->pdf->AliasNbPages();
 
    /* Se define el titulo, márgenes izquierdo, derecho y
     * el color de relleno predeterminado
     */
    $this->pdf->SetTitle("Reporte contable Jonathan Castro");
    $this->pdf->SetLeftMargin(15);
    $this->pdf->SetRightMargin(15);
    $this->pdf->SetFillColor(200,200,200);
 
    // Se define el formato de fuente: Arial, negritas, tamaño 9
    $this->pdf->SetFont('Arial', 'B', 9);
    /*
     * TITULOS DE COLUMNAS
     *
     * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
     */
 
    $this->pdf->Cell(30,5,'ID','TBL',0,'L','1');
    $this->pdf->Cell(30,5,'Fecha','TB',0,'L','1');
    $this->pdf->Cell(40,5,'Descripcion','TB',0,'L','1');
    $this->pdf->Cell(30,5,'Ingreso','TB',0,'L','1');
    $this->pdf->Cell(30,5,'Egreso','TB',0,'L','1');    
    $this->pdf->Ln(7);
    // La variable $x se utiliza para mostrar un número consecutivo
    // $x = 1;
    foreach ($data as $datos) {
      // se imprime el numero actual y despues se incrementa el valor de $x en uno
      // $this->pdf->Cell(15,5,$x++,'BL',0,'C',0);
      // Se imprimen los datos de cada alumno
      $this->pdf->Cell(30,5,$datos->id,'B',0,'L',0);
      $this->pdf->Cell(30,5,$datos->fecha,'B',0,'L',0);
      $this->pdf->Cell(40,5,$datos->descripcion,'B',0,'L',0);
      $this->pdf->Cell(30,5,$datos->ingreso,'B',0,'L',0);
      $this->pdf->Cell(30,5,$datos->egreso,'B',0,'L',0);
     
      //Se agrega un salto de linea
      $this->pdf->Ln(5);
    }

    $this->pdf->Cell(30,5,'Totales Fecha:','TB',0,'L','1');
 	$this->pdf->Cell(70,5, date("d-m-y"),'B',0,'L',0); 

 	// $this->pdf->Cell(25,5,'Total Ingresos:','TB',0,'L','1');
 	$this->pdf->Cell(30,5, $totalI->totalingresos,'B',0,'L',0);

 	

 	// $this->pdf->Cell(25,5,'Total Egresos:','TB',0,'L','1');
 	$this->pdf->Cell(30,5, $totalE->totalegresos,'B',0,'L',0); 
 	

 	  

    // $ingresos->totalingresos?
    /*
     * Se manda el pdf al navegador
     *
     * $this->pdf->Output(nombredelarchivo, destino);
     *
     * I = Muestra el pdf en el navegador
     * D = Envia el pdf para descarga
     *
     */
    $this->pdf->Output("Reporte Contable.pdf", 'I');
		
	}


}
