<?php
require_once('modele_offre.php');
require_once('vue_offre.php');
require_once('include/controleur_generique.php');

class ControleurOffre extends ControleurGenerique{
		function __construct(){
			$this->vue=new VueOffre();
			$this->modele=new ModeleOffre();
		}

			function consulter_offre() {

			$element = $this->modele->modele_recuperer_info_offre($_GET['id_recette']);
			$this->vue->vue_consulter_offre($element);
		}

			function liste_offre() {
				
			$recette = $this->modele->modele_offre();
			$this->vue->vue_liste_offre($recette);
		}
		function supprimer_offre(){

			$element=$this->modele->modele_supprimer_offre();
			$this->vue->vue_liste_offre($element);
		}
		function valider_offre(){
			
			$element=$this->modele->modele_valider_offre();
			$this->vue->vue_liste_offre($element);
		}
	}
?>