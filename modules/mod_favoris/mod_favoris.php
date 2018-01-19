<?php
require_once('controleur_offre.php');

class ModFavoris extends ModuleGenerique{
	function __construct(){
		parent::__construct();

		$action = isset($_GET['action']) ? $_GET['action'] : "default";

		$this->controleur = new ControleurOffre();

		switch ($action) {
				
			case 'liste_favoris':
				$this->controleur->liste_favoris();
				break;

			case 'ajouter_offre':
				$this->controleur->ajouter_offre();
				break;

			default:
				$this->controleur->liste_favoris();
				break;
		}



	}


}