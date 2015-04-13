<?php namespace models;

class Registro extends \core\model{

	public function insertAsistente($data){
		$this->_db->insert(PREFIX."asistentes", $data);
	}

} 

?>