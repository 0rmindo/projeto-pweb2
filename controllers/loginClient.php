<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=utf-8");

require_once '../models/client.php';
require_once '../dao/clientDao.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$client = new Client($email, $password);
$clientDao = new ClientDao();

$clientData = $clientDao->get($client);
$clientIsInDatabase = $clientData != null;
$passwordIsCorrect = $clientData[0]['password'] == $password;

if ($clientIsInDatabase && $passwordIsCorrect) {
  echo json_encode(array(
    'success' => true,
    'user' => array(
      'id' => $clientData[0]['id'],
      'email' => $email,
      'name' => $clientData[0]['name']
    )
  ));
} else {
  echo json_encode(array('success' => false));
}