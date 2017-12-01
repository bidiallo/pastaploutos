<?php

require_once('include/controleur_generique.php');
require_once('include/module_generique.php');
//require_once('modules/mod_connexion/modele_connexion_exception.php');
require_once('controleur_connexion.php');


class ModConnexion extends ModuleGenerique {

	function __construct() {

		$action = isset($_GET['action']) ? $_GET['action'] : "default";

		if(isset($_POST['pseudo'])){
			$pseudo = $_POST['pseudo'];
		}
		if(isset($_POST['motdepasse'])){
			$mdp = $_POST['motdepasse'];
		}

		parent::__construct();
		
		$this -> controleur = new ControleurConnexion;

		switch ($action) {
			case 'form_connexion':
				$id_session = $this->controleur->get_model()->modele_authentification($pseudo, $mdp);
				if($id_session != NULL)
					echo "CONNECTEE MON GAAAAAAA ton id : $id_session\n";
				else
					echo "Combinaison incorrecte.\n";
				break;
			
			default:
				$this->controleur->form_connexion();
				break;
		}
	}


}

?>