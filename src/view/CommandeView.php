<?php 
namespace App\view;
use App\entity\Commande;

class CommandeView {
    // private Commande $commande;

    // public function __construct(){
    //     $this->commande = new Commande;
    // }

    public function saisie():Commande{
        $date = readline ("entrer la date du commande");
        $commande = new Commande();
        $commande->setDate($date);
        return $commande;
    }

    public function nice(){
        echo "bie";
    }
}