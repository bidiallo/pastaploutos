<?php
require_once('controleur_accueil.php');

class ModAccueil extends ModuleGenerique {

	function __construct() {
		$this->controleur = new ControleurAccueil();
		$this->controleur->afficheAccueil();
	}
}
?>