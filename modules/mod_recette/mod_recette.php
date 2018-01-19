<?php
require_once('controleur_recette.php');

class ModRecette extends ModuleGenerique{
	function __construct(){
		parent::__construct();

		$action = isset($_GET['action']) ? $_GET['action'] : "default";

		$this->controleur = new ControleurRecette();

		switch ($action) {
			case 'consulter_recette':
				$this->controleur->consulter_recette();
				break;
				
			case 'liste_recette':
				$this->controleur->liste_recette();
				break;

			case 'favoris_recette':
				$this->controleur->favoris_recette();
				break;

			default:
				$this->controleur->liste_recette();
				break;
		}



	}


}