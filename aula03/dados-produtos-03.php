<?php

$nomeSite = "Meu primeiro Site";


$nomeProdutos = array("Arroz", "Macarrao", "Carne", "Leite");

array_push($nomeProdutos, $_POST['produto']);

var_dump($nomeProdutos);



//$home = "http://localhost/produtos-03.php";
//header('Location: '.$home);

?>