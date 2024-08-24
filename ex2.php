<?php

    $numero;    

    $resultado;

    $flag = false;

    echo "informe 1 números:";
    $numero = readline();

    if ($numero % 2 == 0 || $numero == 0) {
        $resultado = "par";
    } else {
        $resultado = "impar";
    }

    if ($numero == 0) {
        $resultado = $resultado. ' e neutro';
    } else if ($numero > 0) {
        $resultado = $resultado. ' e positivo';
    } else {
        $resultado = $resultado. ' e negativo';
    }

    echo $resultado;
    
    echo "\n";
    

?>