<?php


	$dns = "mysql:host=localhost;dbname=test; charset=utf8";
	$user= "pma";
	$password= "montreuil";


	$connexion = new PDO ($dns, $user, $password);

	$mot = preg_replace('/\s{2,}/', '', trim($_POST['mot']));
	$query = "SELECT * FROM p_recette WHERE titre_recette like ?";
	$t = $connexion->prepare($query);
	$t->execute(array("$mot%"));

	$a = $t->fetchall(PDO::FETCH_ASSOC);

	

	if (isset($_POST['mot'])) {
		foreach ($a as $r) {
			
			echo "<a href=index.php?module=recette&action=consulter_recette&id_recette=$r[id_recette]>$r[titre_recette]<a/><br>";
		}
	}
	?>