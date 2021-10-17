<?php

class Connection {
  private static $instance;

  public static function getConnection() {
    if (!isset(self::$instance)) {
      $databaseConfig = 'mysql:host=remotemysql.com;dbname=eEM6T9NDjS;charset=utf8';
      self::$instance = new \PDO($databaseConfig, 'eEM6T9NDjS', 'CaADAEGH4H');
      // Estas informações são delicadas. Por favor, não utilize-as indevidamente :)
    }
    
    return self::$instance;
  }
}