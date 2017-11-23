<?php


//require_once()

class ModeleConnexion extends ModeleGenerique {
	
	function modele_authentification ($pseudo, $mdp) {

		try {
			$req = 'SELECT * FROM p_user WHERE mail_user = ?;';
			$prepare = self::$connexion->prepare($req);
			$prepare->execute (array($pseudo));

			$result = $prepare->fetch();

			if (password_verify($mdp, $result['mdp_user'])) {
				
				return $result['id_user'];

			} else {

				return NULL;
			}
		} catch(PDOException $ab) {
			throw new ModeleConnexionException();
		}
	}
}


?>