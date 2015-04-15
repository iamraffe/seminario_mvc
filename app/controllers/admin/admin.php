<?php namespace controllers\admin;

use \helpers\session,
		\helpers\url,
		\core\view;

class Admin extends \core\controller{
		private $_model;

		public function __construct(){
				if(!Session::get('loggedin')){
					Url::redirect('admin/login');
				}
				$this->_model = new \models\admin\admin();
		}

		public function index(){
			$data['title'] = 'Admin';
			$data['asistentes'] = $this->_model->getAsistentesCount();
			$data['ponentes'] = $this->_model->getPonentesCount();
			View::renderadmintemplate('header', $data);
			View::render('admin/admin', $data);
			View::renderadmintemplate('footer', $data);
		}
}
?>