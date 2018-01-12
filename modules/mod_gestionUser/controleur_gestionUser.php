<?php

require_once('modules/mod_gestionUser/modele_gestionUser.php');
require_once('modules/mod_gestionUser/vue_gestionUser.php');



class ControleurGestionUser extends ControleurGenerique {

	function __construct() {
		$this->modele = new ModeleGestionUser();
		$this->vue = new VueGestionUser();
	}


<<<<<<< HEAD

	function consultProfil() {

		$profil = $this->modele->modele_recuperer_info_user($_GET['id']);
		$this->vue->vue_profil($profil);
	}


=======
	function form_ajout_user() {
		//afficher le formulaire
		if($this->modele->verifiAdmin($_SESSION['id_user'])) {
			$this->vue-> vue_form_ajout_user();
		}
	}
>>>>>>> c5bb068928de8b410d524d098b0095a0a5c7a16c

	function ajout_user() {

		
		if (!isset($_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['mail'])) {
			$this->vue->vue_erreur("Il manque des elements au formulaire");
			return;
		}
		

		if (!$this->modele->modele_ajout_user($_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['mail'], $_SESSION['admin'])) {
			
			$this->vue->vue_erreur("Ajout user impossible !!!");
		
		} else {
			$this->vue->vue_confirm("User ajouté.");
			var_dump($id_user);
		}

	}


	function form_ajout_user() {

		/*
		if ($this->modele->admin($_SESSION['id_user'])) {

			$this->vue->vue_form_ajout_admin();
		
		} else {

			$this->vue->vue_form_ajout_user();
		}*/

		$this->vue->vue_form_ajout_user();

	}

	//en train de tester juste pour les users
	function liste_profil() {

		//if($this->modele->$_SESSION['id_user']) {}
			
			$user = $this->modele->modele_get_liste_user();
			$this->vue->vue_liste_user($user);
		//}

	}

	function consulter_profil() {

		if(!isset($_SESSION['id_user']) || $_SESSION['id_user'] == "") {
			$this->vue->vue_erreur("Vous n'etes pas connecté.");
		}
		else {
			try{
				$element = $this->modele->modele_recuperer_info_user($_GET['id_user']);
				$this->vue->vue_consulter_profil($element);
			} catch(Exception $e) {
				//$this->vue->vue_erreur("Erreur accès BDD");
			}
		}
	}


	function form_modif_droit() {
		//if($this->modele->verifiAdmin($_SESSION['id_user'])) {
			var_dump($_POST['droit']);
			$admin = $this->modele->get_admin($_GET['id_user']);
			$this->vue->vue_form_modif_droit($admin,$_GET['id_user']);
		//}
	}


	function modif_droit() {

		if (!$this->modele->modele_modif_droit($_POST['admin'], $_GET['id_user'])) {
			$this->vue->vue_erreur("Modification impossible");
		}
		else {
			$this->vue->vue_confirm('Droit changé');
		}
	}

	
	function modif_profil() {

		$this->modele->modele_modif_user($_GET['id_user']);
		$this->vue->vue_confirm("en cours de modification.");
	}
	

	function supprimer_profil() {
		$id_user = htmlspecialchars($id_user);
		$this->modele->modele_suppr_user($id_user);
		session_destroy();
		header('Location:index.php?module=accueil');
		$this->vue->vue_confirm("Profil supprimé !");
	}
}


?>