<?php
    echo "Ola Mundo, meu primeiro programa!";
    
    $nome = "Alan Tomaz";
    $idadeDoUser = 22;
    $salario = 1000;

    echo $nome;
    echo "<br>";
    echo $idadeDoUser;
    echo "<br>";
    echo number_format($salario, 2, ".");
    // echo $salario;

    // echo gettype($salario);

    echo "variaveis pré definidas!";
    $vars_pre = get_defined_vars();
    print_r($vars_pre);

    $var = array(1,2,3,4);

    // for ($i=0; $i < ; $i++) { 
    //     # code...
    // }

    
?>