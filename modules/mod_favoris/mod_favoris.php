<?php
require_once('controleur_favoris.php');

class ModFavoris extends ModuleGenerique{
	function __construct(){
		parent::__construct();

		$action = isset($_GET['action']) ? $_GET['action'] : "default";

		$this->controleur = new ControleurFavoris();

		switch ($action) {
				
			case 'liste_favoris':
				$this->controleur->liste_favoris();
				break;

			case 'supprimer_offre':
				$this->controleur->supprimer_offre();
				break;

			default:
				$this->controleur->liste_favoris();
				break;
		}



	}


}