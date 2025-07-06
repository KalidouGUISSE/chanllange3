<?php
namespace App\repository;
require_once "Database.php";
use PDO;
use PDOException;

class PersonneRepository{
    public function __construct(){
        $this->pdo = Database::getConnection();
    }

    // public function selectByLoginAndPassword(string $login, string $password){
    //     // $sql = "SELECT nom FROM personnes WHERE type = 'vendeur'";
    //     $sql = "SELECT * FROM personnes WHERE login = 'vendeur'";

    //     $stmt = $this->pdo->prepare($sql);
    //     // $stmt->bindParam(':login', $login);
    //     // $stmt->bindParam(':password', $password);
    //     $stmt->execute();
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

    public function selectByLoginAndPassword(string $login, string $password){
        $sql = "SELECT * FROM personnes WHERE login = :login AND password = :password";
    
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function selectById(int $id){
        $sql = "SELECT id from personnes where id = :id ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam('id',$id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}



