
<?php
require_once('modele_inscription.php');
require_once('vue_inscription.php');
//require_once('../../include/modele_generique.php');
require_once('include/controleur_generique.php');


class ControleurInscription extends ControleurGenerique {

	function __construct() {
		$this->vue=new VueInscription();
		$this->model=new ModeleInscription();
	}

	function form_inscription() {
		$this->vue->vue_form_inscription();
	}


	function ajout_inscription(){
		$nom = htmlspecialchars($_POST['nom_user']);
		$prenom = htmlspecialchars($_POST['prenom_user']);
		$pseudo = htmlspecialchars($_POST['pseudo_user']);
		$email = htmlspecialchars($_POST['mail_user']);
		$mdp = htmlspecialchars($_POST['mdp_user']);
		//$mdp2 = htmlspecialchars($tab['mdp2']);

		return $this->modele->modele_inscription($nom, $prenom, $pseudo, $email, $mdp);
	}


}


?>