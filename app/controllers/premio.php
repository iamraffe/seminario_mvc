<?php namespace controllers;

use \core\view;

class Premio extends \core\controller{
	
	private $_model;

	public function __construct(){
		$this->_model = new \models\premio();
	}

	public function index(){
		$data['title'] = 'I Edición Premio IDCsalud-Quirón a las Mejores Iniciativas en Seguridad del Paciente';
		$data['description'] = 'El Grupo busca fomentar el desarrollo de prácticas seguras para los usuarios y profesionales de la sanidad, reconociendo los mejores proyectos de 2014 y 2015.';
		$data['isPremio'] = 'class="active"';
		View::rendertemplate('header', $data);
		View::render('premio', $data);
		View::rendertemplate('footer', $data);

	}



}
?>