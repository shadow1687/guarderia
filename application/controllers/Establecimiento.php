<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__)."/Main_Controller.php");

class Establecimiento extends Main_controller {

public function __construct()
{
  parent::__construct();
  $this->load->model('Establecimiento_model');
}


	public function index()
	{
    if(!$this->session->userdata('username'))
      redirect('login');

    $this->load->view('headerpanel');
    $this->load->view('establecimiento/menu');
    $this->load->view('establecimiento/crearestablecimiento');
    //$this->load->view('footer');

	}


  public function crear()
  {
    if(!$this->session->userdata('username'))
      redirect('login');

      $data = array(
			'nombre'      => $this->input->post('nombre'),
			'direccion'   => $this->input->post('direccion'),
      'email'       => $this->input->post('email'),
      'telefono'    => $this->input->post('telefono'),
      'ciudad'      => $this->input->post('ciudad')
			);

		$this->Establecimiento_model->crearEstablecimiento($data);

    redirect('welcome');
		//echo 'Consulta enviada con exito';


  }

  public function contacto()
  {
    if(!$this->session->userdata('username'))
      redirect('login');

    $this->load->view('headerpanel');
    $this->load->view('establecimiento/menu');
    $this->load->view('contacto');
    //$this->load->view('footer');
  }




}
