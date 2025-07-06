<?php
namespace Core;
// namespace App\controller;

class ErrorController{
    public function page404(){
        require_once __DIR__ . '/../../templaye/controller/page404.html.php';
    }
}