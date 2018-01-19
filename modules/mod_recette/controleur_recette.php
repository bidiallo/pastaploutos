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

		$element = $this->modele->modele_recuperer_info_recette($_GET['id_recette']);
		$this->vue->vue_consulter_recette($element);
	}

		function liste_recette() {
			
		$recette = $this->modele->modele_recette();
		$this->vue->vue_liste_recette($recette);
	}

		function favoris_recette(){

			if(!isset($_SESSION['id_user']) || $_SESSION['id_user'] == "") {
			$this->vue->vue_erreur(" Impossible d'ajouter aux favoris. Vous n'etes pas connecté.");

		}elseif ($_GET['is_favoris']==1) {

			$this->vue->vue_erreur(" Recette déjà ajoutée aux favoris !!");
		}

		else {
			try{
			$element = $this->modele->modele_ajouter_favoris($_GET['id_recette']);
			$this->vue->vue_consulter_recette($element);
			} catch(Exception $e) {
				//$this->vue->vue_erreur("Erreur accès BDD");
			}
		}


		}

}
?>