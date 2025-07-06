<?php
require_once __DIR__ . '/../route/route.web.php';
require_once __DIR__ . '/../vendor/autoload.php'; 
use Core\Session;

use Core\Router;
Session::getInstance();


Router::resolve($routes);






















// function loadController($route) : void {
//     $controllerMapping = [
//         'ajouter_promotion' => ['controller' => 'admin', 'action' => 'ajouterPromotion'],
//         'referentiels' => ['controller' => 'admin', 'action' => 'ajouterReferentiels']
//     ];
    
//     if (!array_key_exists($route, $controllerMapping)) {
//         $route = Keys::ERROR->value;
//     }
    
//     $controllerName = $controllerMapping[$route][Keys::CONTROLLER->value];
//     $actionName = $controllerMapping[$route][Keys::ACTION->value];
    
//     $controllerFile = "../app/controllers/{$controllerName}.controller.php";
    
//     if (file_exists($controllerFile)) {
//         require_once $controllerFile;
//         $controller = "\\App\\Controllers\\{$actionName}";
//         $controller();
//     } else {
//         require_once "../app/controllers/error.controller.php";
//         \App\Controllers\show("Contrôleur non trouvé");
//     }
// }
