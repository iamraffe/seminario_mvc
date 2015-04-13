<?php namespace models\admin;

class Ponentes extends \core\model {

	public function getPonentes(){
			return $this->_db->select("SELECT * FROM ".PREFIX."ponentes ORDER BY ponenteName");
	}

	public function getPonente($id){
		return $this->_db->select("SELECT * FROM ".PREFIX."ponentes WHERE ponenteID = :id", array(':id' => $id));
	}

	public function insertPonente($data){
		$this->_db->insert(PREFIX."ponentes", $data);
	}

	public function updatePonente($data, $where){
		$this->_db->update(PREFIX."ponentes", $data, $where);
	}

	public function deletePonente($where){
		$this->_db->delete(PREFIX."ponentes", $where);
	}	

}

?>