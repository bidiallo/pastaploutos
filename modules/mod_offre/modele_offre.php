<?php
require_once('include/modele_generique.php');

class ModeleOffre extends ModeleGenerique{

	function modele_offre(){
		$req = 'SELECT * FROM p_recette where recette_publie = 0;';

		$reqPrep = self::$connexion->prepare($req);
		
		$reqPrep->execute();

		$enregistrement = $reqPrep->fetchall(PDO::FETCH_ASSOC);

		return $enregistrement;
	}

	function modele_recuperer_info_offre($idOffre) {

		$req = 'SELECT id_recette, titre_recette, nbPersonne_recette, niv_difficulte_recette, cout_recette, is_vegetarien, tpsPreparation_recette, tpsCuisson_recette, photo_recette, description_recette FROM p_recette WHERE id_recette=?;';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute(array($idOffre));

		$enregistrement = $reqPrep->fetchall(PDO::FETCH_ASSOC);

		return $enregistrement;
	}

	function modele_valider_offre(){
		
		$req = 'UPDATE p_recette SET recette_publie = 1 WHERE id_recette=?;';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute(array($idOffre));

		$enregistrement = $reqPrep->fetchall(PDO::FETCH_ASSOC);

		return $enregistrement;


	}
	function modele_supprimer_offre($idOffre){

		$req = 'DELETE  FROM p_recette WHERE id_recette=?;';

		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute(array($idOffre));

		$enregistrement = $reqPrep->fetchall(PDO::FETCH_ASSOC);

		return $enregistrement;
	}

}
?>