<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__)."/../Main_Controller.php");

class Maestro_ajax extends Main_controller {

public function __construct()
{
  parent::__construct();
  $this->load->model('Persona_model');
  $this->load->model('Evento_model');
  $this->load->model('Accion_model');
  $this->load->model('Menu_semanal_model');
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

      if ($this->validar($data))
       {
          $this->Persona_model->crear_persona(MAESTRO,$data);
          redirect('welcome');
        }
      else {
            $this->load->view('headerpanel');
            $this->load->view('maestro/menu');
            $this->load->view('maestro/crearmaestro');
          }

    //$this->Persona_model->crear_persona(MAESTRO,$data);

    //redirect('welcome');
		//echo 'Consulta enviada con exito';
  }

  public function validar($data)
  {
    $this->form_validation->set_rules('nombre', 'Nombre', 'required|max_length[50]');
    $this->form_validation->set_rules('apellido', 'Apellido', 'required|max_length[50]');
    $this->form_validation->set_rules('dni', 'DNI', 'required|max_length[10]');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('nacimiento', 'Fecha de nacimiento', 'required');
    $this->form_validation->set_rules('edad', 'Edad', 'required|is_natural_no_zero|less_than[100]');
    $this->form_validation->set_rules('direccion', 'Dirección', 'required');
    $this->form_validation->set_rules('ciudad', 'Ciudad', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        return false;
    }
    else {
      return true;
    }
  }

  public function get_maestros(){
    $res = $this -> Persona_model -> obtener_personas(MAESTRO);
    echo json_encode(array("valid" => 1,"msg" => "","res" =>$res["result"]));
  }



  public function get_acciones_2(){
    $res = $this -> Accion_model -> obtener_acciones_2();
    echo json_encode(array("valid" => 1,"msg" => "","res" =>$res["result"]));
  }



  public function registrar_evento()
  {
    if(!$this->session->userdata('username'))
      redirect('login');
    $data = array(
      'alumnos'        => $this->input->post('alumnos[]'),
      'evento'      => $this->input->post('evento'),
    );
    $this->Evento_model->registrar_eventos($data);
    echo json_encode(array('valid' => 1,"msg" => '', "res" =>null ));
  }


  public function crear_menu_semanal()
  {
    if(!$this->session->userdata('username'))
      redirect('login');

      $data = array(
      'fecha'       => $this->input->post('fecha'),
      'desayuno'    => $this->input->post('desayuno'),
      'almuerzo'    => $this->input->post('almuerzo'),
      'merienda'    => $this->input->post('merienda'),
      'cena'        => $this->input->post('cena')
      );

      if ($this->validar_menu_semanal($data))
       {
          $this->Menu_semanal_model->crear_menu_semanal($data);
          redirect('welcome');
        }
      else {
            $this->load->view('headerpanel');
            $this->load->view('maestro/menu');
            $this->load->view('maestro/crearmenusemanal');
          }

  }


  public function validar_menu_semanal($data)
  {
    $this->form_validation->set_rules('fecha', 'Fecha de menú', 'required');
    $this->form_validation->set_rules('desayuno', 'Desayuno', 'required|max_length[100]');
    $this->form_validation->set_rules('almuerzo', 'Almuerzo', 'required|max_length[100]');
    $this->form_validation->set_rules('merienda', 'Merienda', 'required|max_length[100]');
    $this->form_validation->set_rules('cena', 'Cena', 'required|max_length[100]');


    if ($this->form_validation->run() === FALSE)
    {
        return false;
    }
    else {
      return true;
    }
  }

}
