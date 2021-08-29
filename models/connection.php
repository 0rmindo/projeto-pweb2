<?php

class Connection {
  private static $instance;

  public static function getConnection() {
    if (!isset(self::$instance)) {
      $databaseConfig = 'mysql:host=localhost;dbname=lojas_instagram;charset=utf8';
      self::$instance = new \PDO($databaseConfig, 'root', '');
    }
    
    return self::$instance;
  }
}