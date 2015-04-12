<?php namespace controllers\ponentes;

use \core\view;

class Ponentes extends \core\controller{
	
	private $_model;

	public function __construct(){
		$this->_model = new \models\ponentes\ponentes();
	}

	public function index(){
		$data['title'] = 'Ponentes';
		$data['isPonentes'] = 'class="active"';
		$data['ponentes'] = $this->_model->getPonentes();

		View::rendertemplate('header', $data);
		View::render('ponentes/index', $data);
		View::rendertemplate('footer', $data);

	}

	public function ponente($slug){
		$data['title'] = $slug;
		$data['isPonentes'] = 'class="active"';
		$data['ponente'] = $this->_model->getPonente($slug);

		View::rendertemplate('header', $data);
		View::render('ponentes/ponente', $data);
		View::rendertemplate('footer', $data);
	}

}
?>