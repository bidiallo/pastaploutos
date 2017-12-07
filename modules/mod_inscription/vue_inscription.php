<?php

require_once('../../include/vue_generique.php');

class VueInscription extends VueGenerique{
	 
	function __construct(){
		parent::__construct();
	}
	function vue_form_inscription(/*askip token*/){
		?> 
		
		<div class="container" action = "index.php?module=inscription&action=form_inscription" method="POST">

	      <form class="form-signin">
	        <h2 class="form-signin-heading">Inscription</h2>


	         <div>
		        <label for="inputNom" class="sr-only">Nom</label>
		        <input type="password" id="inputPassword" class="form-control" placeholder="Nom" required>
		    </div>

		    <div>
		        <label for="inputPrenom" class="sr-only">Prénom</label>
		        <input type="password" id="inputPassword" class="form-control" placeholder="Prénom" required>
		    </div>

	        <div>
		        <label for="inputPseudo" class="sr-only">Pseudo</label>
		        <input type="text" id="pseudo" class="form-control" placeholder="Pseudo" required autofocus>
		    </div>

		   

		    <div>
		        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
		    </div>

		    <div>
		        <label for="inputPassword" class="sr-only">Mot de passe</label>
		        <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
		    </div>

		     <div>
		        <label for="inputPassword" class="sr-only">Confirmation mot de passe</label>
		        <input type="password" id="inputPassword" class="form-control" placeholder="Confirmation" required>
		    </div>
		    
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Inscription</button>
	      </form>

	    </div> <!-- /container -->

		<?php
	}
}

?>