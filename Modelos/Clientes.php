<?php
 namespace Modelos;
 use Modelos\Conexion as Conexion;

	class Clientes{
		private $idcliente;
		private $nombre;
		private $dni;
		private $dir;
		private $con;

	public function __construct(){
		$this->con = new Conexion;
	}
	public function setIdCliente($idcliente){
			$this->idcliente = $idcliente;
	}	

	public function getIdCliente(){
		return $this->idcliente;
	}
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function getNombre(){
		return $this->nombre;
	}

	public function setDni($dni){
		$this->dni = $dni;
	}

	public function getDni(){
		return $this->dni;
	}

	public function setDir($dir){
		$this->dir = $dir;
	}

	public function getDir(){
		return $this->dir;
	}

	
	public function listar(){
		$consulta = "SELECT * FROM cliente";
		$datos = $this->con->consultaRetorno($consulta);

		return $datos;
	}
	public function agregarCliente(){
		$consulta = "INSERT INTO cliente(idcliente, nombre, dni, dir) 
    VALUES(null,'$this->nombre','$this->dni','$this->dir')";
	$this->con->consultaSimple($consulta);
	}
	public function editarCliente(){
		$consulta="UPDATE cliente SET
		nombre='$this->nombre', 
		dni='$this->dni',
		dir='$this->dir'
		 WHERE idcliente='$this->idcliente'";
		$this->con->consultaSimple($consulta);
		
	}
	public function mostrar($id){
		$consulta = "SELECT * FROM cliente WHERE idcliente=".$id;
		$datos = $this->con->consultaRetorno($consulta);
		return $datos;
	}
	public function eliminarCliente($id){
		$consulta = "DELETE FROM cliente WHERE idcliente=".$id;
		$datos = $this->con->consultaRetorno($consulta);
		return $datos;
	}

}
?>