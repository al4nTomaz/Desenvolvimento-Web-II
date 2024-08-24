<?php 

    echo "informe o códido: ";
    $C = readline();

    echo "informe o número de horas trabalhadas: ";
    $N = readline();

    if ($N < 50) {
        $salario = $N * 10.0;
    } else {
        $salario = 50 * 10.0;
    }

    $E = 0;
    if ($N >= 50) {
        $E = ($N - 50) * 20.0;
    }

    echo "CÓDIGO:   $C    |   SALÁRIO BASE:     $salario    |   EXCEDENCIA:     $E      |   SALÁRIO TOTAL:      ".$salario+$E."\n";
    
?>