<?php
require_once "composants/nav/nav_controleur.php";
require_once "composants/nav/nav_modele.php";
require_once "composants/nav/nav_vue.php";
require_once "include/composant_generique.php";


class Nav extends ComposantGenerique {

	public function __construct() {

		$this->controleur= new NavControleur();
		$this->controleur->affiche();
	}
}

?>