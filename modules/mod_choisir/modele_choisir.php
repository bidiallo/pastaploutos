
<?php
class ModeleChoisir extends ModeleGenerique {



	function modele_recuperer_info_recette($idingredient) {


		$req = 'SELECT  titre_recette, nom_ingredient FROM p_recette 
				INNER JOIN p_ingredient USING (id_ingredient) 
				WHERE id_ingredient=? LIKE '%".$id_ingredient."%' ORDER BY titre_recette';


		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute(array($idingredient));

		return $reqPrep->fetchall(PDO::FETCH_ASSOC);
	}


}

?>