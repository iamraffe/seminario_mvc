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
      '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css',
      '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
      '//fonts.googleapis.com/css?family=Muli',
      '//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.css',
      helpers\url::admin_template_path() . 'css/custom.css'   	
		))
	?>

</head>
<body>
  <div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top">
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

    <div id="page-wrapper">

      <div id="admin-panel" class="container-fluid">




<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $data['title'].' - '.SITETITLE;?></title>

    <!-- CSS -->
    <?php
        helpers\assets::css(array(          
      '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css',
      '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css',
      '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
      '//fonts.googleapis.com/css?family=Muli',
      '//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.css',
      helpers\url::admin_template_path() . 'css/custom.css'     
        ))
    ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Menú</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo DIR;?>admin/"><img class="logo-seminario" src="<?php echo DIR;?>/img/logoLogin.svg"></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo \helpers\session::get('currentusername'); ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="<?php echo DIR;?>admin/users/edit/<?php echo \helpers\session::get('currentid');?>"><i class="fa fa-fw fa-gear"></i> Editar</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo DIR;?>admin/logout"><i class="fa fa-fw fa-power-off"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-default side-nav">
                    <li <?php helpers\assets::isActive(DIR.'admin'); ?>>
                        <a href="<?php echo DIR;?>admin/ "><i class="fa fa-fw fa-dashboard"></i> Inicio</a>
                    </li>
                    <li <?php helpers\assets::isActive(DIR.'admin/ponentes'); helpers\assets::isActive(DIR.'admin/ponentes/add'); ?>>
                        <a href="javascript:;" data-toggle="collapse" data-target="#ponentes-submenu"><i class="fa fa-fw fa-table"></i> Ponentes <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="ponentes-submenu" class="collapse">
                            <li>
                                <a href="<?php echo DIR;?>admin/ponentes">Ver ponentes</a>
                            </li>
                            <li>
                                <a href="<?php echo DIR;?>admin/ponentes/add">Nuevo ponente</a>
                            </li>
                        </ul>
                    </li>
                    <li <?php helpers\assets::isActive(DIR.'admin/asistentes'); helpers\assets::isActive(DIR.'admin/asistentes/add'); ?>>
                        <a href="javascript:;" data-toggle="collapse" data-target="#asistentes-submenu"><i class="fa fa-fw fa-table"></i> Asistentes <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="asistentes-submenu" class="collapse">
                            <li>
                                <a href="<?php echo DIR;?>admin/asistentes">Ver Asistentes</a>
                            </li>
                            <li>
                                <a href="<?php echo DIR;?>admin/asistentes/add">Nuevo Asistentes</a>
                            </li>
                            <li>
                                <a href="<?php echo DIR;?>admin/asistentes/export">Descargar BD</a>
                            </li>                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-wrench"></i> Opciones</a>
                    </li>                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">