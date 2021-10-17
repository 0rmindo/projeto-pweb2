<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=utf-8");

require_once '../models/client.php';
require_once '../dao/clientDao.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$client = new Client($email, $password, $name);
$clientDao = new ClientDao();

if ($clientDao->get($client) == null) {
  $clientDao->create($client);

  $response = array(
    'success' => true,
    'user' => array(
      'email' => $email,
      'name' => $name,
    ),
  );

  echo json_encode($response);
} else {
  $response = array('success' => false);
  echo json_encode($response);
}