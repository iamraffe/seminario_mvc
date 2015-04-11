<?php namespace controllers;

use \core\view;

class Seminario extends \core\controller{
	
	private $_model;

	public function __construct(){
		$this->_model = new \models\seminario();
	}

	public function index(){
		$data['title'] = 'Welcome';

		View::rendertemplate('header', $data);
		View::render('index', $data);
		View::rendertemplate('footer', $data);

	}
}
?>