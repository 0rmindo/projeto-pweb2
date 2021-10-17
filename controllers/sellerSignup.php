<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=utf-8");

require_once '../models/seller.php';
require_once '../dao/sellerDao.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$seller = new Seller($email, $password, $name);
$sellerDao = new SellerDao();

if ($sellerDao->get($seller) == null) {
  $sellerDao->create($seller);

  echo json_encode(array(
    'success' => true,
    'user' => array(
      'name' => $name,
      'email' => $email,
    )
  ));
} else {
  echo json_encode(array('success' => false));
}