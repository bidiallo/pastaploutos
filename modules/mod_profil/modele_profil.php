<?php


class ModeleProfil extends ModeleGenerique {


	function modele_recuperer_info_profil($id_user) {
		
		$req = 'SELECT * FROM p_user WHERE id_user=?';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute(array($id_user));

		return $reqPrep->fetchall(PDO::FETCH_ASSOC);
	}
	

	//modif des droits si l'user est un admin sinon rien
	/*function modele_modif_user($id_user, $pseudo_user, $mail_user, $mdp_user) {
		$req = 'UPDATE p_user SET nom_user=?, prenom_user=?, pseudo_user=?, mail_user=? WHERE id_user=?';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute(array());

		return $reqPrep->fetchall(PDO::FETCH_ASSOC);
	}*/

	function modele_modif_mail($id_user, $mdp_user, $mail_user) {
		$req = 'SELECT mdp_user FROM p_user WHERE id_user=?';
		$reqPrep = self::$connexion->prepare($req);

		if (!reqPrep->execute(array($id_user))) {
			throw new ModeleProfilException("Erreur requete", 1);
			
		}
		$res = $reqPrep->fetch();
		
		if(password_verify($mdp_user, $res['mdp_user'])) {
			$req = 'UPDATE p_user SET mail_user=? WHERE id_user=?';
			$reqPrep = self::$connexion->prepare($req);

			if (!reqPrep->execute(array($mail_user, $id_user))) {
				throw new ModeleProfilException("Erreur requete", 1);
			}
		}
	}


	function modele_modif_mdp($id, $mdp) {
		
		$crypt = $this->mdpCrypt($mdp, $_SESSION['pseudo_user']);
		$req = 'UPDATE p_user SET mdp_user=? WHERE id_user=?';
		$reqPrep = self::$connexion->prepare($req);
		$reqPrep->execute(array($crypt,$id));
	}



	function modele_suppr_profil ($id) {

		$req = 'DELETE FROM p_user WHERE id_user=?';

		$reqPrep = self::$connexion->prepare($req);
		$reqPrep->execute(array($id_user));
		return $reqPrep->fetchall(PDO::FETCH_ASSOC);

	}
}

?>