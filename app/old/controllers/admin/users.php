<?php namespace controllers\admin;

use helpers\url,
	\helpers\session,
	\core\view;

class Users extends \core\controller{

	private $_model;
	
	public function __construct(){
		if(!Session::get('loggedin')){
			Url::redirect('admin/login');
		}		
		$this->_model = new \models\admin\users();
	}
	public function index(){

		$data['title'] = 'Users';
		$data['users'] = $this->_model->getUsers();
		View::renderadmintemplate('header', $data);
		View::render('admin/users', $data);
		View::renderadmintemplate('footer', $data);
	}

	public function add(){
		$data['title'] = 'Add User';
		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];

			if($username == ''){
				$error[] = 'Username is required.';
			}

			if($password == ''){
				$error[] = 'Password is required.';
			}

			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$error[] = 'El email no es válido.';
			}

			if(!$error){
				$postdata = array(
					'username' => $username,
					'password' => \helpers\password::make($password),
					'email' => $email
				);
				$this->_model->insertUser($postdata);
				Session::set('message', 'User Added');
				Url::redirect('admin/users');
			}
			
		}
		View::renderadmintemplate('header', $data);
		View::render('admin/adduser', $data, $error);
		View::renderadmintemplate('footer', $data);
	}

	public function edit($id){
		$data['title'] = 'Edit User';
		$data['row'] = $this->_model->getUser($id);
		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];

			if($username == ''){
				$error[] = 'Username is required.';
			}

			if($password == ''){
				$error[] = 'Password is required.';
			}

			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$error[] = 'El email no es válido.';
			}

			if(!$error){
				$postdata = array(
					'username' => $username,
					'password' => \helpers\password::make($password),
					'email' => $email
				);
				$where = array('memberID' => $id);
				$this->_model->updateUser($postdata, $where);
				Session::set('message', 'User Updated');
				Url::redirect('admin/users');
			}
			
		}		
		View::renderadmintemplate('header', $data);
		View::render('admin/edituser', $data, $error);
		View::renderadmintemplate('footer', $data);	
	}
}
?>