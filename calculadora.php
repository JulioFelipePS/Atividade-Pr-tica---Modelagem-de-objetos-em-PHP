<?php

class calculadora{
    public $historico;


    public function soma($a,$b){
        $r = $a+$b;
        echo("<br> o resultado é $r");
       $this->historico .= " | $a + $b = $r | ";
       return $r;
    }

    public function sub($a,$b){
        $r = $a-$b;
        echo("<br> o resultado é $r");
       $this->historico .= " | $a - $b = $r | ";
       return $r;
    }

    public function div($a,$b){
        $r = $a/$b;
        echo("<br> o resultado é $r");
       $this->historico .= " | $a / $b = $r | ";
       return $r;
    }

    public function mult($a,$b){
        $r = $a*$b;
        echo("<br> o resultado é $r");
       $this->historico .= " | $a * $b = $r | ";
       return $r;
    }

    public function Mostrar(){
        echo("<hr>".$this->historico."<hr>");
    }

}