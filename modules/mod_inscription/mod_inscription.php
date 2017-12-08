<?php
require_once('include/module_generique.php');
require_once('include/controleur_generique.php');
require_once('controleur_inscription.php');

class ModInscription extends ModuleGenerique{

	function __construct(){
		/*$action = isset($_GET['action']) ? $_GET['action'] : "default"; */

		parent:: __construct();
		$this->controleur = new ControleurInscription();

			session_start();
		switch($action){
			case 'form_inscription':
				$this->controleur->form_inscription();
				break;
			case 'ajout_user':
				$this->controleur->ajout_inscription();
			default: 
				$this->controleur->form_inscription();
				break;

		}
	}
}
?>