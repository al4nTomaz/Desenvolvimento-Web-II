<?php 

    echo "informe a idade: ";
    $idade = readline();

    if ($idade >= 5 && $idade <= 7) {
        $resultado = "Infantil A";
    } else if ($idade >= 8 && $idade <= 11) {
        $resultado = "Infantil B";
    } else if ($idade >= 12 && $idade <= 13) {
        $resultado = "Juvenil A";
    } else if ($idade >= 14 && $idade <= 17) {
        $resultado = "Juvenil B";
    } else if ($idade >= 18){
        $resultado = "Adulto";
    }else {
        $resultado = "idade inválida"; 
    }

    echo $resultado;
   
?>