<?php
    $nome = "Athos";

    function teste(){
        global $nome;
        echo $nome;
    }

    function teste2(){
        $nome = "Julio";
        echo "<br/>";
        echo $nome." - 
        agora no teste 2";
    }

    teste();
    teste2();
?>