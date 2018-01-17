<?php
require_once('modules/mod_choisir/controleur_choisir.php');
require_once('modele_choisir_exception.php');

class ModChoisir extends ModuleGenerique {

	function __construct(){
		$action = isset($_GET['action']) ? $_GET['action'] : "default";
		
		$this->controleur = new ControleurChoisir();
		
		switch ($action) {
			case 'form_choisir':
				$this->controleur->form_choisir();
				break;

			case 'choisir_ingr':
				$this->controleur->choisir_ingr();
				break;
				
			default:
				$this->controleur->form_choisir();
				break;

		}
	}
}
?>