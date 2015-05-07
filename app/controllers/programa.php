<?php namespace controllers;

use \core\view;

class Programa extends \core\controller{
	
	private $_model;

	public function __construct(){
		$this->_model = new \models\programa();
	}

	public function index(){
		$data['title'] = \core\language::show('programa', 'seminario_basic', \helpers\cookie::get('choose_language'));
		$data['description'] = 'Nos centraremos en las estrategias y los programas para mejorar la calidad y la seguridad en un entorno en el que la innovación médica plantea nuevos retos';		
		$data['isPrograma'] = 'class="active"';

		View::rendertemplate('header', $data);
		View::render('programa', $data);
		View::rendertemplate('footer', $data);

	}



}
?>