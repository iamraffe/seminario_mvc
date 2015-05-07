<?php namespace controllers\admin;

use \helpers\url,
		\helpers\session,
		\core\view;

class Ponentes extends \core\controller{
	private $_model;

	function __construct()	{
		if(!Session::get('loggedin')){
			Url::redirect('admin/login');
		}
		$this->_model = new \models\admin\ponentes();
	}

	public function index(){
		$data['title'] = 'Ponentes';
		$data['ponentes'] = $this->_model->getPonentes();
		$data['js'] = "
				<script type='text/javascript'>
					$(document).ready(function() {
						$('#ponentes').dataTable( {
		            'language': {
		                'url': 'dataTables.german.lang'
		            }
		        } );
		      } );
					function delponente(id, name){
						if(confirm('¿Está seguro de que desea eliminar el ponente '+ name)){
							window.location.href = '".DIR."admin/ponentes/delete/'+id;
						}
					}
				</script>
		";

		View::renderadmintemplate('header', $data);
		View::render('admin/ponentes', $data);
		View::renderadmintemplate('footer', $data);
	}

	public function add(){
		$data['title'] = 'Agregar Ponente';
		if(isset($_POST['submit'])){
			$ponenteName = $_POST['ponenteName'];

			$ponenteApellidos = $_POST['ponenteApellidos'];
			$ponenteCentro = $_POST['ponenteCentro'];
			$ponenteBio = $_POST['ponenteBio'];


			if($ponenteName == '' || $ponenteApellidos == '' || $ponenteCentro == '' || $ponenteBio == ''){
				$error[] = 'Todos los campos son obligatorios';
			}

			if(!$error){
				$slug = Url::generateSafeSlug($ponenteName);
				$slug .= Url::generateSafeSlug($ponenteApellidos);
				$file = 'img/'.$_FILES['ponenteImg']['name'];
				move_uploaded_file($_FILES['ponenteImg']['tmp_name'], $file);

				$data = array('ponenteName' => $ponenteName, 'ponenteApellidos' => $ponenteApellidos, 'ponenteCentro' => $ponenteCentro, 'ponenteBio' => $ponenteBio, 'slug' => $slug, 'ponenteImg' => $file);

				$this->_model->insertPonente($data);

				Session::set('message', 'Ponente agregado correctamente');

				Url::redirect('admin/ponentes');
			}
		}
		View::renderadmintemplate('header', $data);
		View::render('admin/addponente', $data, $error);
		View::renderadmintemplate('footer', $data);
	}

	public function edit($id){
		$data['title'] = 'Editar Ponente';
		$data['row'] = $this->_model->getPonente($id);

		if(isset($_POST['submit'])){
			$ponenteName = $_POST['ponenteName'];
			$ponenteApellidos = $_POST['ponenteApellidos'];
			$ponenteCentro = $_POST['ponenteCentro'];
			$ponenteBio = $_POST['ponenteBio'];

			if($ponenteName == '' || $ponenteApellidos == '' || $ponenteCentro == '' || $ponenteBio == ''){
				$error[] = 'Todos los campos son obligatorios';
			}

			if(!$error){
				$slug = Url::generateSafeSlug($ponenteName);
				$slug .= Url::generateSafeSlug($ponenteApellidos);

				$data = array('ponenteName' => $ponenteName, 'ponenteApellidos' => $ponenteApellidos, 'ponenteCentro' => $ponenteCentro, 'ponenteBio' => $ponenteBio, 'slug' => $slug);

				if($_FILES['ponenteImg']['size'] > 0){
					$file = 'img/'.$_FILES['ponenteImg']['name'];
					move_uploaded_file($_FILES['ponenteImg']['tmp_name'], $file);	
					$data['ponenteImg'] = $file;
				}

				$where = array('ponenteID' => $id);

				$this->_model->updatePonente($data, $where);

				Session::set('message', 'Ponente actualizado correctamente');

				Url::redirect('admin/ponentes');
			}
		}
		View::renderadmintemplate('header', $data);
		View::render('admin/editponente', $data, $error);
		View::renderadmintemplate('footer', $data);	
	}		

	public function delete($id){

				$this->_model->deletePonente(array('ponenteID' => $id));

				Session::set('message', 'Ponente eliminado correctamente');

				Url::redirect('admin/ponentes');

	}			
}

?>