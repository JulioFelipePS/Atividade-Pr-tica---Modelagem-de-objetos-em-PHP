<?php

class carro{
    public $capacidadeTanque;
    public $consumo;
    public $tanque;

    public function __construct($capacidadeTanque,$consumo)
    {
        $this->capacidadeTanque = $capacidadeTanque;
        $this->consumo = $consumo;
        $this->tanque=0;
    }

    public function andar($x){
        if(($x/$this->consumo)>$this->tanque){
            echo("<br> gasolina insuficiente para andar essa distancia");
        }else{
            $this->tanque -=$x/$this->consumo;
            echo("<br> Andou $x Km e resta $this->tanque L no tanque");
        }
    }

    public function obterGasolina(){
        echo("<br> Você tem $this->tanque litros");
    }

    public function adicionarGasolina($l){
        if($l+$this->tanque>$this->capacidadeTanque){
            echo("<br> Capacidadde do tanque excedida");
        }else{
            $this->tanque+=$l;
        }
    }

}