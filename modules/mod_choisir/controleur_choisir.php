<?php
require_once('modules/mod_choisir/modele_choisir.php');
require_once('modules/mod_choisir/vue_choisir.php');

class ControleurChoisir extends ControleurGenerique {

	function __construct() {
		$this->modele = new ModeleChoisir();
		$this->vue = new VueChoisir();
	}
	
	//faire les fonctions correspondantes 

	//form pour sélectionner les ingrédients qu'on veut
//

	function form_choisir() {
			$this->vue->vue_form_choisir($_GET['id_ingredient']);
	}




	function choisir() {
		
		$ingr = $this->modele->modele_recuperer_info_recette($_GET['id_ingredient']);	
	}

}
?>