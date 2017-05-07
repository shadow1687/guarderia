<?php
require_once(BASEPATH ."../application/models/Generic_model.php");
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona_model extends Generic_model {

public $variable;

public function __construct()
{
  parent::__construct();
  $db=$this->load->database();
}


	public function get_persona($args=array())
	{
    $filter="";
    $filter.=(isset($args["id"])) ? " AND id={$args["id"]} ":"";
    $qry="SELECT * FROM persona WHERE 1 {$filter}";

    return $this -> qry_exec($qry,$this -> db,"array",array("manage_exception" => TRUE));

	}


  function crear_persona($tipo, $data){
    $this->db->insert('persona', array('tipo'=>$tipo, 'nombre'=>$data['nombre'], 'apellido'=>$data['apellido'], 'dni'=>$data['dni'],
    'email'=>$data['email'], 'nacimiento'=>$data['nacimiento'],'edad'=>$data['edad'], 'direccion'=>$data['direccion'],
    'ciudad'=>$data['ciudad']));
	}


	 function obtener_personas($tipo){
    $tipo_filter=(isset($tipo) && $tipo>=0) ? " AND tipo={$tipo} ":"";
    $qry="SELECT * FROM persona WHERE 1 {$tipo_filter};";
		return $this -> qry_exec($qry,$this -> db,"array",array("manage_exception" => TRUE));
	}

}
