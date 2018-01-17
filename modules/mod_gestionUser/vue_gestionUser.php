<?php


class VueGestionUser extends VueGenerique {

	function __construct() {
		parent::__construct();
	}


	
	//barre de recherche en ajax pour voir si le user saisie est dans la BD
	function vue_liste_user($users) {
	
	?>
		<div class="row">
			<!--faire un foreach qui recupere les données -->
				<?php foreach($users as $user) {
								//var_dump($users);?>
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="images/profil.jpg" alt="photo de profil" width="130" height="100.5">

		      <div class="caption">
		        
		        	<div class="table table-responsive">

							
		        		<table class="table-vertical">
		        			<thead>
		        				<tr>
		        				<th>Pseudo</th>
		        				<th>Nom</th>
		        				<th>Prénom</th>
		        				</tr>	
		        			</thead>



		        			
		        			<tbody>
		        				<tr>
		        					<td><?php echo htmlspecialchars($user['pseudo_user']);?></td>
			        				<td><?php echo htmlspecialchars($user['prenom_user']);?></td>
			        				<td><?php echo htmlspecialchars($user['nom_user']);?></td>
		        				</tr>
		        			</tbody>
		        			
		        		</table>
		        		
		        	</div>

		        	
		        <p><a id="btnmodif" href="index.php?module=gestionUser&action=consulter_profil&id_user=<?php echo $user['id_user'];?>" class="btn btn-default" role="button"> Voir plus </a></p>

		        <p><a id="btnmodif" href="index.php?module=gestionUser&action=form_modif_droit&id_user=<?php echo $user['id_user'];?>" class="btn btn-default" role="button"> Modifier </a></p>

		        <p><a id="btnsupp" href="index.php?module=gestionUser&action=suppr_profil&id_user=<?php echo $user['id_user'];?>" class="btn btn-danger" role="button">Supprimer</a></p>
		      </div>

		    </div>
		  </div>
		  
		<?php }	?>
		</div>


		<?php 
	} 
	 

	function vue_consulter_profil($profil) {
		var_dump($profil);
		?>

			<?php foreach ($profil as $element) { ?>
              
              <div>

	              <div class="container clr page-header-inner">
	                   	<h1 class="page-header-title"> Bonjour
	                        <?php echo htmlspecialchars($element['prenom_user']) ?> 
	                        :)
	                    </h1>

	              </div>

	              <div class ="page">
	            
	              	
	              
	                <table class="table table-striped">
	                        <thead>
	                                <tr>    
	                                    <td><strong>NOM</strong></td>
	                                    <td><?php echo htmlspecialchars($element['prenom_user']);?></td>
	                                </tr>
	                        </thead>
	                        <tbody>
	                                <tr>    
	                                    <td><strong>Prénom</strong></td>
	                                    <td><?php echo htmlspecialchars($element['nom_user']);
	                                    //var_dump($profil['prenom_user']);
	                                    ?></td>
	                                </tr>
	                                <tr>    
	                                    <td><strong>E-mail</strong></td>
	                                    <td><?php echo htmlspecialchars($element['mail_user']);?></td>
	                                </tr>
	                                <tr>    
	                                    <td><strong>Pseudo</strong></td>
	                                    <td><?php echo htmlspecialchars($element['pseudo_user']);?></td>
	                                </tr>
	                    		
	                        </tbody>
	                </table>                      
					
	              </div>
	              
	             
				<!--
	               	<div class="row">
					  <div class="col-sm-4">

					  </div>

					  <div class="col-sm-8">
					  	
					  </div>
					</div>--> 

					<!--NE MARCHE PAS QUAND ON EST SUR LE PROFIL D'UN USER-->
					
				<p><a id="btnmodif" href="index.php?module=gestionUser&action=form_modif_droit&id_user=<?php echo $element['id_user'];?>" class="btn btn-default" role="button"> Modifier </a></p>
	            
	            <p><a id="btnsupp" href="index.php?module=gestionUser&action=suppr_profil&id_user=<?php echo $element['id_user'];?>" class="btn btn-danger" role="button">Supprimer</a></p>

            </div>

            <?php }?>        
       <?php
	}


	function vue_form_modif_droit($id_user, $admin) {
		
	?>

		<form method="POST" action="index.php?module=gestionUser&action=modif_droit&id_user=<?php echo $id_user ?>">
			
			<div class="select-style">
				<label for="combobox">Statut : </label>

				<select name="droit">
					<option>--</option>
					<option value="1">Admin</option>
					<option value="0">User</option>
				</select>
				
				 
		    </div>

		    <button class="btn btn-default type="submit">Valider</button>
		</form>
		<?php
	}



}


