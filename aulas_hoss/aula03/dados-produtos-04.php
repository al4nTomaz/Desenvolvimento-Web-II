<?php

session_start();

// Verificar se existe um array de entradas na sessão
if (!isset($_SESSION['nomeProdutos'])) {
    // Se não existir, redireciona
	$home = "http://localhost/produtos-04.php";
	header('Location: '.$home);

}

$nomeSite = "Meu primeiro Site";


    //$_SESSION['nomeProdutos'] = array("Arroz", "Macarrao", "Carne", "Leite");



?>