<?php
require 'Banco.php';
require 'Cliente.php';

$banco = new Banco();
$conexao = $banco->getConexao();

$cliente = new Cliente($conexao);

$cliente->setId($_GET['id']);
$stmt = $cliente->consultar();
$clienteSelecionado = $stmt->fetch(PDO::FETCH_ASSOC);
?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="position-relative">
    <div class="position-absolute top-50 start-1000 d-flex align-items-center justify-content-center">
        <div class="bg-primary-subtle  ">
            <form method="POST" action="atualizaCliente.php">
                <input type="hidden" name="id" value="<?php echo $clienteSelecionado['id']; ?>">
                Nome: <input type="text" name="nome" value="<?php echo $clienteSelecionado['nome']; ?>">
                Telefone: <input type="text" name="telefone" value="<?php echo $clienteSelecionado['telefone']; ?>">
                Email: <input type="email" name="email" value="<?php echo $clienteSelecionado['email']; ?>">
                CPF: <input type="text" name="cpf" value="<?php echo $clienteSelecionado['cpf']; ?>">
                <input type="submit" value="Atualizar"></input>
            </form>
            <a href="listarCliente.php">VOLTAR</a>
        </div>
    </div>
</div>