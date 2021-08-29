<?php

require_once '../models/seller.php';
require_once '../dao/sellerDao.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$seller = new Seller($email, $password);
$sellerDao = new SellerDao();

$sellerData = $sellerDao->get($seller);
$sellerIsInDatabase = $sellerData != null;
$passwordIsCorrect = $sellerData[0]['password'] == $password;

if ($sellerIsInDatabase && $passwordIsCorrect) {
  session_start();
  $_SESSION['userEmail'] = $seller->getEmail();

  header('Location: ../views/homeSeller.php');
} else {
  echo '
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Erro nos dados :(</title>
    </head>
    <body>
      <h1>Ops...</h1>
      <p>Seu e-mail e/ou senha estão incorretos.</p>
      <a href="../views/loginSeller.php">Tente novamente</a>.
    </body>
    </html>
  ';
}