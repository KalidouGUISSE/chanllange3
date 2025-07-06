<?php 
// page de connection
namespace App\controller;
use Core\AbstracteContoller;
use Core\ValidatorStatic;
use App\service\SecurityService;


class SecuritieController extends AbstracteContoller {
    private SecurityService $securityService;

    public function __construct(){
        $this->securityService = new SecurityService();
        parent::__construct();
        $this->layout = '/../../templaye/layoute/security.layoute.php';

    }

    public function connection(){
        $this->renderhtml('controller/pageConnection.html.php');
        // require_once __DIR__ . '/../../templaye/controller/pageConnection.html.php';
    }

    public function login() {
      
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            
            ValidatorStatic::isEmpty('email', $login);
            ValidatorStatic::isEmpty('password_vide', $password, 'Veuillez saisir le mot de passe');
            ValidatorStatic::isEmail('email', $login, 'Entrez un email valide');
            
            $ok = ValidatorStatic::isValid();
            // var_dump($ok);die;
            // var_dump(ValidatorStatic::getErrors());die;
            if ($ok) {
                
                $success = $this->securityService->seConnecter($login, $password);
                // header('Location: /commande');
                // var_dump($_SESSION);
                // var_dump('tyui');
                if ($success) {
                    header('Location: /commande');
                    exit;
                } else {
                    echo "<p style='color:red;'>Identifiants incorrects</p>";
                }
            }
    
            // Rendre la page même si erreurs
            $this->connection();
        } else {
            $this->connection(); // si appel en GET
        }
    }
    

    public function show(){}

    public function deconnection(){
        header('Location: /');
    }

    public function edit(){}
    public function destroye(){}
    public function store(){}
    public function index(){}
}



