<?php namespace models\ponentes;

class Ponentes extends \core\model{

	public function getPonentes($ponenteLang = 'es'){
		return $this->_db->select("SELECT * FROM ".PREFIX."ponentes WHERE ponenteLang = :ponenteLang ORDER BY ponenteApellidos ASC", array(':ponenteLang' => $ponenteLang));
	}
	public function getPonente($slug, $ponenteLang = 'es'){
		return $this->_db->select("SELECT * FROM ".PREFIX."ponentes WHERE slug = :slug", array(':slug' => $slug));
	}	
} 

?>