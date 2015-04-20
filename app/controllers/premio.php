<?php namespace controllers;

use \core\view;

class Premio extends \core\controller{
	
	private $_model;

	public function __construct(){
		$this->_model = new \models\premio();
	}

	public function index(){
		$data['title'] = 'I Edición Premio IDCsalud-Quirón a las Mejores Iniciativas en Seguridad del Paciente';
		$data['isPremio'] = 'class="active"';
		View::rendertemplate('header', $data);
		View::render('premio', $data);
		View::rendertemplate('footer', $data);

	}



}
?>