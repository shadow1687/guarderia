<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__)."/../Main_Controller.php");

class Establecimiento_ajax extends Main_controller {

public function __construct()
{
  parent::__construct();
  $this->load->model('Establecimiento_model');
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

      $this -> Establecimiento_model -> crearEstablecimiento($data);
      redirect('welcome');
    }


  public function get_aulas(){
    extract($this -> input -> post(),EXTR_OVERWRITE);
    $maestro=(isset($maestro))? $maestro:FALSE;
    $res = $this -> Establecimiento_model -> get_aulas($maestro);
    echo json_encode(array("valid" => 1,"msg" => "","res" =>$res["result"]));
  }

  public function asignar_alumnos(){
    extract($this -> input -> post(),EXTR_OVERWRITE);
    //$res = $this -> Establecimiento_model -> asignar_alumnos($alumnos,$maestro,$aulas);
    $res=array('result' => compact('alumnos','maestro','aulas'));
    echo json_encode(array("valid" => 1,"msg" => "","res" =>$res["result"]));
  }

}
