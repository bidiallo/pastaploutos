<?php

require_once('modules/mod_profil/controleur_profil.php');
require_once('modele_profil_exception.php');


class ModProfil extends ModuleGenerique {

	function __construct(){

		$action = isset($_GET['action']) ? $_GET['action'] : "default";

		$this->controleur = new Controleurprofil();


		switch ($action) {
			case 'profil':
				$this->controleur->consulter_profil();
				break;

			case 'suppr_profil':
				$this->controleur->supprimer_profil();
				break;

			case 'form_modif_mdp':
				$this->controleur->form_modif_mdp();
				break;

			case 'modif_mdp':
				$this->controleur->modif_mdp();
				break;
				
			default:
				$this->controleur->consulter_profil();
				break;
		}
	}
}


?>