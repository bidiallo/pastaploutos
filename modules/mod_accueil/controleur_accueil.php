<?php
require_once('vue_accueil.php');
require_once('include/controleur_generique.php');


class ControleurAccueil extends ControleurGenerique {

	function __construct(){
		$this->vue = new VueAccueil;
	}


	function afficheAccueil() {
		$this -> vue -> afficheAccueil();
	}

}

?>