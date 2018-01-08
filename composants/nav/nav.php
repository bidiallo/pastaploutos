<?php

require_once('composants/nav/nav_vue.php');
require_once('composants/nav/nav_controleur.php');
require_once('composants/nav/nav_modele.php');


class Nav extends ComposantGenerique {

	public function __construct() {
		$this->controleur= new NavControleur();
		$this->controleur->affiche();
	}
}

?>