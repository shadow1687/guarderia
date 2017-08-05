<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__)."/../Main_Controller.php");

class Alumno_ajax extends Main_controller {

public function __construct()
{
  parent::__construct();
  $this->load->model('Persona_model');
  $this->load->model('Alumno_model');
  //$this->load->library('form_validation');
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


      if ($this->validar($data))
       {
      		$this->Alumno_model->crearAlumno($data);
          redirect('welcome');
        }
      else {
            $this->load->view('headerpanel');
            $this->load->view('alumno/menu');
            $this->load->view('alumno/crearalumno');
          }

		//$this->Alumno_model->crearAlumno($data);

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


  public function get_alumnos(){
    $res = $this -> Alumno_model -> obtenerAlumnos();
    echo json_encode(array("valid" => 1,"msg" => "","res" =>$res["result"]));
  }

  public function get_evento(){
    $this->load->model('Evento_model');
    extract($this -> input -> post(),EXTR_OVERWRITE);
    $result=$this -> Evento_model -> get_evento(array('id_persona' => $id_persona));
    if($result["success"]){
      echo json_encode(array("valid" => 1,"msg" => "","res" =>$result["result"]));
    }else {
      echo json_encode(array('valid' => -1,'msg' => $result["msg"], 'res' => $result["result"]));
    }
  }

}
