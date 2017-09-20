<?php 
	namespace Controladores;
	use Modelos\Clientes as Clientes;
	class clientesController{
		private $clientes;

		public function __construct(){
			$this->clientes=new Clientes;
		}
		public function index(){
			$datos=$this->clientes->listar();
			return $datos;
		}
		public function nuevo(){
			if ($_POST) {
				$this->clientes->setNombre($_POST['nombre']);
				$this->clientes->setDni($_POST['dni']);
				$this->clientes->setDir($_POST['dir']);
				$this->clientes->agregarCliente();
				header("Location:".URL."clientes");
			}
		}
		public function editar($id){
			if ($_POST) {
				$this->clientes->setIdCliente($_POST['idcliente']);
				$this->clientes->setNombre($_POST['nombre']);
				$this->clientes->setDni($_POST['dni']);
				$this->clientes->setDir($_POST['dir']);
				$this->clientes->editarCliente();
				header("Location:".URL."clientes");
			}
			else
			{
				$GLOBALS['clientes']=$this->clientes->mostrar($id);
			}
		}
		public function eliminar($id){
		
			$this->clientes->setIdCliente($id);
			$this->clientes->eliminarCliente($id);
			header("Location:".URL."clientes");
		}




	}


 ?>