<?php namespace controllers;

use \core\view;
use \helpers\cookie;
use helpers\url;

class Seminario extends \core\controller{
	
	private $_model;

	public function __construct(){
		$this->_model = new \models\seminario();
	}

	public function index(){
		$data['title'] = '';
		$data['description'] = 'El propósito del seminario es ofrecer a los asistentes la voz de unos ponentes de alta relevancia que difícilmente coincidirían en un acto debido a sus agendas';
		$data['isBienvenida'] = 'class="active"';
		//setcookie('lang', 'es', time() + (86400 * 30), "/");
		//Cookie::set('hole','en');
		View::rendertemplate('header', $data);
		View::render('index', $data);
		View::rendertemplate('footer', $data);

	}
	public function lang(){
		if(strcmp(Cookie::get('language'), 'es') == 0){
			Cookie::set('language', 'en');
			//setcookie('lang', 'en', time() + (86400 * 30), "/");
		}
		else{
			Cookie::set('language', 'es');
			//setcookie('lang', 'es', time() + (86400 * 30), "/");
		}
		//setcookie('lang', 'en', time() + (86400 * 30), "/");
		Url::previous();
	}
}
?>