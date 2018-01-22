<?php
require_once('modules/mod_choisir/modele_choisir.php');
require_once('modules/mod_choisir/vue_choisir.php');

class ControleurChoisir extends ControleurGenerique {

	function __construct() {
		$this->modele = new ModeleChoisir();
		$this->vue = new VueChoisir();
	}
	

	function form_choisir() {

		$this->vue->vue_form_choisir();
			
	}


}
?>