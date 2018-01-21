<?php
require_once('include/modele_generique.php');

class ModeleRecette extends ModeleGenerique{

	function modele_recette(){
		$req = 'SELECT * FROM p_recette where recette_publie=1;';

		$reqPrep = self::$connexion->prepare($req);
		
		$reqPrep->execute();

		$enregistrement = $reqPrep->fetchall(PDO::FETCH_ASSOC);

		return $enregistrement;
	}

	function modele_recuperer_info_recette($idRecette) {
		
		$req = 'SELECT id_recette, titre_recette, nbPersonne_recette, niv_difficulte_recette, cout_recette, is_vegetarien, tpsPreparation_recette, tpsCuisson_recette, is_favoris, photo_recette, description_recette FROM p_recette WHERE id_recette=?;';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute(array($idRecette));

		$enregistrement = $reqPrep->fetchall(PDO::FETCH_ASSOC);

		return $enregistrement;
	}

	function modele_ajouter_favoris($idRecette){

		$req = 'UPDATE p_recette SET is_favoris = 1 WHERE id_recette=?;';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute(array($idRecette));

		$enregistrement = $reqPrep->fetchall(PDO::FETCH_ASSOC);

		return $enregistrement;
	}

}
?>