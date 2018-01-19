<?php
require_once('modele_favoris.php');
require_once('vue_favoris.php');
require_once('include/controleur_generique.php');

class ControleurFavoris extends ControleurGenerique{
	function __construct(){
		$this->vue=new VueFavoris();
		$this->modele=new ModeleFavoris();
	}

		function liste_favoris() {
			
		$favoris = $this->modele->modele_liste_favoris();
		$this->vue->vue_liste_favoris($favoris);
	}


		function ajouter_offre(){
			$element= $this->modele->modele_valider_offre($_GET['id_recette']);
			$this->vue->vue_liste_offre($element);
			$this->vue->vue_confirm("Recette bien ajoutée !");
		}
//erreur mauvaise fonction utiliser pour redirige vers la liste 
}
?>