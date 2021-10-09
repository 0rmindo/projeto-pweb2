<?php
require_once '../../models/client.php';
require_once '../../dao/client-dao.php';

session_start();
?>

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
    <a href="../../">Sair</a>
  </p>
  
  <h1>
    Olá,
    
    <?php
      $email = $_SESSION['userEmail'];
      $client = new Client($email);
      $clientDao = new ClientDao();

      $clientName = $clientDao->get($client)[0]['name'];
      echo $clientName.'!';
    ?>
  </h1>
</body>
</html>