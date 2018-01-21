<?php

require_once('include/vue_generique.php');

class VueGestionUser extends VueGenerique {

	function __construct() {
		parent::__construct();
	}

	function vue_recherche_user() {


		echo "

		<div class='input-group' id='pagerecherche'>
			 <form method='POST'>
			  <input type='text' class='form-control' id='search' placeholder='Saisir un utilisateur' aria-describedby='basic-addon1'>
			  <p id='r'></p>
			</form>
		</div>

		<script src='jquery-3.1.1.min.js'></script>
		<script>
			$('#search').on('input', function() {
				var recherche=$('#search').val();
				$.ajax({
					url : 'rechercheuser.php',
					data : 'mot='+recherche,
					type : 'POST',
					dataType : 'html',
					success : function (code_html) {
						console.log(code_html);
						$('#r').html(code_html);
					}
				});
			});
		</script>

		";

	}
	
	function vue_liste_user($users) {
		
		
			?>
		<div class="row">

				<?php foreach($users as $user) {
								?>
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img class="img-profil" src="images/profil.jpg" alt="photo de profil">

		      <div class="caption">
		        
		        	<div class="info">
		        		<div class="title">
		        			<h1><strong><?php echo htmlspecialchars($user['pseudo_user']);?></strong></h1>
		        		</div>
		        		<div class="info-plus"><?php echo htmlspecialchars($user['prenom_user']);?></div>
						<div class="info-plus"><?php echo htmlspecialchars($user['nom_user']);?></div>
					</div>
					<?php
						echo "<a class='button' href='index.php?module=gestionUser&action=consulter_profil&id_user=".$user['id_user']."'>Voir plus</a>";
					/*echo "<p class='button'><a href='index.php?module=recette&action=consulter_recette&id_recette=".$recette['id_recette']. "'> Voir plus </p>";*/

					?>
					

		        		<!--<a class="btn btn-default" role="button" id="btnmodif" href="index.php?module=gestionUser&action=consulter_profil&id_user=<?php echo $user['id_user'];?>">Voir plus</a>

		        		<a class="btn btn-default" role="button" id="btnmodif" href="index.php?module=gestionUser&action=form_modif_droit&id_user=<?php echo $user['id_user'];?>">Modifier</a>

		        		<a class="btn btn-default" role="button" id="btnsupp" href="index.php?module=gestionUser&action=suppr_profil&id_user=<?php echo $user['id_user'];?>">Supprimer</a>
		        		
		        
-->
		        	
		     </div>

		    </div>
		  </div>
		  
		<?php }	?>
		</div>


		<?php 
	} 
	 

	function vue_consulter_profil($profil) {
		
		?>

			<?php foreach ($profil as $element) { ?>
              
              <div class ="page">

	              <div>
	              		<div class="bandeau_perso">
	              			<div class="bienvenue">
	              				<div class="trait" style="border-color: #FFCA28"></div>
	              					<strong>Bienvenue <?php echo htmlspecialchars($element['prenom_user'])?></strong>
	              				<div class="trait" style="border-color: #FFCA28"></div>
	              			</div>
	              		</div>


	            		<div class="contenu">
	            			<ul class="params-list">
	            				<li class="params-list-title">Infos personnelles</li>

	            				<li class="params-list-pseudo">
	            					<div class="params-title">Pseudo</div>
	            					<div class="params"><?php echo htmlspecialchars($element['pseudo_user']);?></div>

	            				</li>
	            				<li class="params-list-mail">
	            					<div class="params-title">E-mail</div>
	            					<div class="params"><?php echo htmlspecialchars($element['mail_user']);?></div>
	            				</li>


	            				<li class="params-list-name">
	            					<div class="params-title">Nom</div>
	            					<div class="params"><?php echo htmlspecialchars($element['prenom_user']);?><?php echo htmlspecialchars($element['nom_user']);?></div>
	            				</li>
	            			</ul>
	            		</div>     
					
	              </div>
	              
	             
									
				<a id="btnmodif" href="index.php?module=gestionUser&action=form_modif_droit&id_user=<?php echo $element['id_user'];?>" role="button"><img src="images/edit.png"> Modifier </a>
	            
	           <a id="btnsupp" href="index.php?module=gestionUser&action=suppr_profil&id_user=<?php echo $element['id_user'];?>" role="button"><img src="images/close.png">Supprimer</a>

            </div>

            <?php }?>        
       <?php
	}


	function vue_form_modif_droit($id_user, $admin) {
		
	?>

		<form class="select-style" method="POST" action="index.php?module=gestionUser&action=modif_droit&id_user=<?php echo $id_user ?>">
			
			<div>
				<label for="combobox">Statut à changer: </label>

				<select name="droit">
					<option>--</option>
					<option value="1">Admin</option>
					<option value="0">User</option>
				</select>
				
				
		    </div>

		     <button class="btn btn-default" type="submit">Valider</button>
		</form>
		<?php
	}



}


