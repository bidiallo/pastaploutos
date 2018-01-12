<?php 
require_once ('include/modele_generique.php');

class ModeleInscription extends ModeleGenerique {

	function modele_inscription($titre_recette, $description_recette, $niv_difficulte_recette, $cout_recette, $is_vegetarien, $nbPersonne_recette, $tpsPreparation_recette, $tpsCuisson_recette, $id_cat){
		//13
		$req = 'INSERT INTO p_recette ($titre_recette, $description_recette, $niv_difficulte_recette, $cout_recette, $is_vegetarien, $nbPersonne_recette, $tpsPreparation_recette, $tpsCuisson_recette, $id_cat) VALUES (?, ?, ?, ?, ?, 0,'test', ?, 0, 0, ?, ?, ?);';
		
		$prepare=self::$connexion->prepare($req);
		$result=$prepare->execute(array($nom_user,$prenom_user,$pseudo_user,$email_user, $mdp_user));

		}

/*
INSERT INTO p_recette (titre_recette, description_recette, niv_difficulte_recette, cout_recette, is_vegetarien, nbNotes_recette, photo_recette, nbPersonne_recette, notesTotal_recette, recette_publie, tpsPreparation_recette, tpsCuisson_recette, id_cat) VALUES ('test', 'test', 1, 1, 1, 0,'test', 1, 0, 0, 1, 1, 1); */