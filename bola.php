<?php

class bola{
    public $cor;
    public $circunferencia;
    public $material;

    public function __construct($cor,$circunferencia,$material)
    {
        $this->cor=$cor;
        $this->circunferencia=$circunferencia;
        $this->material=$material;
    }

    public function trocarCor($novaCor){
        $this -> cor = $novaCor;
    }

    public function MostraCor(){
       echo("<br>".$this->cor."<br>");
    }


}