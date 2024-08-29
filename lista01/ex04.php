<?php 

    echo "indice de poluição: ";
    $indice = readline();

    $resultado;
    if ($indice > 0.05 && $indice <= 0.25) {
        $resultado = "aceitável";
    } else if ($indice < 0.3) {
        $resultado = "alerta";
    } else if ($indice >= 0.3 && $indice < 0.4) {
        $resultado = "empresas gurpo 1";
    } else if ($indice >= 0.4 && $indice < 0.5) {
        $resultado = "empresas gurpo 1 e 2";
    }else if ($indice >= 0.5) {
        $resultado = "todas as empresas";
    } else {
        $resultado ="erro, valor inválido";
    }

    echo $resultado;
?>