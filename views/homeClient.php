<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loja de Roupas</title>
</head>

<body>
  <p>
    <a href="../">Sair</a>
  </p>
  
  <?php

    if (isset($_GET['name'])) {
      echo '<h1>Olá, '.$_GET['name'].'!</h1>';
    } else {
      echo '<h1>Olá, tudo bem?</h1>';
      echo '<p>Para criar uma conta, <a href="../">clique aqui</a>.</p>';
    }

  ?>
</body>
</html>