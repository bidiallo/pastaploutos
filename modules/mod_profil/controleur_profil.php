<?php

require_once('modules/mod_profil/modele_profil.php');
require_once('modules/mod_profil/vue_profil.php');



class ControleurProfil extends ControleurGenerique {


	function __construct() {
		$this->modele = new ModeleProfil();
		$this->vue = new VueProfil();
	}




	function consulter_profil() {

		if(!isset($_SESSION['id_user']) || $_SESSION['id_user'] == "") {
			$this->vue->vue_erreur("Vous n'etes pas connecté.");
		}
		else {
			try{
				$element = $this->modele->modele_recuperer_info_profil($_SESSION['id_user']);
				$this->vue->vue_consulter_profil_user($element);
			} catch(Exception $e) {
				$this->vue->vue_erreur("Erreur accès BDD");
			}
		}
	}

	//voir à la fin si modif nom, prenom


	function form_modif_mdp() {
		
		try {
			$this->vue->vue_form_modif_mdp();
		} catch (Exception $e) {
			$this->vue->vue_erreur("Erreur");
		}
	}


	function modif_mdp() {
		
		if (!isset($_POST['password_old']) || $_POST['password_old'] == "" || !isset($_POST['password_new']) || $_POST['password_new'] == "" ) {
			$this->vue->vue_erreur("Champ(s) invalide(s)");
		}
		elseif ($_POST['password_new'] != $_POST['password_new_verif']) {
			$this->vue->vue_erreur("Attention ! Mots de passe différent.");
		}
		else {
			try {
				$this->modele->modele_modif_mdp($_SEESION['id_user'], $_POST['password_old'], $_POST['password_new']);
				$this->vue->vue_confirm("Mot de passe modifié");
			} catch (Exception $e) {
				$this->vue->vue_erreur("Erreur");
			}
		}

	}


	

	function supprimer_profil() {
		//$id_user = htmlspecialchars($_GET['id_user']);
		$this->modele->modele_suppr_user( htmlspecialchars($_GET['id_user']));
		$this->vue->vue_confirm("Profil supprimé !");
		session_destroy();
		//header('Location:index.php?module=gestionUser&action=liste_profil');	
	}

}

?>