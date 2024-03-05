<?php

class contador {
    public $contador;

    public function zerar(){
       $this->contador = 0;
    }

    public function incrementar(){
        $this->contador+=1;
    }

    public function valorContador(){
        return $this->contador;
    }



}



