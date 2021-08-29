<?php
require_once '../models/seller.php';
require_once '../dao/sellerDao.php';

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
    <a href="../">Sair</a>
  </p>
  
  <h1>
    Olá,
    
    <?php
      $email = $_SESSION['userEmail'];
      $seller = new Seller($email);
      $sellerDao = new SellerDao();

      $sellerName = $sellerDao->get($seller)[0]['name'];
      echo $sellerName.'!';
    ?>
  </h1>
</body>
</html>