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


//  public function get_acciones(){
//    $data = $this -> Accion_model -> obtener_acciones();
/*
    $arreglo=array();
    foreach ($data ->result_array() as $row)
    {
      $arreglo[] = array(
        'id' => $row['id'];
      );

    }
    header('Content-type: application/json');
    */
//    echo json_encode($data);
//  }

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

      $dtz = new DateTimeZone("America/Argentina/Buenos_Aires"); //Your timezone
      $now = new DateTime(date("Y-m-d H:i:s"), $dtz);

      $alumnos= $data['alumnos'];

      foreach ($alumnos as $alumno)
      {
          $evento= array(
            'fecha_hora'  =>  $now->format("Y-m-d H:i:s"),
            'tipo'        =>  $data['evento'],
            'alumno'      =>  $alumno,
            'descripcion' =>  COMER,
          );
          $this->Evento_model->ingresar_evento($evento);
      }

      redirect('welcome');


      /*if ($this->validar($data))
       {
          $this->Persona_model->crear_persona(MAESTRO,$data);
          redirect('welcome');
        }
      else {
            $this->load->view('headerpanel');
            $this->load->view('maestro/menu');
            $this->load->view('maestro/crearmaestro');
          }
*/
    //$this->Persona_model->crear_persona(MAESTRO,$data);

    //redirect('welcome');
    //echo 'Consulta enviada con exito';
  }

}
