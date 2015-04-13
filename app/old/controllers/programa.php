<?php namespace controllers;

use \core\view;

class Programa extends \core\controller{
	
	private $_model;

	public function __construct(){
		$this->_model = new \models\programa();
	}

	public function index(){
		$data['title'] = 'Programa';
		$data['isPrograma'] = 'class="active"';

		View::rendertemplate('header', $data);
		View::render('programa', $data);
		View::rendertemplate('footer', $data);

	}



}
?>