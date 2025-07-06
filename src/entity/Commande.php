<?php
namespace App\entity;
require_once "config/core/AbstractEntity.php";
use Core\AbstractEntity;

class Commande extends AbstractEntity{
    private int $id;
    private string $date;
    private Vendeur $vendeur;
    private Client $client;
    private array $produitCommande;
    
    public function __construct(
        int $id = 0,
        string $date = "",
        ?Vendeur $vendeur = null,
        ?Client $client = null
    ) {
        $this->id = $id;
        $this->date = $date;
        $this->vendeur = $vendeur;
        $this->client = $client;
        $this->produitCommande = [];
    }
    
    public function getId(): int{
        return $this->id;
    }

    public function setId(int $id):void{
        $this->id = $id;
    }

    public function getDate(): int{
        return $this->id;
    }

    public function setDate(int $id):void{
        $this->id = $id;
    }

    /**
     * Get the value of vendeur
     */ 
    public function getVendeur()
    {
        return $this->vendeur;
    }

    /**
     * Set the value of vendeur
     *
     * @return  self
     */ 
    public function setVendeur($vendeur):Vendeur
    {
        $this->vendeur = $vendeur;

        return $this;
    }

    public function getProduitCommande(){
        return $this->produitCommande();
    }

    public function addProduitCommande($produitCommande){
        return $this->produitCommande[] = $produitCommande;
    }


    public static function toObject($array):static {
        return new Commande(
            $array['id'],
            $array['date'],
            $array['vendeur']->toObject(),
            $array['client']->toObject(),
            $array['produitCommande']->toObject()
        );
    }

    public function toArray():array{
        return [
            'id' => $this->id,
            'date' => $this->date,
            'vendeur' => $this->vendeur->toArray(),
            'client' => $this->client->toArray(),
            'produitCommande' => $this->produitCommande->toArray()
        ];
    }
}