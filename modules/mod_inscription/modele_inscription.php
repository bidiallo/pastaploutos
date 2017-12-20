<?php 
require_once ('include/modele_generique.php');

class ModeleInscription extends ModeleGenerique {

	function modele_inscription($nom_user, $prenom_user, $pseudo_user, $email_user, $mdp_user, $mdp_user2){
		//faire requete
		$req = 'INSERT INTO p_user (nom_user,prenom_user,pseudo_user,email_user,mdp_user, mdp_user2, admin) VALUES (?, ?, ?, ?, ?, ?, 0)';
		var_dump($req);

		
		/*$VerifPseudo = $this->VerifPseudo($pseudo);
		if($VerifPseudo)
			return "Erreur pseudo";
		
		$VerifEmail = $this->VerifEmail($email);
		if($VerifEmail)
			return "Erreur email"; */
		
		$prepare=self::$connexion->prepare($req);

	
		$result=$prepare->execute(array($nom_user,$prenom_user,$pseudo_user,$email_user, $mdp_user, $mdp_user2));
		var_dump($result);
		
	}
/*
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
	*/
//verif meme mdp
}

