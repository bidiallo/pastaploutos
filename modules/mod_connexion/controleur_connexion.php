<?php
require_once('modele_connexion.php');
require_once('vue_connexion.php');
require_once('include/modele_generique.php');
require_once('include/controleur_generique.php');


class ControleurConnexion extends ControleurGenerique {

	function __construct() {
		$this->vue=new VueConnexion();
		$this->modele=new ModeleConnexion();
	}

	function form_connexion() {
		$this->vue->vue_form_connexion();
	}

	function authentification() {

		if ( !isset($_POST['pseudo']) || $_POST['pseudo'] == "" 
		|| !isset($_POST['mdp']) || $_POST['mdp'] == "" ) {
			$this->vue->vue_erreur("Champ(s) invalide(s).");
			
		}

		else {
				//$pseudo = $_POST['pseudo'];
				//$mdp = $_POST['mdp'];
			
			
			$_SESSION['id_user'] = $this->modele->modele_authentification($_POST['pseudo'], $_POST['mdp']);

			if (!isset($_SESSION['id_user'])) {
				$this->vue->vue_erreur("Impossible de se connecter. Veuillez réessayer !");
				$this->vue->vue_form_connexion();
			}
			else {
				$this->vue->vue_confirm("Connecté en tant que " . $_SESSION['id_user']);//mettre en JS pdt 5s l'affichage
				header('Location: index.php?module=accueil');
				exit();
			}
		}
	}

	function message_connexion_echoue(){
		$this->vue->vue_erreur("La combinaison Pseudo, Mot de Passe que vous avez saisi est incorrect");
	}

	function deconnexion() {
		unset($_SESSION['id_user']);
		$this->vue->vue_confirm("Vous etes déconnecté !");
	}

	function getModel(){
		return $this->model;
	}


}

?>