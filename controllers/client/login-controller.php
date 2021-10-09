<?php

require_once '../../models/client.php';
require_once '../../dao/client-dao.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$client = new Client($email, $password);
$clientDao = new ClientDao();

$clientData = $clientDao->get($client);
$clientIsInDatabase = $clientData != null;
$passwordIsCorrect = $clientData[0]['password'] == $password;

if ($clientIsInDatabase && $passwordIsCorrect) {
  session_start();
  $_SESSION['userEmail'] = $client->getEmail();

  header('Location: ../../views/client/home.php');
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
      <a href="../../views/client/login.php">Tente novamente</a>.
    </body>
    </html>
  ';
}