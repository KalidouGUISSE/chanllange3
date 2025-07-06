<?php
namespace App\service;
use App\repository\PersonneRepository;
use Core\Session;

class SecurityService {

    private PersonneRepository $personneRepository;

    public function __construct(){}

    public function seConnecter(string $login, string $password): bool {
        $personneRepository = new personneRepository();
        $personne = $personneRepository->selectByLoginAndPassword($login,$password);
        
        if ($personne) {
            // session_start();
            // $_SESSION['user_connecte'] = $personne;
            $session = Session::getInstance();
            $session->set('user_connecte',$personne);
            return true;
        }
        return false;
    }
}
