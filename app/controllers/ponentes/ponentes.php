<?php namespace controllers\ponentes;

use \core\view;

class Ponentes extends \core\controller{
	
	private $_model;

	public function __construct(){
		$this->_model = new \models\ponentes\ponentes();
	}

	public function index(){
		$data['title'] = \core\language::show('ponentes', 'seminario_basic', \helpers\cookie::get('choose_language'));
		$data['description'] = 'Hemos incluido dos conferenciantes europeos (Bélgica y Noruega). Manteniendo un equilibrio entre las representaciones de Estados Unidos y las europeas.';
		$data['isPonentes'] = 'class="active"';
		$data['ponentes'] = $this->_model->getPonentes(\helpers\cookie::get('choose_language'));

		View::rendertemplate('header', $data);
		View::render('ponentes/index', $data);
		View::rendertemplate('footer', $data);

	}

	public function ponente($slug){
		
		$data['isPonentes'] = 'class="active"';
		$data['ponente'] = $this->_model->getPonente($slug, \helpers\cookie::get('choose_language'));
		$data['title'] = $data['ponente'][0]->ponenteName.' '.$data['ponente'][0]->ponenteApellidos;

		View::rendertemplate('header', $data);
		View::render('ponentes/ponente', $data);
		View::rendertemplate('footer', $data);
	}

}
?>