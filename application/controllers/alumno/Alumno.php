<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumno extends CI_Controller {

public function __construct()
{
  parent::__construct();
  $this->load->model('Alumno_model');
}



	public function index()
	{
    if(!$this->session->userdata('username'))
      redirect('login');
    $this->load->view('headerpanel');
    $this->load->view('menu');
    $this->load->view('footer');
    $this -> default_vars();

	}

  public function crear_alumno(){
    if(!$this->session->userdata('username'))
      redirect('login');
    $this->load->view('headerpanel');
    $this->load->view('menu');
    $this->load->view('alumno/crearalumno');
    $this -> default_vars();
  }

  public function show_lista_alumnos(){
    $this->load->view('headerpanel');
    $this -> load -> view('alumno/menu');
    $this -> load -> view("alumno/listado");
    $this->load->view('footer');

    $js_to_load=array();
    array_push($js_to_load,base_url()."/../js/alumno/lista.js");
    array_push($js_to_load,base_url()."static/panel/vendors/datatables.net/js/jquery.dataTables.min.js");
    $css_to_load=array();
    array_push($css_to_load,base_url()."static/panel/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css");
    $this -> default_vars($js_to_load,$css_to_load);
  }

  public function default_vars($js_array=array(),$css_array=array()){
    $js=array( );
    $css=array( );
    //cargo estilos
    array_push($css,base_url()."css/jquery-ui.min.css");
    array_push($css,base_url()."css/jquery-ui.structure.min.css");
    array_push($css,base_url()."css/jquery-ui.theme.min.css");
    //cargo scripts para dar funcionalidad comun
    array_push($js,base_url()."js/utils.js");
    array_push($js,base_url()."js/jquery.mask.min.js");
    array_push($js,base_url()."js/jquery-ui.min.js");
    $this -> load_variables(array_merge($js_array,$js),array_merge($css,$css_array));
  }

  public function load_variables($js=array(),$css=array()){
    $data=array();
    $data["js_to_load"]=$js;
    $data["css_to_load"]=$css;
    $this -> load -> view('init',$data);
  }



}
