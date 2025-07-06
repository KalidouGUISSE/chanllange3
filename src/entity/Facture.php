<?php 
namespace App\entity;
use App\config\core\AbstractEntity;

class Facture extends AbstractEntity{
    private int $id;
    private string $date;
    private int $montant;
    private Statut $statut;
    private int $montantReste;

    private Commande $commande;
    private array $paiement = [];

    public function __construct(int $id, string $date, int $montant, int $montantReste) {
        $this->id = $id;
        $this->date = $date;
        $this->montant = $montant;
        $this->statut = "";
        $this->montantReste = $montantReste;
        $this->commande = null;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getDate(): string {
        return $this->date;
    }

    public function getMontant(): int {
        return $this->montant;
    }

    public function getStatut(): Statut {
        return $this->statut;
    }

    public function getMontantReste(): int {
        return $this->montantReste;
    }

    public function getpaiement(): array {
        return $this->paiement;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setDate(string $date): void {
        $this->date = $date;
    }

    public function setMontant(int $montant): void {
        $this->montant = $montant;
    }

    public function setStatut(Statut $statut): void {
        $this->statut = $statut;
    }

    public function setMontantReste(int $montantReste): void {
        $this->montantReste = $montantReste;
    }

    public function addPaiement(Paiement $paiement): void {
        $this->paiement[] = $paiement;
    }


    public static function toObject($array):static {
        return new Facture(
            $array['id'],
            $array['date'],
            $array['montant'],
            $array['statut'],
            $array['montantReste']
        );
    }

    public function toArray():array{
        return [
            'id' => $this->id,
            'date' => $this->date,
            'montant' => $this->vendeur,
            'statut' => $this->client,
            'montantReste' => $this->produitCommande
        ];
    }


}
