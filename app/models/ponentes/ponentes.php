<?php namespace models\ponentes;

class Ponentes extends \core\model{

	public function getPonentes(){
		return $this->_db->select("SELECT * FROM ".PREFIX."ponentes ORDER BY ponenteApellidos ASC");
	}
	public function getPonente($slug){
		return $this->_db->select("SELECT * FROM ".PREFIX."ponentes WHERE slug = :slug", array(':slug' => $slug));
	}	
} 

?>