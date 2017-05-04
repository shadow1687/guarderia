<?php
require_once(BASEPATH ."../application/models/Generic_model.php");
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Establecimiento_model extends Generic_model {

	function __construct(){
		parent::__construct();
		$this->load->database();

	}

	function crearEstablecimiento($data){
    $this->db->insert('establecimiento', array('nombre'=>$data['nombre'], 'direccion'=>$data['direccion'], 'email'=>$data['email'],
    'telefono'=>$data['telefono'], 'ciudad'=>$data['ciudad']));
	}


	function obtenerEstablecimientos(){
		$query = $this->db->get('establecimiento');
		if ($query->num_rows() >0 ) return $query;
	}


}




?>
