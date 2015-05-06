<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php echo LANGUAGE_CODE; ?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?php echo LANGUAGE_CODE; ?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?php echo LANGUAGE_CODE; ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="<?php echo LANGUAGE_CODE; ?>"> <!--<![endif]-->
<head>

    <!-- Site meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rafael Ramirez Urbina (www.fundaseth.es)">
    <meta name="designer" content="Rafael Ramirez Urbina (www.fundaseth.es)">
	<title><?php if($data['title'] != ''){echo $data['title'].' | '.SITETITLE;}else{echo SITETITLE.' | El trato hospitalario del futuro';} ?></title>
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<meta name="description" content="<?php echo $data['description']; ?>">

	<!-- CSS -->
	<?php
		helpers\assets::css(array(
			'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css',
			'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css',
			'//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
			'//fonts.googleapis.com/css?family=Muli',
			'//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.css',
			helpers\url::template_path() . 'css/custom.css'
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
	<div class="container-fluid">
		<header role="banner">
		<div id="logo-placeholder">
			<div class="container">
			  <a href="<?php echo DIR;?>"><img id="logo-seminario" src="img/logoSeminario.svg" alt="2do Seminario Internacional de Seguridad del Paciente y Excelencia Clínica"></a>
              <ul class="right">
                  <li>Jueves, 28 de mayo de 2015</li>
                  <li>Hospital Universitario Fundación Jiménez Díaz (Madrid-España)</li>
              </ul>
			</div>
		</div>
		<nav id="navbar-primary" class="navbar navbar-default" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">

		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-primary-collapse">
		        <span class="sr-only">Menú</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    		<a class="navbar-brand" href="<?php echo DIR;?>"><img class="logo-seminario" src="<?php echo DIR;?>/img/logoLogin.svg" alt="2do Seminario Internacional de Seguridad del Paciente y Excelencia Clínica"><span class="invisible">Inicio</span></a>
		    </div>
		    <div class="collapse navbar-collapse" id="navbar-primary-collapse">
		      <ul class="nav navbar-nav">
		        <li <?php echo $data['isBienvenida'] ?>><a href="<?php echo DIR;?>" title="Bienvenida">Bienvenida</a></li>
		        <li <?php echo $data['isPrograma'] ?>><a href="<?php echo DIR;?>programa" title="Programa">Programa</a></li>
		        <li <?php echo $data['isPonentes'] ?>><a href="<?php echo DIR;?>ponentes" title="Ponentes">Ponentes</a></li>
		        <li <?php echo $data['isComo-llegar'] ?>><a href="<?php echo DIR;?>como-llegar" title="Cómo Llegar">Cómo Llegar</a></li>
		        <li <?php echo $data['isRegistro'] ?>><a href="<?php echo DIR;?>registro" title="Inscripción">Inscripción</a></li>
		        <li <?php echo $data['isPremio'] ?>><a href="<?php echo DIR;?>premio" title="Premios">Premios</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		</header><!-- header role="banner" -->
	</div><!-- container-fluid -->
<div class="container">

