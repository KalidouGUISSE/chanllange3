<?php
namespace App\repository;

use PDO;
use PDOException;
require_once "Database.php";
class CommandeRepository{
    private PDO $pdo;
    public function __construct(){
        $this->pdo = Database::getConnection();
    }

    public function selectAll():array{
        $sql = "select * from commande c JOIN personnes p on c.personne_id = p.id";
        return $this->pdo->query($sql)->fetchAll();
    }
    public function selectById(int $id){
        $sql = "select * from commande c JOIN personnes p on c.personne_id = p.id where c.personne_id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectBy(string $filtre):array{
        $sql = "SELECT * from commande where type = :filtre ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':filtre',$filtre);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function enregistrerCommande(string $date){
        $sql = "INSERT INTO commande (date) values (:date)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':date', $date);
        $stmt->execute();
    }
}
// public function selectByType(string $type): array {
//     $sql = "select * from commande cJOIN personnes p on c.personne_id = p.idwhere c.personne_id = 1";
//     $stmt = $this->pdo->prepare($sql);
//     $stmt->bindParam(':type', $type);
//     $stmt->execute();
    
//     return $stmt->fetchAll(PDO::FETCH_ASSOC);
// }
