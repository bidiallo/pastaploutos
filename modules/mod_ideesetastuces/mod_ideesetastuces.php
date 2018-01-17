<?php

require_once('include/controleur_generique.php');
require_once('include/module_generique.php');
//require_once('modules/mod_connexion/modele_ideesetastuces_exception.php');
require_once('controleur_ideesetastuces.php');


class ModIdeesetastuces extends ModuleGenerique {

	function __construct() {

		$action = isset($_GET['action']) ? $_GET['action'] : "default";		

		parent::__construct();
		
		$this -> controleur = new ControleurIdeesetastuces();

		switch ($action) {
			case '':
				$this->controleur->();
				break;

			case '' :
				$this->controleur->();
				break;

			default:
				$this->controleur->();
				break;
		}
	}
}

?>