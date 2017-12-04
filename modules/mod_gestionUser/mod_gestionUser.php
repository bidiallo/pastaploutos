<?php

require_once('modules/mod_gestionUser/controleur_gestionUser.php');
require_once('modele_gestionUser_exception.php');


class ModGestionUser extends VueGenerique {

	function __construct(){

		$action = isset($_GET['action']) ? $_GET['action'] : "default";

		$this->controleur = new ControleurGestionUser();


		switch ($action) {
			case 'ajout_user':
				$this->controleur->ajout_user();
				break;

			case 'form_ajout_user':
				$this->controleur->form_ajout_user();
				break;
			
			case 'list_profil':
				$this->controleur->list_profil();
				break;

			case 'supprimer_profil':
				$this->controleur->supprimer_profil();
				break;
				
			default:
				$this->controleur->list_profil();
				break;
		}
	}
}


?>