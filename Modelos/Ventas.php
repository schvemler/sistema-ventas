<?php
 namespace Modelos;
use Modelos\Conexion as Conexion;

	class Ventas{
		private $idarticulo;
		private $articulo;
		private $costo;
		private $precio;
		private $stock;
	
		private $conn;
		private $ruta;

	public function __construct(){
		$this->conn = new Conexion;
	}
	public function setIdArticulo($idarticulo){
			$this->idarticulo = $idarticulo;
	}	

	public function getIdArticulo(){
		return $this->articulo;
	}
	public function setArticulo($articulo){
		$this->articulo = $articulo;
	}
	public function getArticulo(){
		return $this->articulo;
	}

	public function setCosto($costo){
		$this->costo = $costo;
	}

	public function getCosto(){
		return $this->costo;
	}

	public function setPrecio($precio){
		$this->precio = $precio;
	}

	public function getPrecio(){
		return $this->precio;
	}

	public function setStock($stock){
		$this->stock = $stock;
	}

	public function getStock(){
		return $this->stock;
	}

	public function setImagen($imagen){
		$this->imagen = $imagen;
	}

	public function getImagen(){
		return $this->imagen;
	}

	public function setIdCategoria($idcategoria){
		$this->idcategoria = $idcategoria;
	}

	public function getIdCategoria(){
		return $this->idcategoria;
	}


	public function listar(){
		$consulta = "SELECT * FROM cliente, factura WHERE factura.idcliente=cliente.idcliente";
		$datos = $this->conn->consultaRetorno($consulta);

		return $datos;
	}
	public function agregarArticulo(){
		$consulta = "INSERT INTO articulos(idarticulo, articulo, costo, precio, stock, imagen, idcategoria) 
    VALUES(null,'$this->articulo','$this->costo','$this->precio', '$this->stock', '$this->imagen','$this->idcategoria')";
	$this->conn->consultaSimple($consulta);
	}
	public function editarArticulo(){
		$consulta="UPDATE articulos SET
		articulo='$this->articulo', 
		costo='$this->costo',
		precio='$this->precio',
		stock='$this->stock',
		idcategoria='$this->idcategoria',
		imagen='$this->imagen'
		 WHERE idarticulo='$this->idarticulo'";
		$this->conn->consultaSimple($consulta);
		
	}
	public function mostrar($id){
		$consulta = "SELECT * FROM articulos WHERE idarticulo=".$id;
		$datos = $this->conn->consultaRetorno($consulta);
		return $datos;
	}
	public function eliminarArticulo($id){
		$consulta = "DELETE FROM articulos WHERE idarticulo=".$id;
		$datos = $this->conn->consultaRetorno($consulta);
		return $datos;
	}

}

?>