<?php
require_once('controleur_recette.php');

class ModRecette extends ModuleGenerique{
	function __construct(){
		parent::__construct();

		$action = isset($_GET['action']) ? $_GET['action'] : "default";

		$this->controleur = new ControleurRecette();

		switch ($action) {
			case '':
				# code...
				break;
			
			default:
				# code...
				break;
		}



	}


}