<?php

require_once '../models/client.php';
require_once '../models/connection.php';

class ClientDao {
  public function create(Client $client) {
    $sql = 'INSERT INTO clients (name, email, password) VALUES (?, ?, ?)';

    $statement = Connection::getConnection()->prepare($sql);
    
    $statement->bindValue(1, $client->getName());
    $statement->bindValue(2, $client->getEmail());
    $statement->bindValue(3, $client->getPassword());
    $statement->execute();
  }

  public function get(Client $client) {
    $sql = 'SELECT * FROM clients WHERE email = ?';

    $statement = Connection::getConnection()->prepare($sql);

    $statement->bindValue(1, $client->getEmail());
    $statement->execute();

    if ($statement->rowCount() > 0) {
      return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    return null;
  }
}