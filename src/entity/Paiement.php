<?php
use App\config\core\AbstractEntity;

class Paiement extends AbstractEntity{
    private int $id ;
    private string $date;
    private int $montant;

    private Facture $facture;
    private Vendeur $vendeur;

    public function __construct(int $id,string $date,int $montant,Facture $facture,Vendeur $vendeur) {
        $this->id = $id;
        $this->date = $date;
        $this->montant = $montant;
        $this->facture = $facture;
        $this->vendeur = $vendeur;
    }
    
    public function getFacture(){
        return $this->facture;
    }

    public function setVendeur(Vendeur $vendeur){
        $this->vendeur = $vendeur;
    }
    
    public function getVendeur(){
        return $this->vendeur;
    }

    public function setFacture(Facture $facture){
        $this->facture = $facture;
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
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of montant
     */ 
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     *
     * @return  self
     */ 
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }


    public static function toObject($array):static {
        return new Paiement(
            $array['id'],
            $array['date'],
            $array['montant'],
            $array['facture']->toObject(),
            $array['vendeur']->toObject()
        );
    }

    public function toArray():array{
        return [
            'id' => $this->id,
            'date' => $this->date,
            'montant' => $this->montant,
            'facture' => $this->facture->toArray(),
            'vendeur' => $this->vendeur->toArray()
        ];
    }

} 