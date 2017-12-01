<?php

require_once('include/vue_generique.php');

class VueConnexion extends VueGenerique {

	function __construct(){
		parent::__construct();
	}

	function vue_form_connexion(/*mettre le token en param*/) {
		?> 
		<!--
		<form action = "index.php?module=connexion&action=form_connexion" method="POST">

			Pseudo : <input id="pseudo" type="text" name="pseudo"/><br/>
			Mot de passe : <input id="mdp" type="password" name="motdepasse"/><br/>
			<input type="submit" value="Connexion"/>
		


		</form>
		-->

		<div class="container">

	      <form class="form-signin">
	        <h2 class="form-signin-heading">Connectez-vous</h2>

	        <div>
		        <label for="inputEmail" class="sr-only">Pseudo</label>
		        <input type="text" id="pseudo" class="form-control" placeholder="Pseudo" required autofocus>
		    </div>

		    <div>
		        <label for="inputPassword" class="sr-only">Mot de passe</label>
		        <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
		    </div>

		    
	        <div class="checkbox">
	          <label>
	            <input type="checkbox" value="remember-me"> Se souvenir de moi ?
	          </label>
	        </div>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
	      </form>

	    </div> <!-- /container -->

		<?php
	}
}


?>