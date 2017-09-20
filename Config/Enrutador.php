<?php
namespace Config;
class Enrutador{
	public static function cargar(Request $request){
		$controlador = $request->getControlador()."Controller";
		$method = $request->getMetodo();
		
		$ruta = ROOT."Controladores".DS.$controlador.".php";
		
		
		$parametro = $request->getParametro();

		
		require_once $ruta;
		$path="Controladores\\".$controlador;
		$controller= new $path;
		
		
		if(!isset($parametro)){
			$datos = call_user_func(array($controller,$method));

	  	}else{

         	$datos = call_user_func_array(array($controller,$method),$parametro);
	  	}
		


		$vista= ROOT."Vistas".DS.$request->getControlador().DS.$request->getMetodo().".php";
		
		require_once $vista;

	}



}









?>