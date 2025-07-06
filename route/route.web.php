<?php
require_once __DIR__ . '/../vendor/autoload.php'; 

use App\controller\CommandeController;
use App\controller\ProduitController;
use App\controller\ErrorController;
use App\controller\SecuritieController;


$routes = [
    '/' => ['controller' => SecuritieController::class, 'action' => 'connection'],
    '/key_login' => ['controller' => SecuritieController::class, 'action' => 'login'],
    '/deconnection' => ['controller' => SecuritieController::class, 'action' => 'deconnection'],
    '/commande' => ['controller' => CommandeController::class, 'action' => 'show'],
    // '/produit' => ['controller' => ProduitController::class, 'action' => 'getProduit'],
    '/produit' => ['controller' => ProduitController::class, 'action' => 'show'],

];
