<?php


class SideNavControleur extends ControleurGenerique {

	public function __construct() {
		$this->vue= new SideNavVue();
		$this->modele= new SideNavModele();
	}


	public function affiche() {
		$sidenav = array(
			//"accueil" => "Accueil",
			"recette" => "Recettes",
			"ideesastuces" => "Idées & Astuces",
			"choisiringr" => "Choisir les ingrédients" 
			);

		if (isset($_SESSION['id_user']) && $_SESSION['id_user'] != "") {
			//admin et user connecté
			$sidenav["profil"] = "Profil";
			$sidenav["proposer"] = "Proposer une recette";
			$sidenav["deconnexion"] = "Deconnexion";

			if($admin = $this->modele->verifAdmin($_SESSION['id_user'])){
				//seulement admin
				$sidenav["gestionUser"] = "Voir les profils";
				$sidenav["offres"] = "Offres recettes";
			}

		}
		else {
			$sidenav["inscription"] = "Inscription";
			$sidenav["connexion"] = "Connexion";
		}
		$this->vue->affiche($sidenav);
	}
}

?>