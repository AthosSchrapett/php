<?php
    //Tipos de Dados

    //String
    $nome = "Hcode";
    $site = 'www.hcode.com.br';
    
    //Int
    $ano = 1990;

    //Float
    $salario = 5500.99;

    //Boolean
    $bloqueado = false;

    //Array
    $frutas = array("abacaxi", "laranja", "manga");
    echo $frutas[2];

    //Object
    $nascimento = new DateTime();

    // var_dump($nascimento);

    //Tipos Especiais
    $arquivo = fopen('exemplo-03.php', 'r');

    // var_dump($arquivo);

    $nulo = NULL;
?>