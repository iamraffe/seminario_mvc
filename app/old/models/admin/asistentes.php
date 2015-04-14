<?php namespace models\admin;

class Asistentes extends \core\model {

	public function getAsistentes(){
			return $this->_db->select("SELECT * FROM ".PREFIX."asistentes ORDER BY asistenteName");
	}

	public function getAsistente($id){
		return $this->_db->select("SELECT * FROM ".PREFIX."asistentes WHERE asistenteID = :id", array(':id' => $id));
	}

	public function insertAsistente($data){
		$this->_db->insert(PREFIX."asistentes", $data);
	}

	public function updateAsistente($data, $where){
		$this->_db->update(PREFIX."asistentes", $data, $where);
	}

	public function deleteAsistente($where){
		$this->_db->delete(PREFIX."asistentes", $where);
	}	

}

?>