<?php

require_once('controleur_accueil.php');
//require_once('modele_accueil_exception.php');


class ModAccueil extends ModuleGenerique {

	function __construct() {
		$this->controleur = new ControleurAccueil();
		$this->controleur->afficheAccueil();
	}
}
?>