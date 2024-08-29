<?php

    $vetorNumeros = array(0, 0, 0, 0);    

    $aux = 0;

    $flag = false;

    echo "informe 4 números:";
    for ($i=0; $i < 4; $i++) { 
        echo "\n";
        echo ($i+1). 'º: ';
        $vetorNumeros[$i] = readline();
        
        if ($i == 2) {
            $aux = $vetorNumeros[$i] * $vetorNumeros[$i];
            if ($aux >= 1000) {
                $flag = true;
                echo "\n";
                echo 'o '.($i+1). 'º foi ';
                echo "$vetorNumeros[$i] e seu quadrado é $aux";
                $i = 4;
            }
        }
    }
    
    if (!$flag) {
        for ($i=0; $i < 4; $i++) { 
            $aux = $vetorNumeros[$i] * $vetorNumeros[$i];
            echo "\n";
            echo 'o '.($i+1). 'º foi ';
            echo "$vetorNumeros[$i] e seu quadrado é $aux";
        }
    }
    echo "\n";
    

?>