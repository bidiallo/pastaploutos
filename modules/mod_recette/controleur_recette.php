<?php
require_once('modele_recette.php');
require_once('vue_recette.php');
require_once('include/controleur_generique.php');

class ControleurRecette extends ControleurGenerique{
	function __construct(){
		$this->vue=new VueRecette();
		$this->modele=new ModeleRecette();
	}

		function consulter_recette() {

		$recette = $this->recette->modele_recuperer_info_recette($_GET['id_recette']);
		$this->vue->vue_consulter_recette($recette);
	}

		function liste_recette() {
			
		$recette = $this->modele->modele_recette();
		$this->vue->vue_liste_recette($recette);
	}

}
?>