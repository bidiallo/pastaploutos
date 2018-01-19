<?php
require_once('include/modele_generique.php');

class ModeleIdees extends ModeleGenerique{

	function modele_idee(){
		$req = 'SELECT * FROM p_recette where id_cat=5 OR id_cat=6;';

		$reqPrep = self::$connexion->prepare($req);
		
		$reqPrep->execute();

		$enregistrement = $reqPrep->fetchall(PDO::FETCH_ASSOC);

		return $enregistrement;
	}

	function modele_recuperer_info_idee($idRecette) {
		
		$req = 'SELECT id_recette, titre_recette, nbPersonne_recette, niv_difficulte_recette, cout_recette, is_vegetarien, tpsPreparation_recette, tpsCuisson_recette, is_favoris, photo_recette, description_recette FROM p_recette WHERE id_recette=?;';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute(array($idRecette));

		$enregistrement = $reqPrep->fetchall(PDO::FETCH_ASSOC);

		return $enregistrement;
	}


}
?>