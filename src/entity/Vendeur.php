<?php 
namespace App\entity;

class Vendeur extends Personne {
    private string $login;
    private string $password;

    private array $arrayCommande = [];

    public function __construct(int $id, string $nom, string $prenom, string $login, string $password
    ) {
        parent::__construct($id, $nom, $prenom); 
        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
        $this->arrayCommande = [];
    }

    public function getId(): int{
        return $this->id;
    }

    public function setId(int $id):void{
        $this->id = $id;
    }

    public function getLogin(): int{
        return $this->id;
    }

    public function setLogin(int $id):void{
        $this->id = $id;
    }

    public function getPassword(): int{
        return $this->id;
    }

    public function setPassword(int $id):void{
        $this->id = $id;
    }

    public static function toObject($array):static {
        return new Vendeur(
            $array['id'],
            $array['nom'],
            $array['prenom'],
            $array['telephone']
        );
    }

    public function toArray(): array {
        $parentArray = parent::toArray();
        $parentArray['login'] = $this->login;
        $parentArray['password'] = $this->password;
        return $parentArray;
    }
}