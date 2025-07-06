<?php
namespace App\entity;
use App\config\core\AbstractEntity;

class ProduitCommande extends AbstractEntity {
    private int $qteCommande;
    private float $motant;
    private array $commande = [];
    private array $produit = [];

    public function __construct($qteCommande,$motant,$commande,$produit){
        $this->qteCommande = $qteCommande;
        $this->motant = $motant;
        $this->commande = $commande;
        $this->produit = $produit;
    }

    public function getCommande():array{
        return $this->commande;
    }

    public function addCommande(Commande $commande){
        $this->commande = $commande;
    }

    public function getProduit():array{
        return $this->produit;
    }
    
    public function addProduit(Produit $produit){
        $this->produit = $produit;
    }

    public static function toObject($array):static {
        return new Client(
            $array['qteCommande'],
            $array['motant'],
            $array['commande']->toObject(),
            $array['qteStock']->toObject()
        );
    }

    public function toArray():array{
        return [
            'qteCommande' => $this->id,
            'motant' => $this->motant,
            'commande' => $this->commande->toArray(),
            'produit' => $this->produit->toArray()
        ];
    }
}