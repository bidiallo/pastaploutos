<?php
require_once('modele_inscription.php');
require_once('vue_inscription.php');
//require_once('../../include/modele_generique.php');
require_once('include/controleur_generique.php');
class ControleurInscription extends ControleurGenerique {
	function __construct() {
		$this->vue=new VueInscription();
		$this->modele=new ModeleInscription();
	}
	function form_inscription() {
		$this->vue->vue_form_inscription();
	}
	function ajout_inscription(){

		$nom_user = htmlspecialchars($_POST["nom_user"]);
		$prenom_user = htmlspecialchars($_POST["prenom_user"]);
		$pseudo_user = htmlspecialchars($_POST["pseudo_user"]);
		$email_user = htmlspecialchars($_POST["email_user"]);
		$mdp_user = htmlspecialchars($_POST["mdp_user"]);
		$mdp_user2 = htmlspecialchars($_POST["mdp_user2"]);

		if(empty($nom_user) || empty($prenom_user) || empty($pseudo_user) || empty($email_user) || empty($mdp_user) || empty($mdp_user2)){
			$this->form_inscription();
					
		} else {
			
		return $this->modele->modele_inscription($nom_user, $prenom_user, $pseudo_user, $email_user, $mdp_user, $mdp_user2);
		}
	}
}
?>