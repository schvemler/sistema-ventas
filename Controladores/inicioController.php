<?php
namespace Controladores;
use Modelos\Articulos as Articulos;
use Modelos\Categorias as Categorias;
class inicioController{
	private $articulos;

	public function __construct(){
		$this->articulos = new Articulos;
		$this->categorias=new Categorias;
	}
	public function index(){
		$datos = $this->articulos->listar();
		return $datos;
	}
	public function nuevo(){
		if ($_POST) {


			$archivo=$_FILES['imagen']['name'];
			$origen=$_FILES['imagen']['tmp_name'];
			$destino="Vistas/template/img/fotos/".$archivo;
			move_uploaded_file($origen, $destino);
			
			$this->articulos->setArticulo($_POST['articulo']);
			$this->articulos->setCosto($_POST['costo']);
			$this->articulos->setPrecio($_POST['precio']);
			$this->articulos->setStock($_POST['stock']);
			$this->articulos->setImagen($destino);
			$this->articulos->setIdCategoria($_POST['idcategoria']);
			

			$this->articulos->agregarArticulo();
			header("Location:".URL."articulos");
		}
		 else
		 {
			$datos =$this->categorias->listar();
			return $datos;
		}
	}
	public function editar($id){
		if ($_POST) {
			
			$archivo=$_FILES['imagen']['name'];
			$origen=$_FILES['imagen']['tmp_name'];
			$destino="Vistas/template/img/fotos/".$archivo;
			move_uploaded_file($origen, $destino);
			


			$this->articulos->setIdArticulo($_POST['idarticulo']);
			$this->articulos->setArticulo($_POST['articulo']);
			$this->articulos->setCosto($_POST['costo']);
			$this->articulos->setPrecio($_POST['precio']);
			$this->articulos->setStock($_POST['stock']);
			$this->articulos->setImagen($destino);
			$this->articulos->setIdCategoria($_POST['idcategoria']);
			

			$this->articulos->editarArticulo();
			header("Location:".URL."articulos");
		}
		else
		{
			$GLOBALS['articulos']=$this->articulos->mostrar($id);
			$GLOBALS['categorias']=$this->categorias->listar();
			
			
		}

	}
	public function eliminar($id){
		
			$this->articulos->setIdArticulo($id);
			$this->articulos->eliminarArticulo($id);
			header("Location:".URL."articulos");
	}
}
?>
