<?php namespace controllers;

use \helpers\url,
		\helpers\session,
		\core\view;

class Registro extends \core\controller{
	
	private $_model;

	public function __construct(){
		$this->_model = new \models\registro();
	}

	public function index(){
		$data['title'] = 'Regístrate';
		if(isset($_POST['submit'])){
			$asistenteName = $_POST['asistenteName'];
			$asistentePrimerApellido = $_POST['asistentePrimerApellido'];
			$asistenteSegundoApellido = $_POST['asistenteSegundoApellido'];
			$asistenteCentro = $_POST['asistenteCentro'];
			$asistenteCiudad = $_POST['asistenteCiudad'];
			$asistenteCargo = $_POST['asistenteCargo'];
			$asistenteEmail = $_POST['asistenteEmail'];
			$asistenteTelefono = $_POST['asistenteTelefono'];
			$asistenteTelefonoSecundario = $_POST['asistenteTelefonoSecundario'];

			if($asistenteName == ''){
				$error[] = 'El campo "Nombre" es obligatorios';
			}
			if($asistentePrimerApellido == ''){
				$error[] = 'El campo "Primer apellido" es obligatorios';
			}
			if($asistenteSegundoApellido == ''){
				$error[] = 'El campo "Segundo apellido" es obligatorios';
			}
			if($asistenteCentro == ''){
				$error[] = 'El campo "Centro" es obligatorios';
			}
			if($asistenteCiudad == ''){
				$error[] = 'El campo "Ciudad" es obligatorios';
			}
			if($asistenteCargo == ''){
				$error[] = 'El campo "Cargo" es obligatorios';
			}
			if($asistenteEmail == ''){
				$error[] = 'El campo "Correo Electrónico" es obligatorios';
			}
			if($asistenteTelefono == ''){
				$error[] = 'El campo "Teléfono" es obligatorios';
			}

			if(!$error){

				$data = array('asistenteName' => $asistenteName, 'asistentePrimerApellido' => $asistentePrimerApellido, 'asistenteSegundoApellido' => $asistenteSegundoApellido, 'asistenteCentro' => $asistenteCentro, 'asistenteCiudad' => $asistenteCiudad, 'asistenteCargo' => $asistenteCargo, 'asistenteEmail' => $asistenteEmail, 'asistenteTelefono' => $asistenteTelefono, 'asistenteTelefonoSecundario' => $asistenteTelefonoSecundario);

				$this->_model->insertAsistente($data);

				Session::set('message', 'Usted se ha registrado correctamente.');

				Url::redirect('registro');
			}
		}
		View::rendertemplate('header', $data);
		View::render('registro', $data, $error);
		View::rendertemplate('footer', $data);

	}



}
?>