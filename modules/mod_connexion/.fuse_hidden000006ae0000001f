<?php

require_once('include/modele_generique.php');

class ModeleConnexion extends ModeleGenerique {
	
	function modele_authentification ($pseudo, $mdp) {


			$req = 'SELECT * FROM p_user WHERE mail_user = ?;';
			$prepare = self::$connexion->prepare($req);
			$prepare->execute (array($pseudo));

			$result = $prepare->fetch();

			if (password_verify($mdp, $result['mdp_user'])) {
				
				return $result['id_user'];

			} else {

				return NULL;
			}
		
	}
}


?>