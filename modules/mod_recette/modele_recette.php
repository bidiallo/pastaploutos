<?php
require_once('include/modele_generique.php');

class ModeleRecette extends ModeleGenerique{
	function modele_recette(){
		//requete pour tout les users

		$req = 'SELECT * FROM p_recette ;';
		$prepare=self::$connexion->prepare($req);
		$result=$prepare->execute();
		$enregistrement = $reqPrep->fetchall(PDO::FETCH_ASSOC);

		return $enregistrement;
	}

	function modele_recuperer_info_recette($id_recette) {
		
		$req = 'SELECT * FROM p_recette WHERE id_recette=?';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute(array($id_recette));

		return $reqPrep->fetchall(PDO::FETCH_ASSOC);
	}

}
?>