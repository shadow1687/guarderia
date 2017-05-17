<?php

if (! defined('BASEPATH')) exit('No direct script access allowed');

class Evento_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();

	}

	function ingresar_evento($data){
		$this->db->insert('evento', array('fecha_hora'=>$data['fecha_hora'], 'tipo'=>$data['tipo'], 'alumno'=>$data['alumno'],'descripcion'=>$data['descripcion']));

	}


	function obtener_eventos(){
		$query = $this->db->get('evento');
		if ($query->num_rows() >0 ) return $query;


	}


}




?>
