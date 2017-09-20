<?php
namespace Controladores;
use Modelos\Facturas as Facturas;
use Modelos\Articulos as Articulos;
use Modelos\Clientes as Clientes;
class facturasController{
	private $ventas;

	public function __construct(){
		$this->articulos = new Articulos;
		$this->clientes=new Clientes;
		$this->facturas=new Facturas;
	}
	public function index(){
		$datos = $this->facturas->listar();
		return $datos;
	}
    public function nuevo(){
		if ($_POST) {			
			 $this->facturas->setIdcliente($_POST['idcliente']);
			$this->facturas->setFecha($_POST['fecha']);
			
	

			$this->facturas->agregarFactura();
			header("Location:".URL."detalles");
		}
		 else
		 {
            $GLOBALS['clientes'] =$this->clientes->listar();
		 	$GLOBALS['articulos'] =$this->articulos->listar();
			
		}
	}
}
?>
