<?php


class ModeleProfil extends ModeleGenerique {


	function modele_recuperer_info_profil($id_user) {
		
		$req = 'SELECT * FROM p_user WHERE id_user=?';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute(array($id_user));

		return $reqPrep->fetchall(PDO::FETCH_ASSOC);
	}
	


	function modele_modif_mdp($id_user, $mdp_old, $mdp_new) {
		
		$req = 'SELECT mdp_user FROM p_user WHERE id_user= ?';
		$reqPrep = self::$connexion->prepare($req);

		if (!$reqPrep->execute(array($id_user))) {
			throw new ModeleProfilException("Erreur requete", 1);
		}

		$res = $reqPrep->fetch();


		if(password_verify($mdp_old, $res['mdp_user'])) {
			$req = 'UPDATE p_user SET mdp_user=? WHERE id_user=?';
			$reqPrep = self::$connexion->prepare($req);

			if(!$reqPrep->execute(array($mdp_new, $id_user))) {
				throw new ModeleProfilException("Erreur requete", 1);
				
			}
		}
	}



	function modele_suppr_profil ($id) {

		$req = 'DELETE FROM p_user WHERE id_user=?';

		$reqPrep = self::$connexion->prepare($req);
		$reqPrep->execute(array($id_user));
		return $reqPrep->fetchall(PDO::FETCH_ASSOC);

	}
}

?>