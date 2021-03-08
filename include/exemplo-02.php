<?php
    require "inc/exemplo-01.php";
    //Require - Ele obriga o arquivo a existir e que esteja funcionando corretamente
    //Include - Tenta funcionar mesmo que o arquivo não exista - Tem mais recursos

    $resultado = somar(10, 25);

    echo $resultado;
?>