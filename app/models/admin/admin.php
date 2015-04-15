<?php namespace models\admin;

class Admin extends \core\model {

	public function getAsistentesCount(){
		try {

			$stmt = $this->_db->prepare("SELECT count(*) FROM ".PREFIX."asistentes");

			$isQueryOk = $stmt->execute();

		    if ($isQueryOk) {

		      $asistentesCount = $stmt->fetchColumn();

		      return $asistentesCount;  

		    } else {

		      trigger_error('Error executing statement.', E_USER_ERROR);
		    }				

		} catch(PDOException $e) {

		    trigger_error('Error occured while trying to select users in DB:' . $e->getMessage(), E_USER_ERROR);

		}	
	}
	public function getPonentesCount(){
		try {

			$stmt = $this->_db->prepare("SELECT count(*) FROM ".PREFIX."ponentes");

			$isQueryOk = $stmt->execute();

		    if ($isQueryOk) {
		      $ponentesCount = $stmt->fetchColumn();
		      return $ponentesCount;  
		    } else {
		      trigger_error('Error executing statement.', E_USER_ERROR);
		    }			

		} catch(PDOException $e) {

		    trigger_error('Error occured while trying to select users in DB:' . $e->getMessage(), E_USER_ERROR);

		}	
	}

}

?>