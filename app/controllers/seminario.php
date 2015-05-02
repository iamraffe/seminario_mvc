<?php namespace controllers;

use \core\view;
use \helpers\url;

class Seminario extends \core\controller{
	
	private $_model;

	public function __construct(){
		$this->_model = new \models\seminario();
	}

	public function index(){
		$data['title'] = '';
		$data['isBienvenida'] = 'class="active"';
		//$data['lang'] = \helpers\session::get('language') == 'en' ? 'es' : 'en';

		View::rendertemplate('header', $data);
		View::render('index', $data);
		View::rendertemplate('footer', $data);

	}

	public function language(){

		$language = \helpers\session::get('language');

		if(strcmp($language, 'en') == 0){
			\core\language::set('es');
		} else{
			\core\language::set('en');
		}

		Url::previous();
	}
}
?>