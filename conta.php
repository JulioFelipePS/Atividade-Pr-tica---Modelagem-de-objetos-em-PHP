<?php

class conta{
    public $Nconta;
    public $nome;
    public $saldo;

    public function __construct($Nconta,$nome,$saldo=0)
    {
        $this->Nconta = $Nconta;
        $this->nome = $nome;
        $this->saldo = $saldo;      
    }

    public function AlterarNome($novoNome){
        echo("<br>Seu nome é: ".$this->nome);
        $this->nome = $novoNome;
        echo("  Seu novo nome é ".$this->nome);
    }

    public function deposito($valor){
        $this->saldo +=$valor;
        echo("<br>Você depositou".$valor."Seu novo saldo é:".$this->saldo);
    }

    public function saque($valor){
        if($valor>$this->saldo){
            echo("<br> valor insuficiente");
        }else{
            $this->saldo-=$valor;
            echo("<br>Você sacou".$valor."Seu novo saldo é:".$this->saldo);
        }

    }
}