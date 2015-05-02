
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
     
      '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
      '//fonts.googleapis.com/css?family=Muli',
      '//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.css',
      '//cdn.datatables.net/responsive/1.0.5/css/dataTables.responsive.css',
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span> <?php echo \helpers\session::get('currentusername'); ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><span class="fa fa-fw fa-user"></span> Perfil</a>
                        </li>
                        <li>
                            <a href="<?php echo DIR;?>admin/users/edit/<?php echo \helpers\session::get('currentid');?>"><span class="fa fa-fw fa-gear"></span> Editar</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo DIR;?>admin/logout"><span class="fa fa-fw fa-power-off"></span> Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-default side-nav">
                    <li <?php helpers\assets::isActive(DIR.'admin'); ?>>
                        <a href="<?php echo DIR;?>admin/ "><span class="fa fa-fw fa-dashboard"></span> Inicio</a>
                    </li>
                    <li <?php helpers\assets::isActive(DIR.'admin'); ?>>
                        <a href="<?php echo DIR;?>admin/invitar"><span class="fa fa-fw fa-user-plus"></span> Invitados</a>
                    </li>                    
                    <li <?php helpers\assets::isActive(DIR.'admin/ponentes'); helpers\assets::isActive(DIR.'admin/ponentes/add'); ?>>
                        <a href="javascript:;" data-toggle="collapse" data-target="#ponentes-submenu"><span class="fa fa-fw fa-table"></span> Ponentes <span class="fa fa-fw fa-caret-down"></span></a>
                        <ul id="ponentes-submenu" class="collapse">
                            <li>
                                <a href="<?php echo DIR;?>admin/ponentes"><span class="fa fa-fw fa-eye"></span> Ver ponentes</a>
                            </li>
                            <li>
                                <a href="<?php echo DIR;?>admin/ponentes/add"><span class="fa fa-fw fa-user-plus"></span> Nuevo ponente</a>
                            </li>
                        </ul>
                    </li>
                    <li <?php helpers\assets::isActive(DIR.'admin/asistentes'); helpers\assets::isActive(DIR.'admin/asistentes/add'); ?>>
                        <a href="javascript:;" data-toggle="collapse" data-target="#asistentes-submenu"><span class="fa fa-fw fa-table"></span> Asistentes <span class="fa fa-fw fa-caret-down"></span></a>
                        <ul id="asistentes-submenu" class="collapse">
                            <li>
                                <a href="<?php echo DIR;?>admin/asistentes"><span class="fa fa-fw fa-eye"></span> Ver Asistentes</a>
                            </li>
                            <li>
                                <a href="<?php echo DIR;?>admin/asistentes/add"><span class="fa fa-fw fa-user-plus"></span> Nuevo Asistentes</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-toggle="collapse" data-target="#exportar-submenu"><span class="fa fa-fw fa-download"></span> Exportar BD <span class="fa fa-fw fa-caret-down"></span></a>
                                <ul id="exportar-submenu" class="collapse">
                                    <li>
                                        <a href="<?php echo DIR;?>admin/asistentes/exportexcel"><span class="fa fa-fw fa-file-excel-o"></span> Excel</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo DIR;?>admin/asistentes/exportpdf"><span class="fa fa-fw fa-file-pdf-o"></span> PDF</a>
                                    </li>
                                </ul>
                            </li>                            
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo DIR;?>"><span class="fa fa-fw fa-sign-out"></span> Volver a la web</a>
                    </li>                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">