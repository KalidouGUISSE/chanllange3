<?php
namespace Core;
class Router{
    public static function resolve(array $routes) {
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    //   var_dump($url);die;
        if (isset($routes[$url])) {
            $controllerName = $routes[$url]['controller'];
            $actionName = $routes[$url]['action'];
    
            $controller = new $controllerName();
            $controller->$actionName();
        } else {
            $erreurController = new ErrorController();
            $erreurController->page404();  
        }
    }
}