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
		$data['description'] = 'En esta sección podrá inscribirse para participar en la segunda edición del seminario.';
		$data['isRegistro'] = 'class="active"';
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
				$error[] = 'El campo "Nombre" es obligatorio';
			}
			if($asistentePrimerApellido == ''){
				$error[] = 'El campo "Primer apellido" es obligatorio';
			}
			if($asistenteCentro == ''){
				$error[] = 'El campo "Centro" es obligatorio';
			}
			if($asistenteCiudad == ''){
				$error[] = 'El campo "Ciudad" es obligatorio';
			}
			if($asistenteCargo == ''){
				$error[] = 'El campo "Cargo" es obligatorio';
			}
			if($asistenteEmail == ''){
				$error[] = 'El campo "Correo Electrónico" es obligatorio';
			}
			if($asistenteTelefono == ''){
				$error[] = 'El campo "Teléfono" es obligatorio';
			}

			if(!$error){

				$data = array('asistenteName' => $asistenteName, 'asistentePrimerApellido' => $asistentePrimerApellido, 'asistenteSegundoApellido' => $asistenteSegundoApellido, 'asistenteCentro' => $asistenteCentro, 'asistenteCiudad' => $asistenteCiudad, 'asistenteCargo' => $asistenteCargo, 'asistenteEmail' => $asistenteEmail, 'asistenteTelefono' => $asistenteTelefono, 'asistenteTelefonoSecundario' => $asistenteTelefonoSecundario);
				
				$body = '
						<p>Nombre: '.$asistenteName.'</p>
						<p>Apellidos: '.$asistentePrimerApellido.' '.$asistenteSegundoApellido.'</p>
						<p>Centro: '.$asistenteCentro.'</p>
						<p><p>Ciudad: '.$asistenteCiudad.'</p>
						<p>Cargo: '.$asistenteCargo.'</p>
						<p>Correo Electrónico: '.$asistenteEmail.'</p>
						<p>Telefóno: '.$asistenteTelefono.'</p>
				';

				if($asistenteTelefonoSecundario != ''){
					$body .= '<p>Telefóno secundario: '.$asistenteTelefonoSecundario.'</p>';
				}

				$mail = new \helpers\phpmailer\mail();
				$mail -> CharSet = 'UTF-8';
				$mail->IsHTML(true);
				$mail->SetFrom('noreply@seminarioexcelencia.com', '2do Seminario Internacional de Seguridad del Paciente y Excelencia Clínica');
				$mail->addAddress('seminario.excelencia@idcsalud.es', '2do Seminario Internacional de Seguridad del Paciente y Excelencia Clínica');
				$mail->subject('Nuevo Registro en la Base de Datos [Seminario]');
				$mail->body($body);
				$mail->send();
				$body = '<img src="https://s3-eu-west-1.amazonaws.com/seminario/logoLogin.png" alt="2do Seminario Internacional de Seguridad del Paciente y Excelencia Clínica">';
				$body .= '<p>Su inscripción al 2<sup>o</sup> Seminario Internacional de Seguridad del Paciente y Excelencia Clínica se ha realizado correctamente.</p>';
				$body .= '<p>Le esperamos el próximo Jueves 28 de Mayo en el Aula Magna del Hospital Universitario Fundación Jiménez Díaz a las 8:30h.</p>';
				$body .= '<p>[Este es un mensaje automático - Por favor, no responda directamente a este correo]</p>';

				$mail = new \helpers\phpmailer\mail();
				$mail -> CharSet = 'UTF-8';
				$mail->IsHTML(true);
				$mail->SetFrom('noreply@seminarioexcelencia.com', '2do Seminario Internacional de Seguridad del Paciente y Excelencia Clínica');
				$fullname = $asistenteName.' '.$asistentePrimerApellido;
				$mail->addAddress($asistenteEmail, $fullname);
				$mail->subject('Inscripción 2do Seminario Internacional de Seguridad del Paciente y Excelencia Clínica');
				$mail->body($body);
				$mail->send();

				$this->_model->insertAsistente($data);

				Session::set('message', 'Usted se ha registrado correctamente.');

				Url::redirect('registro', $error);
			}
		}
		View::rendertemplate('header', $data);
		View::render('registro', $data, $error);
		View::rendertemplate('footer', $data);

	}

}
?>