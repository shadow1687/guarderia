<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__)."/../Main_Controller.php");

class Maestro extends Main_controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Persona_model');
  }

  public function crear_maestro(){
    if(!$this->session->userdata('username'))
      redirect('login');
    parent::header();
    $this->load->view('maestro/crearmaestro');
    parent::footer();
    $this -> default_vars();
  }


  public function show_lista_maestros(){
    parent::header();
    $this -> load -> view("establecimiento/maestro_listado");
    parent::footer();
    $js_to_load=array();
    array_push($js_to_load,base_url()."/../js/establecimiento/maestro_lista.js");
    array_push($js_to_load,base_url()."static/panel/vendors/datatables.net/js/jquery.dataTables.min.js");
    $css_to_load=array();
    array_push($css_to_load,base_url()."static/panel/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css");
    $this -> default_vars($js_to_load,$css_to_load);
  }

  public function contacto()
  {
    if(!$this->session->userdata('username'))
      redirect('login');

    parent::header();
    $this->load->view('maestro/menu');
    parent::footer();

  }


  public function registrar_evento()
  {
    if(!$this->session->userdata('username'))
      redirect('login');

    $this->load->view('headerpanel');
    $this->load->view('maestro/menu');
    $this->load->view('maestro/registrar_evento');

  }

}
