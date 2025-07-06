<?php 
// require_once "src/repository/CommandeRepository.php";
namespace App\service;
use App\repository\CommandeRepository;
use Core\Session;
class CommandeService{

    private CommandeRepository $cammandeRepository;

    public function __construct(){
        $this->cammandeRepository = new CommandeRepository();
    }

    public function enregistrerCommande(string $date):void{
        $this->cammandeRepository->enregistrerCommande($date);
    }

    public function listerCommande(){
        $session = Session::getInstance();
        $filtre = $session->get('user_connecte')[0]['type'];
        // var_dump($session->get('user_connecte'));
        // var_dump($_SESSION);
        // var_dump($filtre);
        // var_dump($id);

        // die;
        if ($filtre === 'client') {
            $id = $session->get('user_connecte')[0]['id'];
            return $this->cammandeRepository->selectById($id);
        }
        return $this->cammandeRepository->selectAll();
    }

}


