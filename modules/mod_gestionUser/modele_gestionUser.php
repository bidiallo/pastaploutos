<?php


class ModeleGestionUser extends ModeleGenerique {



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


	function modele_modif_droit($id_user, $admin) {
		
		$req = 'UPDATE p_user SET admin=? WHERE id_user=?';
		$reqPrep = self::$connexion->prepare($req);
		return $reqPrep->execute(array($admin,$id_user));
	}

	function get_admin($id_user) {
		$req = 'SELECT admin FROM p_user WHERE id_user=?';
		$reqPrep = self::$connexion->prepare($req);
		$reqPrep->execute(array($id_user));
		$enreg = $reqPrep->fetch(PDO::FETCH_ASSOC);
		return $enreg['admin'];

	}


	function modele_recuperer_info_user($id_user) {
		
		$req = 'SELECT id_user, pseudo_user, nom_user, prenom_user, mail_user, admin FROM p_user WHERE id_user=?;';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute(array($id_user));

		return $reqPrep->fetchall(PDO::FETCH_ASSOC);
	}


	function modele_suppr_user($id_user) {
		
		$req = 'DELETE FROM p_user WHERE id_user=?;';

		$reqPrep = self::$connexion->prepare($req);
		$reqPrep->execute(array($id_user));
		$enregistrement = $reqPrep->fetchall(PDO::FETCH_ASSOC);

	}


	
}

?>