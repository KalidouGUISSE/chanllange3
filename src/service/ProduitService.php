<?php
namespace App\service;
use App\repository\ProduitRepository;

// require_once "repository/CategorieRepository.php";
class ProduitService{
    // Dependance
    private ProduitRepository $produitRepository;

    function __construct(){
        $this->produitRepository = new ProduitRepository();
    }

    public function getProduit():array{
        return $this->produitRepository->selectAll();
    }

    // public function creerProduit(string $libelle){
    //     $this->produitRepository->creerCategorie($libelle);
    // }
}