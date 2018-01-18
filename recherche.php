<?php

	$dns = "mysql:host=database-etudiants.iut.univ-paris8.fr;dbname=dutinfopw201618; charset=utf8";
	$user= "dutinfopw201618";
	$password= "hytytesa";

	$connexion = new PDO ($dns, $user, $password);

	$mot = preg_replace('/\s{2,}/', '', trim($_POST['mot']));
	$query = "SELECT * FROM p_recette INNER JOIN p_ingredient USING (id_ingredient) WHERE nom_ingredient like ?";
	$t = $connexion->prepare($query);
	$t->execute(array("$mot%"));

	$a = $t->fetchall(PDO::FETCH_ASSOC);

	foreach ($a as $r) {
		echo "<a href=index.php?module=recette&action=consulter_recette&id=$r[id_ingredient]>$r[nom_ingredient]<a/><br>";
	}

	?>