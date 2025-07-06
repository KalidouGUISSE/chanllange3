<?php 
namespace App\entity;
use App\config\core\AbstractEntity;

class Personne extends AbstractEntity{
    private int $id;
    private string $nom;
    private Type $type;
    private array $arrayCommande = [];

    public function __construtor($id,$nom,$type){
        $this->id = $id;
        $this->nom = $nom;
        $this->type = $type;
        $this->arrayCommande = [];
    }

    public function getId(): int{
        return $this->id;
    }

    public function setId(int $id):void{
        $this->id = $id;
    }

    public function getNom(): int{
        return $this->id;
    }

    public function setNom(int $id):void{
        $this->id = $id;
    }

    public function getType(): int{
        return $this->type;
    }

    public function setType(int $id):void{
        $this->type = $type;
    }







    public static function toObject($array):static {
        return new Personne(
            $array['id'],
            $array['nom'],
            $array['type'],
            $array['arrayCommande']->toObject()
        );
    }

    public function toArray():array{
        return [
            'id' => $this->id,
            'nom' => $this->date,
            'type' => $this->montant,
            'arrayCommande' => $this->arrayCommande->toArray()
        ];
    }
}