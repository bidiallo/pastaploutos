<?php

require_once('controleur_cover.php');


class ModCover extends ModuleGenerique {

	function __construct() {
		$this->controleur = new ControleurCover();
		$this->controleur->affiche();
	}
}
?>