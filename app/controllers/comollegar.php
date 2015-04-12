<?php namespace controllers;

use \core\view;

class ComoLlegar extends \core\controller{
	
	private $_model;

	public function __construct(){
		$this->_model = new \models\comollegar();
	}

	public function index(){
		$data['title'] = 'Cómo llegar';
		$data['isComo-llegar'] = 'class="active"';
		View::rendertemplate('header', $data);
		View::render('comollegar', $data);
		View::rendertemplate('footer', $data);

	}
}
?>