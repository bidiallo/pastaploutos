<?php

require_once('modules/mod_gestionUser/controleur_profil.php');
require_once('modele_profil_exception.php');


class ModProfil extends ModuleGenerique {

	function __construct(){

		$action = isset($_GET['action']) ? $_GET['action'] : "default";

		$this->controleur = new ControleurGestionUser();


		switch ($action) {
			case 'profil':
				$this->controleur->consulterProfil();
				break;

			case 'suppr_profil':
				$this->controleur->supprimer_profil();
				break;

			case 'modif_profil':
				$this->controleur->modif_profil();
				break;
				
			default:
				$this->controleur->list_profil();
				break;
		}
	}
}


?>