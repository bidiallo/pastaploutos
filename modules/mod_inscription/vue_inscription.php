<?php

require_once('include/vue_generique.php');

class VueInscription extends VueGenerique{
	 
	function __construct(){
		parent::__construct();
	}
	function vue_form_inscription(/*askip token*/){
		?> 
		
		<div class="container" action = "index.php?module=inscription&action=ajout_inscription" method="POST">

	      <form class="form-signin">
	        <h2 class="form-signin-heading">Inscription</h2>


	         <div>
		        <label for="inputNom" class="sr-only">Nom</label>
		        <input type="text" name="nom_user" id="inputNom" class="form-control" placeholder="Nom" required autofocus>
		    </div>

		    <div>
		        <label for="inputPrenom" class="sr-only">Prenom</label>
		        <input type="text" name="prenom_user" id="inputPrenom" class="form-control" placeholder="Prénom" required autofocus>
		    </div>

	        <div>
		        <label for="inputPseudo" class="sr-only">Pseudo</label>
		        <input type="text" name="pseudo_user" id="inputPseudo" class="form-control" placeholder="Pseudo" required autofocus>
		    </div>

		   

		    <div>
		        <label for="inputEmail" class="sr-only">Adresse mail</label>
        		<input type="email" name="email_user" id="inputEmail" class="form-control" placeholder="Adresse mail" required autofocus>
		    </div>

		    <div>
		        <label for="inputPassword" class="sr-only">Mot de passe</label>
		        <input type="password" name="mdp_user" id="inputPassword" class="form-control" placeholder="Mot de passe" required autofocus>
		    </div>

		     <div>
		        <label for="inputPassword" class="sr-only">Mot de passe</label>
		        <input type="password" name="mdp_user2" id="inputPassword" class="form-control" placeholder="Mot de passe" required autofocus>
		    </div>
		    
	        <button class="btn btn-lg btn-primary btn-block" type="submit">S'inscrire</button>
	      </form>

	    </div> <!-- /container -->

		<?php
	}
}

?>