<?php namespace controllers;

use \core\view;

class Condiciones extends \core\controller{
	
	private $_model;

	public function __construct(){
		$this->_model = new \models\condiciones();
	}

	public function index(){
		$data['title'] = 'Condiciones de uso';
		$data['title'] = 'Terminos y condiciones correspondientes a la página web del seminario.';
		View::rendertemplate('header', $data);
		View::render('condiciones', $data);
		View::rendertemplate('footer', $data);

	}



}
?>