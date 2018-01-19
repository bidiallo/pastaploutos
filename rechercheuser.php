<?php

	$dns = "mysql:host=database-etudiants.iut.univ-paris8.fr;dbname=dutinfopw201618; charset=utf8";
	$user= "dutinfopw201618";
	$password= "hytytesa";

	$connexion = new PDO ($dns, $user, $password);

	$mot = preg_replace('/\s{2,}/', '', trim($_POST['mot']));
	$query = "SELECT * FROM p_user WHERE nom_user like ? or prenom_user like ?";
	$t = $connexion->prepare($query);
	$t->execute(array("$mot%", "$mot%"));

	$a = $t->fetchall(PDO::FETCH_ASSOC);

	foreach ($a as $r) {
		echo "<a href=index.php?module=gestionUser&action=consulter_profil&id=$r[id_user]>$r[prenom_user] $r[nom_user]<a/><br>";
	}

	?>