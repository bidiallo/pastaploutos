<?php


class NavControleur extends ControleurGenerique {

	public function __construct() {
		$this->vue= new NavVue();
		$this->modele= new NavModele();
	}


	public function affiche() {
		$nav = array(
			"recette" => "Recettes",
			"ideesetastuces" => "Idées & Astuces",
			"choisir" => "Choisir un ingrédient"
			);

		if (isset($_SESSION['id_user']) && $_SESSION['id_user'] != "") {
			//admin et user connecté
			$nav["profil"] = "Profil";
			$nav["proposer"] = "Proposer une recette";
			$nav["favoris"] = "Favoris";

			if($admin = $this->modele->verifAdmin($_SESSION['id_user'])){
				//seulement admin
				$nav["gestionUser"] = "Voir les profils";
				$nav["offre"] = "Offres recettes";
			}
			$nav["deconnexion"] = "Deconnexion";


		}
		else {
			$nav["inscription"] = "Inscription";
			$nav["connexion"] = "Connexion";
		}
		$this->vue->affiche($nav);
	}
}

?>