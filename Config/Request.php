<?php 
	namespace Config;
	class Request{

		private $controlador;
		private $metodo;
		private $parametro;


		public function __construct(){
			
			if (isset($_GET['url'])) {
				
				$ruta = $_GET['url'];

				$ruta = explode("/", $ruta);

				if ($ruta[0]=='index.php'){
				$this->controlador = 'articulos';

                }else{
                	$this->controlador = array_shift($ruta);
                }

                $this->metodo = array_shift($ruta);

                if(!$this->metodo){
                	$this->metodo = 'index';
                }
                $this->parametro = $ruta;



			}else{
				$this->controlador = 'articulos';
				$this->metodo = 'index';

			}
		}
			public function getControlador(){
				return $this->controlador;
			}
			public function getMetodo(){
				return $this->metodo;
			}
			public function getParametro(){
				return $this->parametro;
			}
	}	




?>