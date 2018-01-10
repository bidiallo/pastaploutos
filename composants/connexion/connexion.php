<?php

require_once ('composants/connexion/connexion_controleur.php');
require_once ('composants/connexion/connexion_modele.php');
require_once ('composants/connexion/connexion_vue.php');


class Connexion extends ComposantGenerique {

	public function __construct() {
		$this->controleur = new ConnexionControleur();
		$this->controleur->affiche();
	}
}




?>