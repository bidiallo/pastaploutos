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


		function supprimer_offre(){
			$element= $this->modele-> modele_supprimer_favoris($_GET['id_recette']);
			$this->vue->vue_confirm(" Favoris supprimé !");
			$this->vue->vue_liste_favoris($element);
			/*header('Location:index.php?module=favoris&action=liste_favoris');	*/
		}

}
?>