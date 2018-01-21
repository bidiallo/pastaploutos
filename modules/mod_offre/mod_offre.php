<?php
require_once('include/controleur_generique.php');
require_once('include/module_generique.php');
require_once('controleur_offre.php');

class ModOffre extends ModuleGenerique {

	function __construct() {

		$action = isset($_GET['action']) ? $_GET['action'] : "default";		

		parent::__construct();
		
		$this -> controleur = new ControleurOffre();

		switch ($action) {
			case 'consulter_offre':
				$this->controleur->consulter_offre();
				break;

			case 'liste_offre' :
				$this->controleur->liste_offre();
				break;
			case 'ajouter_offre':
				$this->controleur->ajouter_offre();
				break;
			case 'supprimer_offre':
				$this->controleur->supprimer_offre();
				break;

			default:
				$this->controleur->liste_offre();
				break;
		}
	}
}

?>