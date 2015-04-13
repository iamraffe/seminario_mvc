<?php namespace models\admin;

class Users extends \core\model {

	public function getUsers(){
			return $this->_db->select("SELECT * FROM ".PREFIX."members ORDER BY username");
	}

	public function getUser($id){
		return $this->_db->select("SELECT * FROM ".PREFIX."members WHERE memberID = :id", array(':id' => $id));
	}

	public function insertUser($data){
		$this->_db->insert(PREFIX."members", $data);
	}

	public function updateUser($data, $where){
		$this->_db->update(PREFIX."members", $data, $where);
	}

}

?>