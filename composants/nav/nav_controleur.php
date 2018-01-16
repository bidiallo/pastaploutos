<?php


class NavControleur extends ControleurGenerique {

	public function __construct() {
		$this->vue= new NavVue();
		$this->modele= new NavModele();
	}


	public function affiche() {
		$nav = array(
			//"accueil" => "Accueil",
			//"recette" => "Recettes",
			//"ideesastuces" => "Idées & Astuces",
			//"choisiringr" => "Choisir les ingrédients" 
			);

		if (isset($_SESSION['id_user']) && $_SESSION['id_user'] != "") {
			//admin et user connecté
			$nav["profil"] = "Profil";
			$nav["proposer"] = "Proposer une recette";

			if($admin = $this->modele->verifAdmin($_SESSION['id_user'])){
				//seulement admin
				$nav["gestionUser"] = "Voir les profils";
				$nav["offres"] = "Offres recettes";
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