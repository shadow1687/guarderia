<?php

class generic_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

public function qry_exec($query,$db,$type,$config=array()){
  $manage_exception=(isset($config["manage_exception"]) ? TRUE:FALSE);
  $result=FALSE;

	$execute=($type=='simple')? 'simple_query':'query';

	if(is_array($query)){
		$count=count($query);
		$ind=1;
		foreach ($query as $qry) {
			if($ind!=$count){
				$db -> simple_query($qry);
			}
			else{
				$db -> $execute($qry);
			}
			$ind++;
		}
	}


	switch($type){
    case 'simple' : {
                      $qry = $this->db->simple_query($query);
                      $result = $qry;
    }break;
    case 'array' :
    case 'row'   :
    case 'value' :{
                    $qry= $this->db->query($query);
                    switch($type){
                        case 'array'  : $result = $qry -> result_array();break;
                        case 'row'    : $result = $qry -> row();break;
                        case 'value'  : {
                                          $row = $qry -> row_array();

																					if(is_array($row)){
																						$result = reset($row);
																					}
                                          else{
																						$result=NULL;
																					}
                        }break;
                    }
    }break;
  }

  if(!$result){
    if($manage_exception){
      return array('success' => FALSE, 'msg' => $this->db->error(),'result' => $result);
    }
    else{
      return $this->db->error();
    }
  }
	else{
		if($manage_exception){
			return array('success' => TRUE, 'msg' => '','result' => $result);
		}
		else{
			return $result;
		}
	}

}


}


?>
