<?php

require_once 'Controlador.php';

class ControleRemoto implements Controlador
{
    /* Atributo */

    private $volume;
    private $ligado;
    private $tocando;

    /* Metodos especiais */

    function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function getLigado()
    {
        return $this->ligado;
    }

    public function getTocando()
    {
        return $this->tocando;
    }

    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    public function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }

    public function setTocando($tocando)
    {
        $this->tocando = $tocando;
    }


    /* metodos */

    public function ligar()
    {
        $this->setLigado(true);
    }

    public function desligar()
    {
        $this->setLigado(false);
    }

    public function abrirMenu()
    {
        echo "Está ligado?" . ($this->getLigado())? "SIM <br>":"NÃo <br>";
        echo "Está tocando?" . ($this->getTocando())? "SIM <br>":"NÃo <br>"; 
        echo "Volume: " . $this->getLigado();
        for ($i=0; $i <= $this->getVolume(); $i +=10){
            echo "|";
        }
        echo "<br>";
    }

    public function fecharMenu()
    {
        echo "Fechando menu..";
    }

    public function maisVolume()
    {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
    }

    public function menosVolume()
    {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function ligarMudo()
    {
        if($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
        }
    }

    public function desligarMudo()
    {
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }

    public function play()
    {
        if($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }
    }

    public function pause()
    {
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
}
