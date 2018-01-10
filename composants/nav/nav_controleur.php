<?php


class NavControleur extends ControleurGenerique {

	public function __construct() {
		$this->vue= new NavVue();
		$this->modele= new NavModele();
	}


	public function affiche() {
		$nav = array(
			"accueil" => "Accueil",
			"recettes" => "Recettes",
			"ideesastuces" => "Idées & Astuces",
			"choisiringr" => "Choisir les ingrédients" 
			);

		if (isset($_SESSION['id_user']) && $_SESSION['id_user'] != "") {
			//admin et user connecté
			$nav["paramCompte"] = "Paramètres du compte";
			
			if($admin = $this->modele->verifAdmin($_SESSION['id_user'])){
				//seulement admin
				$nav["gestionUser"] = "Voir les profils";
				$nav["offres"] = "Offres recettes";
			}
		}

		$this->vue->affiche($nav);
	}
}

?>