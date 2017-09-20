<?php 
namespace Controladores;
use Modelos\Categorias as Categorias;

class categoriasController{
private $categoria;

	public function __construct(){
		$this->categoria= new Categorias;

	}

	public function index(){
		$datos=$this->categoria->listar();
	return $datos; //llamado por el enrutador

	}
	public function nuevo(){
		if ($_POST) {
			$this->categoria->setCategoria($_POST['categoria']);
			$this->categoria->agregarCategoria();
		}else{

		}
	}
	public function editar($id){
		if ($_POST) {
			$this->categoria->setIdCategoria($_POST['idcategoria']);
			$this->categoria->setCategoria($_POST['categoria']);
			$this->categoria->editarCategoria();
			header("Location:".URL."Categorias");
		}
		else
		{
			$GLOBALS['categorias']=$this->categoria->mostrar($id);
			
			
			
		}

	}
	public function eliminar($id){
		
			$this->categoria->setIdCategoria($id);
			$this->categoria->eliminarCategoria($id);
			header("Location:".URL."Categorias");
	}
}


 ?>