<?php
require_once('include/modele_generique.php');

class ModeleFavoris extends ModeleGenerique{

	function modele_liste_favoris(){

		$req = 'SELECT * FROM p_recette where is_favoris = 1;';

		$reqPrep = self::$connexion->prepare($req);
		
		$reqPrep->execute();

		$enregistrement = $reqPrep->fetchall(PDO::FETCH_ASSOC);

		return $enregistrement;
	}
	//OKAI


	function modele_supprimer_favoris($idFavoris){
		
		$req = 'UPDATE p_recette SET is_favoris = 0 WHERE id_recette=?;';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute(array($idFavoris));

		$enregistrement = $reqPrep->fetchall(PDO::FETCH_ASSOC);

		return $enregistrement;


	}

}
?>