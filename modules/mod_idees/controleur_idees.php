<?php
require_once('modele_idees.php');
require_once('vue_idees.php');
require_once('include/controleur_generique.php');

class ControleurIdees extends ControleurGenerique{
	function __construct(){
		$this->vue=new VueIdees();
		$this->modele=new ModeleIdees();
	}

		function consulter_idee() {

		$element = $this->modele->modele_recuperer_info_idee($_GET['id_recette']);
		$this->vue->vue_consulter_idee($element);
	}

		function liste_idee() {
			
		$recette = $this->modele->modele_idee();
		$this->vue->vue_liste_idee($recette);
	}


}
?>