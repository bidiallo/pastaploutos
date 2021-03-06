<?php

require_once('include/vue_generique.php');

class VueConnexion extends VueGenerique {

	function __construct(){
		parent::__construct();
	}

	function vue_form_connexion() {
		?>
		<div class="container" >

	      <form class="form-signin" action = "index.php?module=connexion&action=authentification" method="POST">
	        <h2 class="form-signin-heading">Connectez-vous</h2>

	        <div>
		        <label for="inputPseudo" class="sr-only">Pseudo</label>
		        <input type="text" id="pseudo" class="form-control" name="pseudo" placeholder="Pseudo" required autofocus>
		    </div>

		    <div>
		        <label for="inputPassword" class="sr-only">Mot de passe</label>
		        <input type="password" id="inputPassword" class="form-control" name="mdp" placeholder="Mot de passe" required>
		    </div>

		    
	        <button style="margin-top:25px; margin-left:50px" type="submit">Connexion</button>
	      </form>

	    </div> 

		<?php
	}
}


?>