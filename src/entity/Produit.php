<?php 
namespace App\entity;
use App\config\core\AbstractEntity;

class Produit extends AbstractEntity{
    private int $id;
    private string $libelle;
    private int $prix;
    private float $qteStock;

    private array $arrayCommande = [];

    public function __constructor($id,$libelle,$prix,$qteStock){
        $this->id = $id;
        $this->libelle = $libelle;
        $this->prix = $prix;
        $this->qteStock = $qteStock;
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of qteStock
     */ 
    public function getQteStock()
    {
        return $this->qteStock;
    }

    /**
     * Set the value of qteStock
     *
     * @return  self
     */ 
    public function setQteStock($qteStock)
    {
        $this->qteStock = $qteStock;

        return $this;
    }







    public static function toObject($array):static {
        return new Client(
            $array['id'],
            $array['libelle'],
            $array['prix'],
            $array['qteStock']
        );
    }

    public function toArray():array{
        return [
            'id' => $this->id,
            'libelle' => $this->libelle,
            'prix' => $this->prix,
            'qteStock' => $this->qteStock
        ];
    }

}