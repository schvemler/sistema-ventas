<?php

namespace Config;

class Autoload{

    public static function cargar(){
        spl_autoload_register(function($clase){
    $ruta = $clase.".php";
    include_once $ruta;
    });
    }
}


















?>