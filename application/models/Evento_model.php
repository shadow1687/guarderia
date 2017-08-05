<?php
require_once(BASEPATH ."../application/models/Generic_model.php");
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Evento_model extends Generic_model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function registrar_eventos($data){
		$qry=array();
		foreach ($data["alumnos"] as $value) {
			$qry[count($qry)]="INSERT INTO evento (evento,persona)
											  VALUES(
															 {$data["evento"]},
															 {$value}
														 );";
		}
		return $this -> qry_exec($qry,$this -> db,"simple",array("manage_exception" => TRUE));
	}


	public function obtener_eventos(){
		$query = $this->db->get('evento');
		if ($query->num_rows() >0 ) return $query;


	}

	public function get_evento($args){
		$filter="";
		$filter.=(isset($args["id_persona"])) ? " AND persona={$args["id_persona"]} ":"";
		$filter.=(isset($args["ts"])) ? " AND ts={$args["ts"]} ":" AND DATE(ts)=CURDATE() ";
		$filter.=(isset($args["evento"])) ? " AND evento={$args["evento"]} ":" ";

		$qry="SELECT e.id id_evento,
								 a.id id_accion,
								 a.descripcion evento,
								 e.ts,
								 a.icon,
								 a.tipo
					FROM evento e
					JOIN accion a ON(e.evento=a.id)
					WHERE 1 {$filter}";

		return $this -> qry_exec($qry,$this -> db,"array",array("manage_exception" => TRUE));
	}


}




?>
