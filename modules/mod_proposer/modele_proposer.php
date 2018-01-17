<?php 
require_once ('include/modele_generique.php');

class ModeleProposer extends ModeleGenerique {

	function modele_proposer($titre_recette, $description_recette, $niv_difficulte_recette, $cout_recette, $is_vegetarien, $photo_recette, $nbPersonne_recette, $tpsPreparation_recette, $tpsCuisson_recette, $id_cat){
		//13
		$req = 'INSERT INTO p_recette (titre_recette, description_recette, niv_difficulte_recette, cout_recette, is_vegetarien, nbNotes_recette, photo_recette, nbPersonne_recette, id_ingredient, recette_publie, tpsPreparation_recette, tpsCuisson_recette, id_cat) VALUES (?, ?, ?, ?, ?, 0, ?, ?, 0, 0, ?, ?, ?);';

		$prepare=self::$connexion->prepare($req);

		$result=$prepare->execute(array($titre_recette, $description_recette, $niv_difficulte_recette, $cout_recette, $is_vegetarien,$photo_recette, $nbPersonne_recette, $tpsPreparation_recette, $tpsCuisson_recette, $id_cat));


		}
	}

/*
INSERT INTO p_recette (titre_recette, description_recette, niv_difficulte_recette, cout_recette, is_vegetarien, nbNotes_recette, photo_recette, nbPersonne_recette, notesTotal_recette, recette_publie, tpsPreparation_recette, tpsCuisson_recette, id_cat) VALUES ('test', 'test', 1, 1, 1, 0,'test', 1, 0, 0, 1, 1, 1); */
?>
