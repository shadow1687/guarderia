<?php
require_once(BASEPATH ."../application/models/Generic_model.php");
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Evento_model extends Generic_model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function registrar_eventos($data){
		$qry=array();
		foreach ($data["alumnos"] as $value) {
			$qry[count($qry)]="INSERT INTO evento_persona (tipo,persona)
											  VALUES({$value},
															 {$data["evento"]}
														 );";
		}
		return $this -> qry_exec($qry,$this -> db,"simple",array("manage_exception" => TRUE));
	}


	function obtener_eventos(){
		$query = $this->db->get('evento');
		if ($query->num_rows() >0 ) return $query;


	}


}




?>
