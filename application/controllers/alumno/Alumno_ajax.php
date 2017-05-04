<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumno_ajax extends CI_Controller {

public function __construct()
{
  parent::__construct();
  $this->load->model('Alumno_model');
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

		$this->Alumno_model->crearAlumno($data);

    redirect('welcome');
		//echo 'Consulta enviada con exito';
  }

  public function get_alumnos(){
    $res = $this -> Alumno_model -> obtenerAlumnos();
    echo json_encode(array("valid" => 1,"msg" => "","res" =>$res["result"]));
  }





}
