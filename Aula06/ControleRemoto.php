<?php

require_once 'Controlador.php';

class ControleRemoto implements Controlador
{
    /* Atributo */

    private $volume;
    private $ligado;
    private $tocando;

    /* Metodos especiais */

    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume()
    {
        return $this->volume;
    }

    private function getLigado()
    {
        return $this->ligado;
    }

    private function getTocando()
    {
        return $this->tocando;
    }

    private function setVolume($volume)
    {
        $this->volume = $volume;
    }

    private function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando)
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
        if ($this->getLigado()) {

            echo "---------------- MENU ---------------- <br><br>";
            echo "Está ligado? ";
            echo $this->getLigado() ? "SIM <br>" : "NÃo <br>";
            echo "Está tocando? ";
            echo $this->getTocando() ? "SIM <br>" : "NÃO <br>";
            echo "Volume: ";
            echo $this->getVolume() . " ";
            for ($i = 0; $i <= $this->getVolume(); $i += 1) {
                echo "|";
            }
            echo "<br><br> ---------------- MENU ---------------- <br><br>";
            return;
        }
        echo "<p>ligue a tv para ver o menu</p>";
    }

    public function fecharMenu()
    {
        echo "Fechando menu..";
    }

    public function maisVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
            return;
        }
        echo "<p>ligue a tv para aumentar o volume</p>";
    }

    public function menosVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
            return;
        }
        echo "<p>ligue a tv para abaixar o volume</p>";
    }

    public function ligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function desligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function play()
    {
        if ($this->getLigado() && !$this->getTocando()) {
            $this->setTocando(true);
            return;
        }
        echo "<p>ligue a tv para dar play</p>";
    }

    public function pause()
    {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
            return;
        }
        echo "<p>ligue a tv para dar pause</p>";
    }
}
