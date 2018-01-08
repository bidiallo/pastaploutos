<?php
require_once('modele_recette.php');
require_once('vue_recette.php');
require_once('include/controleur_generique.php');

class ControleurRecette extends ControleurGenerique{
	function __construct(){
		$this->vue=new VueRecette();
		$this->modele=new ModeleRecette();
	}
	function form_inscription() {
		$this->vue->vue_form_recette();
	}
	
}
?>