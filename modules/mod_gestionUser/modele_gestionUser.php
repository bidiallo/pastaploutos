<?php


class ModeleGestionUser extends ModeleGenerique {


	function modele_ajout_user($nom, $prenom, $pseudo, $mail, $admin) {

		$req = 'INSERT INTO p_user (nom_user, prenom_user, pseudo_user, mail_user, mdp_user, admin) VALUES (?,?,?,?,?,?)';

		$reqPrep = self::$connexion->prepare($req);

		return $reqPrep->execute(array($nom, $prenom, $pseudo, $mail, password_hash("azeerty", PASSWORD_DEFAULT), $admin));

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




	//modif des droits si l'user est un admin sinon rien
	function modele_modif_user($id_user, $pseudo_user, $mail_user, $mdp_user) {
		$req = 'UPDATE p_user SET nom_user=?, prenom_user=?, pseudo_user=?, mail_user=? WHERE id_user=?';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute(array());

		return $reqPrep->fetchall(PDO::FETCH_ASSOC);
	}



	function modele_modif_nomUser($id, $nom) {
		$req = 'UPDATE p_user SET nom_user=? WHERE id_user=?';
		$reqPrep = self::$connexion->prepare($req);
		$reqPrep->execute(array($id, $nom));
	}


	function modele_modif_prenomUser($id, $prenom) {
		$req = 'UPDATE p_user SET prenom_user=? WHERE id_user=?';
		$reqPrep = self::$connexion->prepare($req);
		$reqPrep->execute(array($id, $prenom));
	}


	function modele_modif_pseudo($id, $pseudo) {
		$req = 'UPDATE p_user SET pseudo_user=? WHERE id_user=?';
		$reqPrep = self::$connexion->prepare($req);
		$reqPrep->execute(array($id, $pseudo));
	}



	function modele_modif_mdp($id, $mdp) {
		
		$crypt = $this->mdpCrypt($mdp, $_SESSION['pseudo_user']);
		$req = 'UPDATE p_user SET mdp_user=? WHERE id_user=?';
		$reqPrep = self::$connexion->prepare($req);
		$reqPrep->execute(array($crypt,$id));
	}



	function modele_suppr_user ($id) {

		$req = 'DELETE FROM p_user WHERE id_user=?';

		$reqPrep = self::$connexion->prepare($req);
		$reqPrep->execute(array($id_user));
		return $reqPrep->fetchall(PDO::FETCH_ASSOC);

	}
}

?>