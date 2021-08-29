<?php

class User {
  private $name;
  private $email;
  private $password;
  
  public function __construct($password = null, $email, $name = null) {
    $this->name = $name;
    $this->setEmail($email);
    $this->password = $password;
  }

  public function getName() {
    return $this->name;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
  }

  public function getPassword() {
    return $this->password;
  }
}