
<?php
class ModeleChoisir extends ModeleGenerique {

/*
Se sera un sorte de moteur de recherche, recherche par critère ou mots-clé

https://openclassrooms.com/courses/realiser-un-moteur-de-recherche-pour-son-site

http://www.tomshardware.fr/forum/id-1346383/formulaire-recherche-php.html
*/



	function modele_recuperer_info_recette($idingredient) {


		$req = 'SELECT titre_recette, nom_ingredient FROM p_recette 
				INNER JOIN p_ingredient USING (id_ingredient) 
				WHERE id_ingredient=? LIKE '%".$id_ingredient."%' ORDER BY titre_recette';


		$reqPrep = self::$connexion->prepare($req);

		$reqPrep->execute(array($idingredient));

		return $reqPrep->fetchall(PDO::FETCH_ASSOC);
	}



	//liste des recettes en fonction de l'ingrédient saisis
}

?>