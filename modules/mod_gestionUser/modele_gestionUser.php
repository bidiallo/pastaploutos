<?php


class ModeleGestionUser extends ModeleGenerique {


	function modele_ajout_user($nom_user, $prenom_user, $pseudo_user, $email_user, $mdp_user, $mdp_user2) {

		$req = 'INSERT INTO p_user (nom_user,prenom_user,pseudo_user,mail_user,mdp_user,admin) VALUES (?, ?, ?, ?, ?, 0)';

		$prepare=self::$connexion->prepare($req);
		$result=$prepare->execute(array($nom_user,$prenom_user,$pseudo_user,$email_user, $mdp_user));

	}

//pour tous les users, admin compris
	function modele_get_liste_user() {

		$req = 'SELECT * FROM p_user ';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute();

		$enregistrement = $reqPrep->fetchall(PDO::FETCH_ASSOC);

		return $enregistrement;
	}

//uniquement pour les admin
/*
	function modele_get_liste_admin() {

		$req = 'SELECT * FROM p_user WHERE admin=true';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute();

		$enregistrement = $reqPrep->all(PDO::FETCH_ASSOC);

		return $enregistrement;
	}*/

	/*function modele_modif_nomUser($id, $nom) {
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
	}*/

	function modele_modif_droit($id_user, $admin) {
		
		$req = 'UPDATE p_user SET admin=? WHERE id_user=?';
		$reqPrep = self::$connexion->prepare($req);
		return $reqPrep->execute(array($id_user,$admin));
	}

	function get_admin($id_user) {
		$req = 'SELECT admin FROM p_user WHERE id_user=?';
		$reqPrep = self::$connexion->prepare($req);
		$reqPrep->execute(array($id_user));
		$enreg = $reqPrep->fetch(PDO::FETCH_ASSOC);
		return $enreg['admin'];

	}


	function modele_recuperer_info_user($id_user) {
		
		$req = 'SELECT pseudo_user, nom_user, prenom_user, mail_user, admin FROM p_user WHERE id_user=?;';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute(array($id_user));

		return $reqPrep->fetchall(PDO::FETCH_ASSOC);
	}


	function modele_suppr_user($id_user) {
		var_dump($id_user);
		$req = 'DELETE FROM p_user WHERE id_user=?;';

		$reqPrep = self::$connexion->prepare($req);
		$reqPrep->execute(array($id_user));
		$enregistrement = $reqPrep->fetchall(PDO::FETCH_ASSOC);

	}


	
}

?>