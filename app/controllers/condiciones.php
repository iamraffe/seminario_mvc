<?php namespace controllers;

use \core\view;

class Condiciones extends \core\controller{
	
	private $_model;

	public function __construct(){
		$this->_model = new \models\condiciones();
	}

	public function index(){
		$data['title'] = \core\language::show('terms', LANGUAGE_INDEX, \helpers\cookie::get('choose_language'));
		$data['description'] = 'Terminos y condiciones correspondientes a la página web del seminario.';
		View::rendertemplate('header', $data);
		View::render('condiciones', $data);
		View::rendertemplate('footer', $data);

	}



}
?>