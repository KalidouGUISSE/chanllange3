<?php 
namespace App\entity;
class Client extends Personne {
    private string $telephone;

    private function __construct(int $id,string $nom,string $prenom,string $telephone) {
        parent::__construct($id, $nom, $prenom,Type::CLIENT);
        $this->telephone = $telephone;
    }
    
    /**   
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of arrayCommande
     */ 
    public function getArrayCommande()
    {
        return $this->arrayCommande;
    }

    /**
     * Set the value of arrayCommande
     *
     * @return  self
     */ 
    public function addCommande($commande)
    {
        $this->arrayCommande[] = $commande;

        return $this;
    }

    public static function toObject($array):static {
        parent::toObject();
        return new Client(
            $array['id'],
            $array['nom'],
            $array['prenom'],
            $array['telephone']
        );
    }

    public function toArray(): array {
        $parentArray = parent::toArray();
        $parentArray['telephone'] = $this->telephone;
        return $parentArray;
    }

}