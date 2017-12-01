<?php

require_once('modele_accueil.php');
require_once('vue_accueil.php');
require_once('include/modele_generique.php');
require_once('include/controleur_generique.php');


class ControleurAccueil extends ControleurGenerique {

	function __construct(){
		parent::__construct;
		$this->vue = new VueAccueil;
		$this->model= new ModeleAccueil;
	}


	function afficheAccueil() {
		$this -> vue -> afficheAccueil();
	}

}

?>