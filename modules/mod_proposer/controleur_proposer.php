<?php
require_once('modele_proposer.php');
require_once('vue_proposer.php');
require_once('include/controleur_generique.php');

class ControleurProposer extends ControleurGenerique {

	function __construct() {
		$this->vue=new VueProposer();
		$this->modele=new ModeleProposer();
	}
	function form_proposer() {
		$this->vue->vue_form_proposer();
	}
	function ajout_proposer(){

		$titre_recette = htmlspecialchars($_POST["titre_recette"]);
		$description_recette = htmlspecialchars($_POST["description_recette"]);
		$niv_difficulte_recette = htmlspecialchars($_POST["niv_difficulte_recette"]);
		$cout_recette = htmlspecialchars($_POST["cout_recette"]);
		$is_vegetarien = htmlspecialchars($_POST["is_vegetarien"]);
		$nbPersonne_recette = htmlspecialchars($_POST["nbPersonne_recette"]);
		$id_ingredient = htmlspecialchars($_POST["id_ingredient"]);
		$tpsPreparation_recette = htmlspecialchars($_POST["tpsPreparation_recette"]);
		$tpsCuisson_recette = htmlspecialchars($_POST["tpsCuisson_recette"]);
		$id_cat = htmlspecialchars($_POST["id_cat"]);
		$photo_recette = htmlspecialchars($_POST["photo_recette"]);
		//$_files pour fichier


		if(empty($titre_recette) || empty($description_recette) || empty($niv_difficulte_recette) || empty($cout_recette) || empty($is_vegetarien) || empty($nbPersonne_recette)|| empty($id_ingredient)|| empty($tpsPreparation_recette)|| empty($tpsCuisson_recette)|| empty($id_cat) || empty($photo_recette)){
			$this->form_proposer();
					
		} else {
			
		return $this->modele->modele_proposer($titre_recette, $description_recette, $niv_difficulte_recette, $cout_recette, $is_vegetarien, $nbPersonne_recette,$id_ingredient, $tpsPreparation_recette, $tpsCuisson_recette, $id_cat, $photo_recette);
		}
	}
}
?>