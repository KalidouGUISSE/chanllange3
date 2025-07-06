<?php
namespace App\repository;
require_once "Database.php";

use PDO;
use PDOException;

class ProduitRepository{
    private PDO $pdo;

    public function __construct(){
        $this->pdo = Database::getConnection();
    }

    public function selectAll():array{
      $sql  = "SELECT libelle, prix, qte_stock FROM produit ";
      return $this->pdo->query($sql)->fetchAll();
    }

}