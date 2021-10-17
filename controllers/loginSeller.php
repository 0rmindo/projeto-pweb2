<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=utf-8");

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
  echo json_encode(array(
    'success' => true,
    'user' => array(
      'id' => $sellerData[0]['id'],
      'email' => $email,
      'name' => $sellerData[0]['name']
    )
  ));
} else {
  echo json_encode(array('success' => false));
}