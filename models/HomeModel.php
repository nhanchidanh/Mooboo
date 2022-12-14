<?php

namespace app\models;

use app\core\db\Database;

class HomeModel extends Database
{

  public function getAll()
  {
    try {
      $stmt = $this->getConn()->prepare("SELECT * FROM sinhvien");
      $stmt->execute();
      $stmt->setFetchMode(\PDO::FETCH_ASSOC);
      return $stmt->fetchAll();
    } catch (\PDOException $e) {
      echo "Error: " . $e->getMessage();
      exit;
    }
  }

  function total() {
    return 50;
  }
}