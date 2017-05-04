<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maestro extends CI_Controller {

public function __construct()
{
  parent::__construct();
  $this->load->model('Persona_model');
}


	public function index()
	{
    if(!$this->session->userdata('username'))
      redirect('login');

    $this->load->view('headerpanel');
    $this->load->view('maestro/menu');
    $this->load->view('maestro/crearmaestro');
    //$this->load->view('footer');

	}


  public function crear()
  {
    if(!$this->session->userdata('username'))
      redirect('login');

      $data = array(
			'nombre' => $this->input->post('nombre'),
			'apellido' => $this->input->post('apellido'),
			'dni' => $this->input->post('dni'),
      'email' => $this->input->post('email'),
      'nacimiento' => $this->input->post('nacimiento'),
			'edad' => $this->input->post('edad'),
      'direccion' => $this->input->post('direccion'),
      'ciudad' => $this->input->post('ciudad')
			);

		$this->Persona_model->crear_persona(3, $data);

    redirect('welcome');
		//echo 'Consulta enviada con exito';


  }





}
