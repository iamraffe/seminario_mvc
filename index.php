<?php
if(file_exists('vendor/autoload.php')){
	require 'vendor/autoload.php';
} else {
	echo "<h1>Please install via composer.json</h1>";
	echo "<p>Install Composer instructions: <a href='https://getcomposer.org/doc/00-intro.md#globally'>https://getcomposer.org/doc/00-intro.md#globally</a></p>";
	echo "<p>Once composer is installed navigate to the working directory in your terminal/command promt and enter 'composer install'</p>";
	exit;
}

if (!is_readable('app/core/config.php')) {
	die('No config.php found, configure and rename config.example.php to config.php in app/core.');
}

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 *
 */
	define('ENVIRONMENT', 'development');
/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but production will hide them.
 */

if (defined('ENVIRONMENT')){

	switch (ENVIRONMENT){
		case 'development':
			error_reporting(E_ALL);
		break;

		case 'production':
			error_reporting(0);
		break;

		default:
			exit('The application environment is not set correctly.');
	}

}

//initiate config
new \core\config();

//create alias for Router
use \core\router,
    \helpers\url;

//define routes
Router::any('admin', '\controllers\admin\admin@index');
Router::any('admin/login', '\controllers\admin\auth@login');
Router::any('admin/logout', '\controllers\admin\auth@logout');

Router::any('admin/users', '\controllers\admin\users@index');
Router::any('admin/users/add', '\controllers\admin\users@add');
Router::any('admin/users/edit/(:num)', '\controllers\admin\users@edit');

Router::any('admin/ponentes', '\controllers\admin\ponentes@index');
Router::any('admin/ponentes/add', '\controllers\admin\ponentes@add');
Router::any('admin/ponentes/edit/(:num)', '\controllers\admin\ponentes@edit');
Router::any('admin/ponentes/delete/(:num)', '\controllers\admin\ponentes@delete');

Router::any('admin/asistentes', '\controllers\admin\asistentes@index');
Router::any('admin/asistentes/exportexcel', '\controllers\admin\asistentes@exportexcel');
Router::any('admin/asistentes/exportpdf', '\controllers\admin\asistentes@exportpdf');
Router::any('admin/asistentes/add', '\controllers\admin\asistentes@add');
Router::any('admin/asistentes/edit/(:num)', '\controllers\admin\asistentes@edit');
Router::any('admin/asistentes/delete/(:num)', '\controllers\admin\asistentes@delete');

Router::any('admin/invitar', '\controllers\admin\invitar@index');
Router::any('admin/invitar/add', '\controllers\admin\invitar@add');
Router::any('admin/invitar/invitar/(:num)', '\controllers\admin\invitar@invitar');
Router::any('admin/invitar/mass/(:num)', '\controllers\admin\invitar@massinvites');

//HOME
Router::any('', '\controllers\seminario@index');
//PROGRAMA
Router::any('programa', '\controllers\programa@index');
//PONENTES
Router::any('ponentes', '\controllers\ponentes\ponentes@index');
//PERFIL PONENTES
Router::any('(:any)', '\controllers\ponentes\ponentes@ponente');
//COMO LLEGAR
Router::any('como-llegar', '\controllers\comollegar@index');
//REGISTRO
Router::any('registro', '\controllers\registro@index');
//PREMIO
Router::any('premio', '\controllers\premio@index');
//CONDICIONES DE USO
Router::any('condiciones', '\controllers\condiciones@index');

//LANG HANDLER
Router::any('language', '\controllers\seminario@language');

//if no route found
Router::error('\core\error@index');

//turn on old style routing
Router::$fallback = false;

//execute matched routes
Router::dispatch();
