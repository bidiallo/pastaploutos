<?php
require_once('controleur_idees.php');

class ModIdees extends ModuleGenerique{
	function __construct(){
		parent::__construct();

		$action = isset($_GET['action']) ? $_GET['action'] : "default";

		$this->controleur = new ControleurIdees();

		switch ($action) {
			case 'consulter_idee':
				$this->controleur->consulter_idee();
				break;
				
			case 'liste_idee':
				$this->controleur->liste_idee();
				break;

			default:
				$this->controleur->liste_idee();
				break;
		}



	}


}