<?php

class Lutador
{

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    public function apresentar()
    {
        echo " <br> ";
        echo "Lutador: " . $this->getNome() . "<br>";
        echo " Nacionalidade: " . $this->getNacionalidade() . "<br>";
        echo " Idade: " . $this->getIdade() . "<br>";
        echo " Altura: " .  $this->getAltura() . " m" . "<br>";
        echo " Peso: " . $this->getPeso() . " kg" . "<br>";
        echo " Categoria: " . $this->getCategoria() . "<br>";
        echo " Vitorias: " . $this->getVitorias() . "<br>";
        echo " Derrotas: " .  $this->getDerrotas() . "<br>";
        echo " Empates: " . $this->getEmpates() . "<br>";
    }

    public function status()
    {
        echo $this->getNome() . "<br>";
        echo $this->getCategoria() . "<br>";
        echo $this->getVitorias() . " vitorias" . "<br>";
        echo $this->getDerrotas() . " derrotas" . "<br>";
        echo $this->getEmpates() . " empates" . "<br>";
    }

    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria($peso);
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($peso)
    {
        echo " <br> ";
        if ($peso <= 70.3) {
            $this->categoria = "PESO PENA!";
            return;
        }
        if ($peso <= 80.9) {
            $this->categoria = "PESO MEDIO!";
            return;
        }
        $this->categoria = "PESO PESADO!";
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }

    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }

    public function getEmpates()
    {
        return $this->empates;
    }

    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }
}
