<?php

require_once('include/vue_generique.php');

class VueConnexion extends VueGenerique {

	function __construct(){
		parent::__construct();
	}

	function vue_form_connexion(/*mettre le token en param*/) {
		?> 
		<form action = "index.php?module=connexion&action=form_connexion" method="POST">

			Pseudo : <input id="pseudo" type="text" name="pseudo"/><br/>
			<!--Adresse e-mail: <input id="email" type="email" name="email"><br/>-->
			Mot de passe : <input id="mdp" type="password" name="motdepasse"/><br/>
			<input type="submit" value="Connexion"/>

		</form><?php
	}
}


?>