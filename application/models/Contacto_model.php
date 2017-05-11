<?php

if (! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();

	}

	function ingresar_contacto($data){
		$this->db->insert('contacto', array('nombre'=>$data['nombre'], 'apellido'=>$data['apellido'], 'email'=>$data['correo'],'telefono'=>$data['telefono'],'direccion'=>$data['direccion'],
    'ciudad'=>$data['ciudad'],'comentario'=>$data['comentario']));

	}


	function obtener_contactos(){
		$query = $this->db->get('contacto');
		if ($query->num_rows() >0 ) return $query;


	}


}




?>
