<?php

//require_once('modele_accueil.php');
require_once('vue_cover.php');
//require_once('include/modele_generique.php');
require_once('include/controleur_generique.php');


class ControleurCover extends ControleurGenerique {

	function __construct(){
		$this->vue = new VueCover;
		//$this->model= new ModeleAccueil;
	}


	function affiche() {
		$this -> vue -> affiche();
	}

}

?>