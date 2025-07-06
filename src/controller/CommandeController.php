<?php
namespace App\controller;
use Core\AbstracteContoller;
use App\service\CommandeService;
use Core\Session;
// Session::getInstance();
class CommandeController extends AbstracteContoller{
    private CommandeService $commandeService;

    public function __construct(){
        parent::__construct();
        $this->commandeService = new CommandeService();
    }

    // public function form(){
    //     // require_once __DIR__ . '/../../templaye/controller/form.html.php';
    //     $this->renderhtml('controller/liste.html.php');
    // }

    public function show(){
        $commandes = $this->commandeService->listerCommande();
        // var_dump($commandes['0']['nom']);die;
        //id recuperer
        // $session = Session::getInstance();
        // var_dump($session->get('user_connecte')[0]['id']);
        $this->renderhtml('controller/liste.html.php',[
            'commandes'=>$commandes
        ]);
    }


    // public function lister(){
    //     // require_once __DIR__ . '/../../templaye/controller/liste.html.php';
    //     $this->renderhtml('controller/liste.html.php');
    // }

    public function edit(){}
    public function destroye(){}
    public function store(){}
    public function index(){}
}

















// public function show(){
//     $produit = $this->getProduit();
//     $this->renderhtml('controller/form.html.php', [
//         'produit' => $produit
//     ]);
// }