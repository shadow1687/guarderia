<?php
require_once(BASEPATH ."../application/models/Generic_model.php");
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Alumno_model extends Generic_model {

	function __construct(){
		parent::__construct();
		$this->load->database();

	}

	function crearAlumno($data){
		$qry=array();
		$qry[count($qry)]="INSERT INTO persona (apellido,nombre,tipo,dni,email,nacimiento,edad,direccion,ciudad)
										  VALUES({$this -> db -> escape($data['apellido'])},
														 {$this -> db -> escape($data['nombre'])},
														 ".ALUMNO.",
														 {$this -> db -> escape($data['dni'])},
														 {$this -> db -> escape($data['email'])},
														 {$data['nacimiento']},
														 {$data['edad']},
														 {$this -> db -> escape($data['direccion'])},
														 {$this -> db -> escape($data['ciudad'])}
													 );";

		$qry[count($qry)]="SET @id= last_insert_id();";
		//genero el alumno vacio
		$qry[count($qry)]="INSERT INTO alumno values(@id,0,0,0,sysdate());";

		return $this -> qry_exec($qry,$this -> db,"simple",array("manage_exception" => TRUE));
	}


	function obtenerAlumnos(){
		$qry="SELECT a.*,
									p1.*,
								 GROUP_CONCAT(CONCAT(p2.apellido,', ',p2.nombre) SEPARATOR '</br>') tutores,
								 GROUP_CONCAT(CONCAT(p3.apellido,', ',p3.nombre) SEPARATOR '</br>') maestros
					FROM alumno a
					JOIN persona p1 ON(a.id_persona=p1.id)
					LEFT JOIN relacion r1 ON (p1.id=r1.id1 and r1.st=".REL_PADRE_HIJO.")
					LEFT JOIN persona p2 ON(p2.id=r1.id2 and p2.tipo=".TUTOR.")
					LEFT JOIN relacion r2 ON (p1.id=r2.id1 and r2.st=".REL_ALUMNO_MAESTRA.")
					LEFT JOIN persona p3 ON(p3.id=r2.id2 and p3.tipo=".MAESTRO.")
					WHERE a.st=0
					GROUP BY a.id_persona;";
		return $this -> qry_exec($qry,$this -> db,"array",array("manage_exception" => TRUE));
	}


}




?>
