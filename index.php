<?php

    require('contador.php');
    require('bola.php');
    require('conta.php');
    require('calculadora.php');
    require('bomba.php');
    require('./carro.php');
    // $cont = new contador();

    // $cont-> incrementar();
    // $cont-> incrementar();
    // $cont-> incrementar();
    // $cont-> incrementar();
    // $cont-> incrementar();
    // echo($cont->valorContador());
    // $cont-> zerar();
    // echo("<br>");
    // echo($cont->valorContador());
    

    // $novBola = new bola("azul",2.3,"vidro");
    // var_dump($novBola);
    // $novBola->MostraCor();
    // $novBola->trocarCor("verde");
    // $novBola->MostraCor();

    // $cc = new conta("1234","adelio");
    // var_dump($cc);
    // $cc->deposito(700.40);
    // $cc->AlterarNome("ian");
    // $cc->saque(800);
    // var_dump($cc);
    // $cc->saque(700);
    // var_dump($cc);

    // $c = new calculadora();
    // $c->div(9,6);
    // $c->div(14,2);
    // $c->mult(9,6);
    // $c->soma(9,6);
    // $c->soma(90,146);
    // $c->sub(10,5);
    // $c->Mostrar();

    // $b= new bomba("querosese",6.34,9000);
    // var_dump($b);
    // $b->abastecerPorLitro(1053);
    // $b->abastecerPorValor(250);
    // $b->alterarCombustivel("gasolina");
    // $b->alterarValor(5.43);
    // $b->alterarQuantidadeCombustivel(950);
    // var_dump($b);

    $omega = new carro(70,7.5);
    $omega->adicionarGasolina(45);
    var_dump($omega);
    $omega->andar(57);