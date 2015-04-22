<?php namespace controllers\admin;

use \helpers\url,
		\helpers\session,
		\helpers\exportexcel,
		\helpers\exportpdf,
		\core\view;

class Asistentes extends \core\controller{
	private $_model;

	function __construct()	{
		if(!Session::get('loggedin')){
			Url::redirect('admin/login');
		}				
		$this->_model = new \models\admin\asistentes();
	}

	public function index(){
		$data['title'] = 'Asistentes';
		$data['asistentes'] = $this->_model->getAsistentes();
		$data['js'] = "
				<script type='text/javascript'>
					$(document).ready(function() {
					    $('#asistentes').dataTable();
					} );				
					function delasistente(id, name){
						if(confirm('¿Está seguro de que desea eliminar al asistente '+ name)){
							window.location.href = '".DIR."admin/asistentes/delete/'+id;
						}
					}

				</script>				
		";

		View::renderadmintemplate('header', $data);
		View::render('admin/asistentes', $data);
		View::renderadmintemplate('footer', $data);
	}

	public function add(){
		$data['title'] = 'Agregar Asistente';
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

				Session::set('message', 'Asistente agregado correctamente');

				Url::redirect('admin/asistentes');
			}
		}
		View::renderadmintemplate('header', $data);
		View::render('admin/addasistente', $data, $error);
		View::renderadmintemplate('footer', $data);
	}

	public function edit($id){
		$data['title'] = 'Editar Asistente';
		$data['row'] = $this->_model->getAsistente($id);

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

				$where = array('asistenteID' => $id);

				$this->_model->updateAsistente($data, $where);

				Session::set('message', 'Asistente actualizado correctamente');

				Url::redirect('admin/asistentes');
			}
		}
		View::renderadmintemplate('header', $data);
		View::render('admin/editasistente', $data, $error);
		View::renderadmintemplate('footer', $data);	
	}		

	public function delete($id){

				$this->_model->deleteAsistente(array('asistenteID' => $id));

				Session::set('message', 'Asistente eliminado correctamente');

				Url::redirect('admin/asistentes');

	}

	public function exportexcel(){

		ExportExcel::export($this->_model->getAsistentes());

		Session::set('message', 'La base de datos se ha descargado correctamente');

		Url::redirect('admin/asistentes');

	}			

	public function exportpdf(){
		$header = array('Nombre', 'Apellidos', 'Ciudad', 'Centro', 'Cargo', 'Email', 'Telefono', 'Telefono secundario');
		\helpers\exportpdf::export($header, $this->_model->getAsistentes());

		Session::set('message', 'La base de datos se ha descargado correctamente');

		Url::redirect('admin/asistentes');

	}			
}

?>