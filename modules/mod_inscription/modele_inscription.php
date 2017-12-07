<?php 
require_once ('include/modele_generique.php');

class ModeleInscription extends ModeleGenerique {

	/* public __construct(){
		parent:: __construct();
	} */

	function modele_inscription($connexion,$tab){
		//faire requete
		$req = 'INSERT INTO p_user (nom,prenom,pseudo,mail,mdp,age) VALUES (?, ?, ?, ?, ?, ?);';
		/*
		if(!$prepare->execute(array($tab['nom'],$tab['prenom'], $tab['pseudo'], $tab['mail'], $tab['mdp1'], $tab['mdp2'],$tab['age'])));
				return false; */

		$nom = htmlspecialchars($tab['nom']);
		$prenom = htmlspecialchars($tab['prenom']);
		$pseudo = htmlspecialchars($tab['pseudo']);
		$mail = htmlspecialchars($tab['email']);
		$mdp = htmlspecialchars($tab['mdp1']);
		$mdp2 = htmlspecialchars($tab['mdp2']);
		$date = htmlspecialchars($tab['date']);
		$date = new DateTime($date);
		$date = $date->format('Y-m-d');


		$VerifPseudo = $this->VerifPseudo($pseudo);
		if($VerifEmail)
			return "Erreur email";

		$VerifEmail = $this->VerifEmail($email);
		if($VerifPseudo)
			return "Erreur pseudo";

		$prepare=self::$connexion->prepare($req);
		$result=$req->execute(array($nom,$prenom,$pseudo,$email, $mdp,$date));
	}

	public function VerifPseudo($pseudo){
		$existe = true;
		$requetePseudo = 'SELECT pseudo_user FROM p_user WHERE pseudo_user=?';
		$req=self::$connexion->prepare($requetePseudo);
		$result->$requete->execute(array($pseudo));

		if(empty($result)){
			$existe=false;
		}
		return $existe;
	}

	public function VerifEmail($email){
		$existe = true;
		$requeteEmail = 'SELECT email_user FROM p_user WHERE email_user=?';
		$req=self::$connexion->prepare($requeteEmail);
		$result->$requete->execute(array($email));

		if(empty($result)){
			$existe=false;
		}
		return $existe;
	}
//verif meme mdp
}

