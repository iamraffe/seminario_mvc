<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>

	<!-- Site meta -->
	<meta charset="utf-8">
	<title><?php echo $data['title'].' - '.SITETITLE;?></title>

	<!-- CSS -->
	<?php
		helpers\assets::css(array(			
			'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css',
			'//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.css',
			helpers\url::admin_template_path() . 'css/style.css'			
		))
	?>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Menu</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo DIR;?>admin/">Administración del Seminario</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo DIR;?>admin/ponentes">Ponentes</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Asistentes <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo DIR;?>admin/asistentes">Ver tabla</a></li>
            <li><a href="<?php echo DIR;?>admin/asistentes/export">Descargar tabla</a></li>
          </ul>
        </li>
      </ul>
 			<ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo DIR;?>admin/users">Administradores</a></li>
        <li><a href="<?php echo DIR;?>">Volver a la web</a></li>
        <li><a href="<?php echo DIR;?>admin/logout">Cerrar sesión</a></li>
      </ul>     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">

