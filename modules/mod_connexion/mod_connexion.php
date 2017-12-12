<?php

require_once('include/controleur_generique.php');
require_once('include/module_generique.php');
//require_once('modules/mod_connexion/modele_connexion_exception.php');
require_once('controleur_connexion.php');


class ModConnexion extends ModuleGenerique {

	function __construct() {

		$action = isset($_GET['action']) ? $_GET['action'] : "default";		

		parent::__construct();
		
		$this -> controleur = new ControleurConnexion();

		switch ($action) {
			case 'form_connexion':
				$this->controleur->form_connexion();
				break;
			case 'connexion':
				if(isset($_POST['pseudo']) && isset($_POST['mdp'])){
					$pseudo = $_POST['pseudo'];
					$mdp = $_POST['mdp'];
				}
				else{
					$pseudo = NULL;
					$mdp = NULL;
				}

				$id_session = $this->controleur->getModel()->modele_authentification($pseudo, $mdp);
				if($id_session != NULL){
					echo "Connecté !\n";
				}
				else{
					$this->controleur->message_connexion_echoue();
					$this->controleur->form_connexion();
				}
				break;
			default:
				$this->controleur->form_connexion();
				break;
		}
	}
}

?>