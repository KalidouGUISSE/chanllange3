<?php
namespace App\controller;
use Core\AbstracteContoller;
use App\service\ProduitService;

class ProduitController extends AbstracteContoller{
    private ProduitService $produitService;

    public function __construct(){
        parent::__construct();
        $this->produitService = new ProduitService();
    }

    public function getProduit() {
        $produit = $this->produitService->getProduit();
        return $produit;
    }

    public function show(){
        $produit = $this->getProduit();
        $this->renderhtml('controller/form.html.php', [
            'produit' => $produit
        ]);
    }
    
    public function edit(){}
    public function destroye(){}
    public function store(){}
    public function index(){}
}