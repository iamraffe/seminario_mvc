<?php namespace controllers;

use \core\view;

class Seminario extends \core\controller{
	
	private $_model;

	public function __construct(){
		$this->_model = new \models\seminario\seminario();
	}

	public function index(){
		$data['title'] = 'Welcome';
		$data['ponentes'] = $this->_model->getPonentes();

		View::rendertemplate('header', $data);
		View::render('seminario/index', $data);
		View::rendertemplate('footer', $data);

	}

	public function ponente($slug){
		$data['title'] = 'Welcome';
		$data['ponente'] = $this->_model->getPonente($slug);

		View::rendertemplate('header', $data);
		View::render('seminario/ponente', $data);
		View::rendertemplate('footer', $data);
	}

}
?>