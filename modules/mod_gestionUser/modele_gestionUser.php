<?php


class ModeleGestionUser extends ModeleGenrenerique {


	function modele_ajout_user($nom, $prenom, $pseudo, $mail, $mdp,$admin) {

		$req = 'INSERT INTO p_user(nom_user, prenom_user, pseudo_user, mail_user, mdp_user, admin') VALUES (?,?,?,?,?,?);

		$reqPrep = self::$connexion->prepare($req);

		return $reqPrep->execute(array($nom, $prenom, $pseudo, $mail, password_hash("azerty", PASSWORD_DEFAULT), $admin));

	}


	function modele_get_liste_user() {

		$req = 'SELECT * FROM p_user WHERE admin=false';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute();

		$enregistrement = $reqPrep->fetchall(PDO::FETCH_ASSOC);

		return $enregistrement;
	}


	function modele_get_liste_admin() {

		$req = 'SELECT * FROM p_user WHERE admin=true';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute();

		$enregistrement = $reqPrep->all(PDO::FETCH_ASSOC);

		return $enregistrement;
	}


	function modele_recuperer_info_user($id_user) {
		
		$req = 'SELECT * FROM p_user WHERE id_user=?';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute(array($id_user));

		return $reqPrep->fetchall(PDO::FETCH_ASSOC);
	}


	function modele_suppr_user ($id_user) {

		$req = 'DELETE FROM p_user WHERE id_user=?';

		$reqPrep = self::$connexion->prepare($req);

		return $reqPrep->execute(array($id_user));

	}

/*
	function modele_accept_recette() {

	}

	function modele_refuse_recette() {
	
	}

*/
}

?>