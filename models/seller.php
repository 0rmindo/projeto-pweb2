<?php

require_once 'user.php';

class Seller extends User {
  public function __construct($email, $password = null, $name = null) {
    parent::__construct($password, $email, $name);
  }
}