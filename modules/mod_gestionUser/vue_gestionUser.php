<?php


class VueGestionUser extends VueGenerique {

	function __construct() {
		parent::__construct();
	}


	function vue_form_ajout_user() {

		?>
		<div class="container" action = "index.php?module=gestionUser&action=form_ajout_user" method="POST">

	      <form class="form-signin">
	        <h2 class="form-signin-heading">Ajouter un utilisateur</h2>


	         <div>
		        <label for="inputNom" class="sr-only">Nom</label>
		        <input type="text" name="nom" class="form-control" placeholder="Nom" required autofocus>
		    </div>

		    <div>
		        <label for="inputPrenom" class="sr-only">Prénom</label>
		        <input type="text" name="prenom" class="form-control" placeholder="Prénom" required autofocus>
		    </div>

	        <div>
		        <label for="inputPseudo" class="sr-only">Pseudo</label>
		        <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required autofocus>
		    </div>

		   

		    <div>
		        <label for="inputEmail" class="sr-only">Adresse mail</label>
        		<input type="email" name="mail" class="form-control" placeholder="Adresse mail" required autofocus>
		    </div>

		    <div>
		        <label for="inputPassword" class="sr-only">Mot de passe</label>
		        <input type="password" name="mdp" class="form-control" placeholder="Mot de passe" required autofocus>
		    </div>


		    <div class="select-style">
				<label for="combobox">Statut : </label>
				<select >
					<option>Admin</option>
					<option>User</option>
				</select>
				<input type="submit" name="admin" value="1"/>		    	
		    </div>
		    
		    <input type="hidden" name="admin">
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Ajouter</button>
	      </form>

	    </div> <!-- /container -->

	    <?php
	}



	//barre de recherche en ajax pour voir si le user saisie est dans la BD
	function vue_liste_user($users) {
		?>

		<div class="row">
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="..." alt="...">
		      
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
		      </div>

		    </div>
		  </div>
		</div>



	}


}


?>