<?php

class ContaBanco
{
    /* 
   + atributo
       - numConta
       - tipo (cc ou cp)
       - dono
       - saldo 
       -status

   + Metodo    
         abrirConta(mudar status para true)(abrir cc 150 reais - abrir cp 50 reais)
         fecharConta(mudar status para false)
         depositar(status tem que ser true)
         sacar(nao pode sacar mais do que tem na conta e status true tbm)
         pagarMensalidade(Cc paga 12 por tranferencia e cp 20 reais)
           
*/




    public $numConta;
    private $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "Conta criada <br>";
    }

    /* Metodos */

    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        echo "Conta aberta com sucesso! Seja bem vindo! <br>";

        if ($t == 'cc') {
            $this->setSaldo(50);
            return;
        }
        if ($t == 'cp') {
            $this->setSaldo(150);
            return;
        }
        echo "Tipo de conta não encotrada <br>";
    }

    public function fecharConta()
    {
        $this->setStatus(false);
        echo "Sua conta foi fechada com sucesso <br>";
    }

    public function depositar($valor)
    {
        if (($this->getStatus()) && ($valor >= 0)) {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "Depositado {$valor} com sucesso! <br>";
            return;
        }
        echo "Não foi possivel fazer o deposito. Verifique o saldo e o valor deve ser positivo <br>";
    }

    public function sacar($valor)
    {
        if ($this->getStatus()) {
            if ($this->getSaldo() > $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "Sacado {$valor} com sucesso! <br>";
                $this->pagarMensalidade();
                return;
            }
        }
        echo "Não foi possivel fazer o saque. Verifique o saldo e o valor deve ser positivo <br>";
    }

    public function pagarMensalidade()
    {
        if ($this->getTipo() == 'cc') {
            $this->getSaldo() - 12;
            echo "Por sua conta ser {$this->getTipo()}, foi descontado 12 reias do seu saldo <br>";
            return;
        }
        if ($this->getTipo() == 'cp') {
            $this->getSaldo() - 20;
            echo "Por sua conta ser {$this->getTipo()}, foi descontado 20 reias do seu saldo <br>";
            return;
        }
    }


    /* getters ands setters */

    public function getNumConta()
    {
        return $this->tipo;
    }

    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setDono($dono)
    {
        $this->dono = $dono;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}
