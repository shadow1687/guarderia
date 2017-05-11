<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__)."/../Main_Controller.php");

class Tutor extends Main_controller {

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
    $this->load->view('tutor/menu');
    $this->load->view('tutor/creartutor');
    //$this->load->view('footer');

	}


  public function crear()
  {
    if(!$this->session->userdata('username'))
      redirect('login');

      $data = array(
			'nombre'        => $this->input->post('nombre'),
			'apellido'      => $this->input->post('apellido'),
			'dni'           => $this->input->post('dni'),
      'email'         => $this->input->post('email'),
      'nacimiento'    => $this->input->post('nacimiento'),
			'edad'          => $this->input->post('edad'),
      'direccion'     => $this->input->post('direccion'),
      'ciudad'        => $this->input->post('ciudad')
			);

		$this->Persona_model->crear_persona(TUTOR, $data);

    redirect('welcome');

  }

  public function ver_perfil()
  {
    if(!$this->session->userdata('username'))
      redirect('login');

    $this->load->view('headerpanel');
    $this->load->view('tutor/menu');
    $this->load->view('tutor/perfil');
    //$this->load->view('footer');

  }
  public function show_lista_tutores(){
    $this->load->view('headerpanel');
    $this -> load -> view('establecimiento/menu');
    $this -> load -> view("establecimiento/tutor_listado");
    $this->load->view('footer');

    $js_to_load=array();
    array_push($js_to_load,base_url()."/../js/establecimiento/tutor_lista.js");
    array_push($js_to_load,base_url()."static/panel/vendors/datatables.net/js/jquery.dataTables.min.js");
    $css_to_load=array();
    array_push($css_to_load,base_url()."static/panel/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css");
    $this -> default_vars($js_to_load,$css_to_load);
  }


  public function contacto()
  {
    if(!$this->session->userdata('username'))
      redirect('login');

    $this->load->view('headerpanel');
    $this->load->view('tutor/menu');
    $this->load->view('contacto');
    
  }

}
