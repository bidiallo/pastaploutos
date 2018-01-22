<?php

require_once('include/modele_generique.php');

class ModeleConnexion extends ModeleGenerique {
	
	function modele_authentification ($pseudo, $mdp) {


			$req = 'SELECT * FROM p_user WHERE pseudo_user = ?';
			$prepare = self::$connexion->prepare($req);
			$prepare->execute (array($pseudo));
			$result = $prepare->fetch();
			var_dump($mdp);
			var_dump($result['mdp_user']);
			var_dump(password_verify($mdp, $result['mdp_user']));
			if( password_verify($mdp, $result['mdp_user'])) {

				return $result['id_user'];

			} else {
				return NULL;
			}
			
	}
}


?>