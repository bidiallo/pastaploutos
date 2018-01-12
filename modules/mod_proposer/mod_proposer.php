<?php
require_once('controleur_proposer.php');

class ModProposer extends ModuleGenerique{

	function __construct(){

		parent:: __construct();
		$action = isset($_GET['action']) ? $_GET['action'] : "default";

		$this->controleur = new ControleurProposer();

			
		switch($action){
			case "form_proposer":
				$this->controleur->form_proposer();
				
				break;
			case "ajout_proposer":
				$this->controleur->ajout_proposer();
				break;

			default: 
				$this->controleur->form_proposer();
				break;
		}
	}
}
?>