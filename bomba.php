<?php


class bomba{
    public $tipo;
    public $valor;
    public $litros;

    public function __construct($tipo,$valor,$litros)
    {
        $this->tipo=$tipo;
        $this ->valor=$valor;
        $this->litros=$litros;
    }

    public function abastecerPorValor($v){
        $qtd = $v/$this->valor;
        if ($qtd>$this->litros) {
            echo("<br> quantidade insuficiente na bomba");
        } else {
            $this->litros -=round($qtd,2);
            echo("<br> sucesso, bomba agora pussui $this->litros litros");
        }
        
    }

    public function abastecerPorLitro($l){
        $qtd = $l;
        if ($qtd>$this->litros) {
            echo("<br> quantidade insuficiente na bomba");
        } else {
            $this->litros -=round($qtd,2);
            echo("<br> sucesso, bomba agora pussui $this->litros litros");
        }
        
    }

    public function alterarValor($novoValor){
        $this->valor = $novoValor;
        echo("<br> preço/litro: R$ $this->valor");
    }

    public function alterarCombustivel($novoTipo){
        $this->tipo = $novoTipo;
        echo("<br> combustivel:  $this->tipo");
    }

    public function alterarQuantidadeCombustivel($novoQtd){
        $this->litros = $novoQtd;
        echo("<br>  qtd combustivel: R$ $this->litros L");
    }
}