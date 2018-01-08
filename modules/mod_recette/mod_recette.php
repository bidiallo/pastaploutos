<?php
require_once('controleur_recette.php');

class ModRecette extends ModuleGenerique{
	function __construct(){
		parent::__construct();
		$this->controleur = new ControleurRecette();
	}
}