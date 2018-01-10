<?php


class VueGestionUser extends VueGenerique {

	function __construct() {
		parent::__construct();
	}


	function vue_form_ajout_user() {

		?>
		<div class="container">

	      <form class="form-signin"  action = "index.php?module=gestionUser&action=form_ajout_user" method="POST">
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
				<label for="combobox">Statut : </label><!--mettre msg d'info pour demander si la modif veut ^etre validé -->
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


	function vue_modif_user() {
	?>

		<form method="POST" action="index.php?module=gestionUser&action=modif_profil">
			
			<input type="hidden" name="">Nouveau mail : 

<<<<<<< HEAD
		</form>
		<?php
=======
		</form><?php
>>>>>>> 99c9dab429ccf51174277de56cd927fd7605482f
	}

	
	//barre de recherche en ajax pour voir si le user saisie est dans la BD
	function vue_liste_user($users) {
	
	?>
		<div class="row">
	
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="images/profil.jpg" alt="photo de profil" width="200" height="184.5">

		      <div class="caption">
		        
		        	<div class="table table-responsive">
		        		<table class="table-vertical">
		        			<thead>
		        				<tr>
		        				<th>Pseudo</th>
		        				<th>Nom</th>
		        				<th>Prénom</th>
		        				</tr>	
		        			</thead>-->



							<!--faire un foreach qui recupere les données -->
							<?php foreach($users as $user) {
								//var_dump($users);?>
		        			
		        			<tbody>
		        				<tr>
		        					<td><?php echo htmlspecialchars($user['pseudo_user']);?></td>
			        				<td><?php echo htmlspecialchars($user['prenom_user']);?></td>
			        				<td><?php echo htmlspecialchars($user['nom_user']);?></td>
		        				</tr>
		        			</tbody>
		        			
		        		</table>
		        		
		        	</div>


		        <p><a id="btnmodif" href="index.php?module=gestionUser&action=profil". class="btn btn-default" role="button"> Voir plus </a></p>

		        <p><a id="btnmodif" href="index.php?module=gestionUser&action=modif_profil". class="btn btn-default" role="button"> Modifier </a></p>

		        <p><a id="btnsupp" href="index.php?module=gestionUser&action=suppr_profil" class="btn btn-danger" role="button">Supprimer</a></p>
		      </div>

		    </div>
		  </div>
		  
		</div>
<<<<<<< HEAD
=======

		<?php } 
>>>>>>> 99c9dab429ccf51174277de56cd927fd7605482f

		<?php } 


<<<<<<< HEAD
=======
	function vue_consulter_profil($info) {
		?>

		
              <!--<header class="page-header">-->
                  <div class="container clr page-header-inner">
                      <h1 class="page-header-title">
                          <?php echo htmlspecialchars($info['nom_user']) ?> 
                      </h1>

                  </div>
              <!--</header>-->

              <div class ="page">
                <table class="table table-striped">
                        <thead>
                                <tr>    
                                    <td><strong>NOM</strong></td>
                                    <td><?php echo htmlspecialchars($info['nom_user']);?></td>
                                </tr>
                        </thead>
                        <tbody>
                                <tr>    
                                    <td><strong>Prénom</strong></td>
                                    <td><?php echo htmlspecialchars($info['prenom_user']);?></td>
                                </tr>
                                <tr>    
                                    <td><strong>E-mail</strong></td>
                                    <td><?php echo htmlspecialchars($info['mail_user']);?></td>
                                </tr>
                                <tr>    
                                    <td><strong>Pseudo</strong></td>
                                    <td><?php echo htmlspecialchars($info['pseudo_user']);?></td>
                                </tr>
                    			<!--voir si mettre le mdp ou pas-->
                        </tbody>
                </table>                      

              </div>
              <?php	 				
     				echo "<form class='btnn' action='index.php?module=gestionUser&action=suppr_profil&id=". htmlspecialchars($info[0]['id_user'])."'method='POST'>"  ?>
      
       <input class="btn btn-danger" type="submit" value="Désactiver"/>
                      
          

		<?php
>>>>>>> 99c9dab429ccf51174277de56cd927fd7605482f
	}


}

?>
