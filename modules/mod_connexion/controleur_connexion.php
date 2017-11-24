<?php
require_once('modele_connexion.php');
require_once('vue_connexion.php');
require_once('include/modele_generique.php');
require_once('include/controleur_generique.php');


class ControleurConnexion extends ControleurGenerique {

	function __construct() {
		$this->vue=new VueConnexion();
		$this->model=new ModeleConnexion();
	}

	function form_connexion() {
		$this->vue->vue_form_connexion();
	}


	function deconnexion() {
		unset($_SESSION['id_user']);
		$this->vue->vue_confirmation("Vous etes déconnecté !");
	}




}

?>