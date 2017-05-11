
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {




	function __construct(){
		parent::__construct();
		$this->load->model('Contacto_model');

	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

	}

	public function insertar()
	{
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'apellido' => $this->input->post('apellido'),
			'correo' => $this->input->post('email'),
			'telefono' => $this->input->post('telefono'),
      'direccion' => $this->input->post('direccion'),
      'ciudad' => $this->input->post('ciudad'),
			'comentario' => $this->input->post('comentario')
			);

		$this->Contacto_model->ingresar_contacto($data);

		//$this->sendMailUser($data);
		//$this->sendMailAdmin($data);

		redirect('welcome');
	}

	public function sendMailAdmin($data)
	{
		//cargamos la libreria email de ci
		$this->load->library("email");

		//configuracion para gmail
		$configGmail = array(
			'protocol' => 'smtp',
			'smtp_host' => 'mail.abtm.org.ar',
			'smtp_port' => 25,
			'smtp_user' => 'contacto@abtm.org.ar',
			'smtp_pass' => 'abtm2016',
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		);



		//cargamos la configuración para enviar con gmail
		$this->email->initialize($configGmail);

		$this->email->from('contacto@abtm.org.ar');
		//$this->email->to('facu.carignano1988@gmail.com');
		$this->email->to('contacto.abtm.web@gmail.com');
		$this->email->subject('Nueva consulta desde la web');

		$this->email->message('<h2>Ha ingresado una nueva consulta vía web</h2>
						<br>[Nombre] = '. $data['nombre'] .'
						<br>[Apellido] = '. $data['apellido'] .'
						<br>[Correo electrónico] = '. $data['correo'] .'
						<br>[Teléfono] = '. $data['telefono'] .'
						<br>[Comentario] = '. $data['comentario']
						);
		$this->email->send();
		//con esto podemos ver el resultado
		//var_dump($this->email->print_debugger());
	}

	public function sendMailUser($data)
	{
		//cargamos la libreria email de ci
		$this->load->library("email");

		//configuracion para gmail
		$configGmail = array(
			'protocol' => 'smtp',
			'smtp_host' => 'mail.abtm.org.ar',
			'smtp_port' => 25,
			'smtp_user' => 'contacto@abtm.org.ar',
			'smtp_pass' => 'abtm2016',
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		);


		//cargamos la configuración para enviar con gmail
		$this->email->initialize($configGmail);

		$this->email->from('contacto@abtm.org.ar');
		//$this->email->to('facu.carignano1988@gmail.com');
		$this->email->to($data['correo']);
		$this->email->subject('Gracias por contactarte con la ABTM');

		$this->email->message('<h2>Te confirmamos que tu consulta nos ha llegado y será contestada en breve!</h2>
						<br>[Nombre] = '. $data['nombre'] .'
						<br>[Apellido] = '. $data['apellido'] .'
						<br>[Correo electrónico] = '. $data['correo'] .'
						<br>[Teléfono] = '. $data['telefono'] .'
						<br>[Comentario] = '. $data['comentario'] .'
						<hr><br> ABTM Web');
		$this->email->send();
		//con esto podemos ver el resultado
		//var_dump($this->email->print_debugger());
	}



}
