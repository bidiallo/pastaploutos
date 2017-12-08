<?php 
require_once ('include/modele_generique.php');

class ModeleInscription extends ModeleGenerique {

	function modele_inscription($connexion,$tab){
		//faire requete
		$req = "INSERT INTO p_user (nom_user,prenom_user,pseudo_user,mail_user,mdp_user, admin_user) VALUES (?, ?, ?, ?, ?,0)";
		
		//$mdp2 = htmlspecialchars($tab['mdp2']);

		/*$VerifPseudo = $this->VerifPseudo($pseudo);
		if($VerifPseudo)
			return "Erreur pseudo";
		
		$VerifEmail = $this->VerifEmail($email);
		if($VerifEmail)
			return "Erreur email"; */
		
		$prepare=self::$connexion->prepare($req);
	
		$result=$prepare->execute(array($nom,$prenom,$pseudo,$email, $mdp));
		
		
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

