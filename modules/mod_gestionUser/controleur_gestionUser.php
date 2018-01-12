<?php

require_once('modules/mod_gestionUser/modele_gestionUser.php');
require_once('modules/mod_gestionUser/vue_gestionUser.php');



class ControleurGestionUser extends ControleurGenerique {

	function __construct() {
		$this->modele = new ModeleGestionUser();
		$this->vue = new VueGestionUser();
	}


	function form_ajout_user() {
		//afficher le formulaire
		if($this->modele->verifiAdmin($_SESSION['id_user'])) {
			$this->vue-> vue_form_ajout_user();
		}
	}

	function ajout_user() {
		//ajouter les user
		/*
		if (!isset($_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['mail'])) {
			$this->vue->vue_erreur("Il manque des elements au formulaire");
			return;
		}
		

		if (!$this->modele->modele_ajout_user($_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['mail'], $_SESSION['admin'])) {
			
			$this->vue->vue_erreur("Ajout user impossible !!!");
		
		} else {
			$this->vue->vue_confirm("User ajouté.");
			var_dump($id_user);
		}*/

		if( !$this->modele->modele_ajout_user($_POST['nom_user'], $_POST['prenom_user'], $_POST['pseudo_user'], $_POST['mail_user'], $_POST['mdp_user'], $_POST['mdp_user2'])) {
			$this->vue->vue_erreur("Impossible d'ajouter l'utilisateur");
		} else {
			$this->vue->vue_confirm("Utilisateur ajouté !");
		}
		
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
				$profil = $this->modele->modele_recuperer_info_user($_SESSION['id_user']);
				$this->vue->vue_consulter_profil($profil);
			} catch(Exception $e) {
				$this->vue->vue_erreur("Erreur accès BDD");
			}
		}
	}

/*
	function modif_profil() {

	}*/


	

	function supprimer_profil() {
		//$id_user = htmlspecialchars($_GET['id_user']);
		$this->modele->modele_suppr_user( htmlspecialchars($_GET['id_user']));
		$this->vue->vue_confirm("Profil supprimé !");
		session_destroy();
		//header('Location:index.php?module=gestionUser&action=liste_profil');

/*
		if($this->modele->verifiAdmin($_SESSION['id_user'])) {
			$this->modele->modele_suppr_user($_GET['id_user']);
			$this->vue->vue_confirm('Utilisateur supprimé donc inactif');
			var_dump($id_user);
		}
		else {
			$this->vue->vue_erreur("Problème de suppression !");
		}*/
	}
}


?>