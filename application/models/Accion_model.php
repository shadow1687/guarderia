<?php

if (! defined('BASEPATH')) exit('No direct script access allowed');

class Accion_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();

	}

	function ingresar_accion($data){
		$this->db->insert('accion', array('tipo'=>$data['tipo'],'descripcion'=>$data['descripcion']));

	}


	function obtener_acciones(){
		$query = $this->db->get('accion');
		if ($query->num_rows() >0 ) return $query;



	}


}




?>
