<?php

namespace App\Http\Controllers;


class MainController extends Controller
{
    public function mostrarValor($valor){
        echo $valor;
    }
    public function mostrarValores($valor1, $valor2){
        echo "valor1: ".$valor1." valor2: ".$valor2;
    }
}
