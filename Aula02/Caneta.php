<?php

class Caneta{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar(){
        if ($this->tampada == true){
            echo "<h1>Não posso rabiscar, estou tampado</h1>" . PHP_EOL;
        } else {
            echo "<h1>Estou destampado, vou rabiscar</h1>" . PHP_EOL;
        }
    }

    function tampar(){
        $this->tampada = true;
    }

    function destampar(){
        $this->tampada = false;
    }
}