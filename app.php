<?php
require_once __DIR__ . "/vendor/autoload.php";
// require_once "src/service/CommandeService.php";
//   require_once "src/view/CommandeView.php";
use App\service\CommandeService;
use App\view\CommandeView;



class App{
    private CommandeService $commandeService;
      private CommandeView $commandeView;

    public function __construct(){
        $this->commandeView = new CommandeView();
            $this->commandeService = new CommandeService();
    }
    
    public function main(){
        while (true) {
            echo '
                1 => Eregistrer Client
            ';
            $x = readline('');
            
            switch ($x) {
                case '1':
                    $commande = $this->commandeView->saisie();
                    $date = $commande->getDate();
                    $this->commandeService->enregistrerCommande($date);
                    echo "nice";
                    break;
                case '2':
                    break;
                case '3':
                    break;
                default:
                    # code...
                    return;
                    break;
            }
        }
    }
}

$app = new App();
$app->main();