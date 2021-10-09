<?php

require_once '../../models/client.php';
require_once '../../dao/client-dao.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$client = new Client($email, $password, $name);
$clientDao = new ClientDao();

if ($clientDao->get($client) == null) {
  $clientDao->create($client);

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
      <title>Criando conta...</title>
    </head>
    <body>
      <h1>Ops...</h1>
      <p>Já existe uma conta com o e-mail informado.</p>
      <p>
        Você pode
        <a href="../../views/client/login.php">Fazer login</a>
        , se você for o proprietário da conta, ou
        <a href="../../">Tentar novamente</a>
        com um e-mail e/ou nome de usuário diferente.
      </p>
    </body>
    </html>
  ';
}