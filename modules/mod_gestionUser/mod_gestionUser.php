<?php

require_once('modules/mod_gestionUser/controleur_gestionUser.php');
require_once('modele_gestionUser_exception.php');


class ModGestionUser extends ModuleGenerique {

	function __construct(){

		$action = isset($_GET['action']) ? $_GET['action'] : "default";

		$this->controleur = new ControleurGestionUser();


		switch ($action) {
			
			case 'liste_profil':
				$this->controleur->liste_profil();
				break;

			case 'consulter_profil':
				$this->controleur->consulter_profil();
				break;

			case 'modif_droit':
				$this->controleur->modif_droit();
				break;

			case 'form_modif_droit':
				$this->controleur->form_modif_droit();
				break;
				
			case 'suppr_profil':
				$this->controleur->supprimer_profil();
				break;

			default:
				$this->controleur->liste_profil();
				break;
		}
	}
}


?>