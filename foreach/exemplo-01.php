<?php
    $meses = array(
        "janeiro", "fevereiro", "marco",
        "marco", "abril", "maio", "junho",
        "julho", "agosto", "setembro",
        "outubro", "novembro", "dezembro"
    );

    foreach($meses as $index => $mes){
        echo "Index: ".$index."<br>";
        echo "O mês é: ".$mes."<br><br>";
    }
?>