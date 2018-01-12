<?php
require_once('include/modele_generique.php');

class ModeleRecette extends ModeleGenerique{

	function modele_recette(){
		$req = 'SELECT * FROM p_recette ;';

		$reqPrep = self::$connexion->prepare($req);
		
		$reqPrep->execute();
		
		$enregistrement = $reqPrep->fetchall(PDO::FETCH_ASSOC);

		return $enregistrement;
	}

	function modele_recuperer_info_recette($idRecette) {
		
		$req = 'SELECT * FROM p_recette WHERE id_recette=?';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute();

		$enregistrement = $reqPrep->fetchall(PDO::FETCH_ASSOC);

		return $enregistrement;
	}

}
?>