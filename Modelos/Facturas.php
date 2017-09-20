<?php
 namespace Modelos;
use Modelos\Conexion as Conexion;

	class Facturas{
		private $con;
		private $ruta;

	public function __construct(){
		$this->conn = new Conexion;
	}
    public function setIdfactura($idfactura){
			$this->idfactura = $idfactura;
	}	

	public function getIdfactura(){
		return $this->idfactura;
	}





	public function setIdcliente($idcliente){
			$this->idcliente = $idcliente;
	}	

	public function getIdcliente(){
		return $this->idcliente;
	}



	public function setFecha($fecha){
		$this->fecha = $fecha;
	}
	public function getFecha(){
		return $this->fecha;
	}

	public function setMonto($monto){
		$this->monto = $monto;
	}

	public function getMonto(){
		return $this->monto;
	}

	
	



	public function listar(){
		$consulta = "SELECT * FROM cliente, factura WHERE factura.idcliente=cliente.idcliente";
		$datos = $this->conn->consultaRetorno($consulta);

		return $datos;
	}
	public function agregarFactura(){
		$consulta = "INSERT INTO factura(idcliente, fecha, monto) 
    VALUES('$this->idcliente','$this->fecha',0)";
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