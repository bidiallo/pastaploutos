<?php

require_once('include/controleur_generique.php');
require_once('include/module_generique.php');
//require_once('modules/mod_connexion/modele_connexion_exception.php');
require_once('controleur_connexion.php');


class ModConnexion extends ModuleGenerique {

	function __construct() {

		$action = isset($_GET['action']) ? $_GET['action'] : "default";

		parent::__construct();
		
		$this -> controleur = new ControleurConnexion;

		switch ($action) {
			case 'form_connexion':
				$this->controleur->form_connexion();
				break;
			
			default:
				$this->controleur->form_connexion();
				break;
		}
	}



}

?>