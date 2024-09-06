<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="position-relative">
        <div class="position-absolute top-50 start-1000 d-flex align-items-center justify-content-center">   
            <div class="bg-primary-subtle  ">
                <h3>Cadastro de Cliente!</h3>
                <form method="POST" action="cadastroCliente.php">
                    <p> Nome: <input type="text" name="nome" required> </p>
                    <p> Telefone: <input type="text" name="telefone" required> </p>
                    <p> Email: <input type="email" name="email" required> </p>
                    <p> CPF: <input type="text" name="cpf" required> </p>
                    <p> <button type="submit">Cadastrar</button>
                </form>
            </div>
            <a href="listarCliente.php">VOLTAR</a>
        </div>
    </div>
</body>

</html>