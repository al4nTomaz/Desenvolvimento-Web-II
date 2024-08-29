<?php

echo "Ola mundo! Meu primeiro site em PHP";
echo "<br>";
echo "Eh simples, eu sei, mas e o primeiro e eh melhor que nada!";

$nome = "Diego Hoss";
$idadeDoUsuario = 36;
$salario = 1.000;

echo $nome;
echo "<br>";
echo $idadeDoUsuario;
echo "<br>";
echo gettype($salario);

// english notation without thousands separator
echo $english_format_number = number_format($salario, 3, '.', '');

echo "variaveis pre definidas";
echo "<br>";

$vars_pre = get_defined_vars();
print_r($vars_pre);


?>
