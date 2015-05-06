<?php namespace controllers\admin;

use \helpers\url,
        \helpers\session,
        \core\view;

class Invitar extends \core\controller
{
    private $_model;

    function __construct()
    {
        if(!Session::get('loggedin')){
            Url::redirect('admin/login');
        }
        $this->_model = new \models\admin\invitar();
    }

    public function index()
    {
        $data['title'] = 'Invitar';
        $data['invitados'] = $this->_model->getInvitados();
        $data['js'] = "
                <script type='text/javascript'>
                    $(document).ready(function() {
                        $('#invitados').dataTable();
                    } );
                    </script>
            ";
        View::renderadmintemplate('header', $data);
        View::render('admin/invitar', $data);
        View::renderadmintemplate('footer', $data);
    }

    public function invitar($id)
    {
        $data['row'] = $this->_model->getInvitado($id);
        $this->_model->sendInvite($data['row']);

        Session::set('message', 'Invitación enviada');

        Url::redirect('admin/invitar');

    }

    public function add()
    {
        $data['title'] = 'Nueva invitación';
        if(isset($_POST['submit'])){
            $Correo = $_POST['Correo'];
            $Hospital = $_POST['Hospital'];
            $Invitado = $_POST['Invitado'];
            $Tratamiento = $_POST['Tratamiento'];

            if($Tratamiento == ''){
                $error[] = 'El campo "Tratamiento" es obligatorios';
            }
            if($Hospital == ''){
                $error[] = 'El campo "Hospital" es obligatorios';
            }
            if($Invitado == ''){
                $error[] = 'El campo "Nombre" es obligatorios';
            }
            if($Correo == '') {
                $error[] = 'El campo "Correo Electrónico" es obligatorios';
            }

            if(!$error){

                $data['row'] = $this->_model->getInvitado(1);
                $data['row'][0]->Correo = $Correo;
                $data['row'][0]->Hospital = $Hospital;
                $data['row'][0]->Invitado = $Invitado;
                $data['row'][0]->Tratamiento = $Tratamiento;

                $this->_model->sendInvite($data['row']);

                Session::set('message', 'Invitación enviada correctamente');
                print_r($data);
                Url::redirect('admin/invitar');
            }
        }        
        View::renderadmintemplate('header', $data);
        View::render('admin/addinvitar', $data, $error);
        View::renderadmintemplate('footer', $data);
    }

    public function massinvites($howMany)
    {
        for($i = 1; $i < 30; $i++){
            $data['row'] = $this->_model->getInvitado($i);
            $this->_model->sendInvite($data['row']);
        }
    }
}
?>
