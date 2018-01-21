<?php
//require_once('include/module_generique.php');
//require_once('include/controleur_generique.php');
require_once('controleur_inscription.php');
class ModInscription extends ModuleGenerique{
	function __construct(){
		
		parent:: __construct();
		$this->controleur = new ControleurInscription();

			if(isset($_SESSION['id_user'])){
				echo "deja inscrit";
			} elseif (!isset($_GET['action'])){
				$action = "form_inscription";
			}
			else { 
				$action=$_GET["action"];
			}
			
		switch($action){
			case "form_inscription":
				$this->controleur->form_inscription();
				
				break;
			case "ajout_inscription":
				$this->controleur->ajout_inscription();
				break;

			default: 
				$this->controleur->form_inscription();
				break;
		}
	}
}
?>