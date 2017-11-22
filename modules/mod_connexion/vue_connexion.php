<?php

class VueConnexion extends VueGenerique {

	function __construct(){
		parent::__construct();
	}

	function vue_form_connexion(/*mettre le token en pram*/) {
		?> 
		<form action = "index.php?module=connexion&action=form_connexion" method="POST">

			<input>

			Pseudo : <input id="pseudo" type="text" name="pseudo"/><br/>
			<!--Adresse e-mail: <input id="email" type="email" name="email"><br/>-->
			Identifiant : <input id="identifiant" type="text" name="login"/><br/>
			Mot de passe : <input id="mdp" type="password" name="motdepasse"/><br/>
			<input type="submit" value="Connexion"/>

		</form>
	}
}


?>