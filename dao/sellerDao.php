<?php

require_once '../models/seller.php';
require_once '../models/connection.php';

class SellerDao {
  public function create(Seller $seller) {
    $sql = 'INSERT INTO sellers (name, email, password) VALUES (?, ?, ?)';

    $statement = Connection::getConnection()->prepare($sql);
    
    $statement->bindValue(1, $seller->getName());
    $statement->bindValue(2, $seller->getEmail());
    $statement->bindValue(3, $seller->getPassword());
    $statement->execute();
  }

  public function get(Seller $seller) {
    $sql = 'SELECT * FROM sellers WHERE email = ?';

    $statement = Connection::getConnection()->prepare($sql);

    $statement->bindValue(1, $seller->getEmail());
    $statement->execute();

    if ($statement->rowCount() > 0) {
      return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    return null;
  }
}