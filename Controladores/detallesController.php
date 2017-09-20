<?php
namespace Controladores;
use Modelos\Facturas as Facturas;
use Modelos\Articulos as Articulos;
use Modelos\Clientes as Clientes;
use Modelos\Detalles as Detalles;
class detallesController{
	private $ventas;

	public function __construct(){
		$this->articulos = new Articulos;
		$this->clientes=new Clientes;
		$this->facturas=new Facturas;
		$this->detalles=new Detalles;
	}
	public function index(){
		if ($_POST) {			
			 $this->facturas->setIdcliente($_POST['idcliente']);
			$this->facturas->setFecha($_POST['fecha']);
			
	

			$this->facturas->agregarFactura();
			header("Location:".URL."detalles");
		}
		 else
		 {
		 	$GLOBALS['factura'] = $this->detalles->mostrar();
		 	$GLOBALS['articulos'] =$this->articulos->listar();
			
		}
		 

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
		 	$datos = $this->detalles->mostrar();
		 	return $datos;
            $GLOBALS['clientes'] =$this->clientes->listar();
		 	$GLOBALS['articulos'] =$this->articulos->listar();
			
		}
	}
}
?>
