<?php

class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public  function rabiscar()
    {
        if ($this->tampada == true) {
            echo "<h1>Não posso rabiscar, estou tampado</h1>" . PHP_EOL;
        } else {
            echo "<h1>Estou destampado, vou rabiscar</h1>" . PHP_EOL;
        }
    }

    public function tampar()
    {
        $this->tampada = true;
    }

    public  function destampar()
    {
        $this->tampada = false;
    }
}
