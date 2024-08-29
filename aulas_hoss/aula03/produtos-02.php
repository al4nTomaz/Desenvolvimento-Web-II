<!DOCTYPE html>
<html lang="pt-br">
    <head>
         <title>Produtos em PHP</title>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>   
    <body>

	<?php $nomeProdutos = array("Arroz", "Carne", "Macarrao", "Leite"); ?>


         <div class="container">
	

              <?php

		

		define("QTD_PRODUTOS", 4, true);
		$titulo = 'produtos';


              

		?>
              <h1>Página de <?php echo $titulo; ?></h1>
              <p>Lista de <?php echo $titulo; ?></p>
              <ul class="list-group">
              <?php
 

                  for($i = 0; $i < QTD_PRODUTOS; $i++)
                  {
                      echo '<li class="list-group-item">Produto '. $i .' - '. $nomeProdutos[$i] .'</li>';
                  }
              ?>
              </ul>
         </div>

	<?php
	if(isset($_POST['submit'])) 
	{ 
		array_push($nomeProdutos, $_POST['produto']);
		
	}
	?>


	 <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <p> Produto: <input type="text" name="produto"/> </p>
            <p> <input type="submit" value="Enviar"/> </p>
        </form>



    </body>
</html>