<?php

require_once('modules/mod_connexion/controleur_connexion.php');
//require_once('moules/mod_connexion/modele_connexion_exception.php');


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
				# code...
				break;
		}
	}



}

?>