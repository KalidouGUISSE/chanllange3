<?php
namespace App\repository;

use PDO;
use PDOException;
class Database {
    private static ?PDO $pdo = null;

    public static function getConnection(): PDO {
        if (self::$pdo === null) {
            $host = 'localhost';
            $dbname = 'gestion_commercial';
            $username = 'demon';
            $password = 'demon123';

            try {
                self::$pdo = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erreur de connexion : " . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}