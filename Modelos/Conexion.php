<?php

namespace Modelos;

class Conexion{
    private $datos = array("host"=>"localhost", "user"=>"root", "pass"=>"", "bd"=>"sistema");
    private $conn;

    public function __construct(){
        $this->conn = new \mysqli($this->datos['host'], $this->datos['user'], $this->datos['pass'], $this->datos['bd']);
    }
    public function consultaSimple($consulta){
        $this->conn->query($consulta);
    }
    public function consultaRetorno($consulta){
       $res= $this->conn->query($consulta);
       return $res;
    }
}
















?>