<?php

	$dns = "mysql:host=localhost;dbname=test; charset=utf8";
	$user= "pma";
	$password= "montreuil";

	$connexion = new PDO ($dns, $user, $password);

	$mot = preg_replace('/\s{2,}/', '', trim($_POST['mot']));
	$query = "SELECT * FROM p_user WHERE nom_user like ? or prenom_user like ?";
	$t = $connexion->prepare($query);
	$t->execute(array("$mot%", "$mot%"));

	$a = $t->fetchall(PDO::FETCH_ASSOC);

	if (isset($_POST['mot'])) {
		
		
		foreach ($a as $r) {
			var_dump($r['id_user']);
			echo "<a href=index.php?module=gestionUser&action=consulter_profil&id_user=$r[id_user]>$r[prenom_user] $r[nom_user]<a/><br>";
		}
	}

	?>