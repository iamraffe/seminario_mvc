<?php namespace controllers;

use \core\view;

class Seminario extends \core\controller{
	
	private $_model;

	public function __construct(){
		$this->_model = new \models\seminario();
	}

	public function index(){
		$data['title'] = '';
		$data['description'] = 'El propósito del seminario es ofrecer a los asistentes la voz de unos ponentes de alta relevancia que difícilmente coincidirían en un acto debido a sus agendas';
		$data['isBienvenida'] = 'class="active"';
		View::rendertemplate('header', $data);
		View::render('index', $data);
		View::rendertemplate('footer', $data);

	}
}
?>