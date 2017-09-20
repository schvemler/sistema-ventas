<?php 
Namespace Modelos;
	use Modelos\Conexion as Conexion;
	class Categorias{

		private $idcategoria;
		private $categoria;
		private $con;

		public function __construct(){
			$this->con=new Conexion();

		}
		public function setIdCategoria($idcategoria){
			$this->idcategoria = $idcategoria;
		}
		public function getIdCategoria(){
			return $this->idcategoria;
		}
		public function setCategoria($categoria){
			$this->categoria = $categoria;
		}
		public function getCategoria(){
			return $this->categoria;
		}
		public function listar(){
			$consulta= "SELECT * FROM categorias";
			$datos = $this->con->ConsultaRetorno($consulta);
			return $datos;
		}
		



		public function agregarCategoria(){
		$consulta = "INSERT INTO categorias(idcategoria, categoria ) VALUES(null,'$this->categoria')";
			$this->con->consultaSimple($consulta);
		}
		public function nuevo(){

		}
		public function editarCategoria(){
		$consulta="UPDATE categorias SET
		categoria='$this->categoria'
		 WHERE idcategoria='$this->idcategoria'";
		$this->con->consultaSimple($consulta);
		
	}


		public function eliminarCategoria($id){
		$consulta = "DELETE FROM categorias WHERE idcategoria=".$id;
		$datos = $this->con->consultaRetorno($consulta);
		return $datos;
	}
	public function mostrar($id){
		$consulta = "SELECT * FROM categorias WHERE idcategoria=".$id;
		$datos = $this->con->consultaRetorno($consulta);
		return $datos;
	}

	}
 ?>