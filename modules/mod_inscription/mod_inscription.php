<?php
require_once('./include/module_generique.php');
class ModuleInscirption extends ModuleGenerique{

	function __construct(){
		$action = isset($_GET['action']) ? $_GET['action'] : "default";

		parent:: __construct();
		$this->controleur = new ControleurInscription;

		switch($action){
			case 'form_inscription':
				$this->controleur->form_inscription();
				break;
			default: 
				$this->controleur->form_inscription();
				break;

		}
	}
}
?>