<?php
	define('DS',DIRECTORY_SEPARATOR);
	define('URL','http://localhost/griciuk/');
	define('ROOT',realpath(dirname(__FILE__)).DS); 
	require_once("Config/Autoload.php");

	Config\Autoload::cargar();
	require_once "Vistas/template.php";
	Config\Enrutador::cargar(new Config\Request);


?>