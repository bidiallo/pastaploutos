<?php
require_once "composants/side_nav/side_nav_controleur.php";
require_once "composants/side_nav/side_nav_modele.php";
require_once "composants/side_nav/side_nav_vue.php";
require_once "include/composant_generique.php";


class SideNav extends ComposantGenerique {

	public function __construct() {

		$this->controleur= new SideNavControleur();
		$this->controleur->affiche();
	}
}

?>