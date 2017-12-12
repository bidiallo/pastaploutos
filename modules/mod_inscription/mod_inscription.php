<?php
require_once('include/module_generique.php');
require_once('include/controleur_generique.php');
require_once('controleur_inscription.php');

class ModInscription extends ModuleGenerique{

	function __construct(){
		
		parent:: __construct();
		$this->controleur = new ControleurInscription();

			if(isset($_SESSION['id_user'])){
				echo "deja la bg";

			} else if(!isset($_GET['action'])){
				$action = "form_inscription";
			}
			else 
			$action = "ajout_inscription";
			//session_start();

		switch($action){

			case 'form_inscription':
			var_dump($action);
				$this->controleur->form_inscription();
				echo 'mehdi';
				break;
			case 'ajout_inscription':
			var_dump($action);
			echo 'coucou';
				$this->controleur->ajout_inscription();
				echo 'mehdo';
				break;

			default: 
				var_dump($action);
				$this->controleur->form_inscription();
				echo 'mehdi';
				break;

		}
	}
}
?>