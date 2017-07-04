<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__)."/../Main_Controller.php");

class Tutor_ajax extends Main_controller {

public function __construct()
{
  parent::__construct();
  $this->load->model('Tutor_model');
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
          $this -> Tutor_model-> crear_persona(TUTOR,$data);
          redirect('welcome');
        }
      else {
            $this->load->view('headerpanel');
            $this->load->view('tutor/menu');
            $this->load->view('tutor/crearmaestro');
          }

    //$this->Persona_model->crear_persona(TUTOR,$data);

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


  public function get_tutores(){
    $res = $this -> Tutor_model -> obtener_personas(TUTOR);
    echo json_encode(array("valid" => 1,"msg" => "","res" =>$res["result"]));
  }

  public function get_childs(){
    $res = $this -> Tutor_model -> get_childs($this -> session -> userdata('id'));
    if($res["success"]){
      echo json_encode(array("valid" => 1,"msg" => "","res" =>$res["result"]));
    }
    else{
      echo json_encode(array("valid" => 0,"msg" => "","res" =>$res["msg"]));
    }
  }

}
