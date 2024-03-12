<!DOCTYPE html>

<head>
    <?php include "dados.php"; ?>
    <title><?php echo $nomeSite; ?></title>
</head>

<body>
    <?php include "dados.php"; ?>
    <?php

    echo "<br> $nomeSite <br>";

    echo "<br> $descricaoSite <br>";


    foreach ($listaCompras as $item) {
        echo "<br> $item <br>";
    }
    ?>

    <img src=<?php echo $imagem; ?> alt="bad luigi">
</body>

</html>