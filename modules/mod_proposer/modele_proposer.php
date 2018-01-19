<?php 
require_once ('include/modele_generique.php');

class ModeleProposer extends ModeleGenerique {

	function modele_proposer($titre_recette, $description_recette, $niv_difficulte_recette, $cout_recette, $is_vegetarien, $photo_recette, $nbPersonne_recette,$id_ingredient, $tpsPreparation_recette, $tpsCuisson_recette, $id_cat){

		$req = 'INSERT INTO p_recette (titre_recette, description_recette, niv_difficulte_recette, cout_recette, is_vegetarien, is_favoris, photo_recette, nbPersonne_recette, id_ingredient, recette_publie, tpsPreparation_recette, tpsCuisson_recette, id_cat) VALUES (?, ?, ?, ?, ?, 0, ?, ?, ?, 0, ?, ?, ?);';

		$prepare=self::$connexion->prepare($req);

		$result=$prepare->execute(array($titre_recette, $description_recette, $niv_difficulte_recette, $cout_recette, $is_vegetarien,$photo_recette, $nbPersonne_recette,$id_ingredient, $tpsPreparation_recette, $tpsCuisson_recette, $id_cat));


		}
	}

?>
