<?php
//require_once('include/module_generique.php');
//require_once('include/controleur_generique.php');
require_once('controleur_inscription.php');

class ModInscription extends ModuleGenerique{

	function __construct(){
		
		parent:: __construct();
		$this->controleur = new ControleurInscription();
		//session_start();

			if(isset($_SESSION['id_user'])){
				echo "deja inscrit";

			} elseif (!isset($_GET['action'])){

				$action = "formulaire";
			}
			else { 
				$action=$_GET["action"];
			}

			

		switch($action){

			case "formulaire":
				echo "form";
				$this->controleur->form_inscription();
				echo 'FORMULAIRE 1';
				break;
			case "ajout_inscription":

				$this->controleur->ajout_inscription();
				echo 'AJOUT';
				break;

			default: 
				$this->controleur->form_inscription();
				echo 'FORMULAIRE 2';
				break;

		}
	}
}
?>