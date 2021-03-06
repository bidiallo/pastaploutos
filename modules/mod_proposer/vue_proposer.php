<?php

require_once('include/vue_generique.php');

class VueProposer extends VueGenerique{
	 
	function __construct(){
		parent::__construct();
	}

	function vue_form_proposer(){
		?> 
		
		<div class="containe" >
	        <form class="form-signin" action ="index.php?module=proposer&action=ajout_proposer" method="post">
	       		<h2 class="form-signin-heading">Proposer une recette!</h2>
			        <div class="select-style">
				        <label for="inputTitre" class="sr-only">Titre</label>
				        <input type="text" name="titre_recette" id="inputNom" class="form-control" placeholder="Titre" required autofocus>
				    </div>
					<div class="select-style">
				        <label for="inputDescription" class="sr-only">Description</label>
				        <input type="text" name="description_recette" id="inputDescription" class="form-control" placeholder="Description" required autofocus>
				    </div>
				    <div class="select-style">
						<label for="combobox">Difficulté : </label>
						<select name="niv_difficulte_recette">
									<option value="1">Très Facile</option>
									<option value="2">Facile</option>
									<option value="3">Moyen</option>
									<option value="4">Difficile</option>
						</select>
				    </div>
			     	<div class="select-style">
						<label for="combobox">Cout : </label>
						<select name="cout_recette">
									<option value="1">Bon marché</option>
									<option value="2">Assez chère</option>
									<option value="3">Chère</option>
						</select>
					</div>
					<div class="select-style">
						<label for="combobox">Plat végétarien : </label>
						<select name="is_vegetarien">
									<option value="1">Oui</option>
									<option value="0">Non</option>
						</select>
					</div>
					<div class="select-style">
						<label for="combobox">Nombre de personne : </label>
						<select name="nbPersonne_recette">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="4">4</option>
									<option value="6">6</option>
									<option value="8">8 et +</option>
						</select>
					</div>
					<div class="select-style">
						<label for="inputTitre" class="sr-only">Ingredient</label>
						<input type="text" name="id_ingredient" id="id_ingredient" class="form-control" placeholder="Ingredient" required autofocus>
					</div>
					<div class="select-style">
						<label for="photo_recette">Sélectionner des images à uploader (PNG, JPG) :</label>
						<input type="file" name="photo_recette" accept=".jpg, .jpeg, .png" id="photo_recette" />
				    </div>
				    <div class="select-style">
					    <label for="inputTpsPreparation" class="sr-only">Temps de préparation</label>
					    <input type="text" name="tpsPreparation_recette" id="inputTpsPreparation" class="form-control" placeholder="Temps de préparation" required autofocus>
				    </div>
			        <div class="select-style">
				        <label for="inputTpsCuisson" class="sr-only">Temps de cuisson</label>
				        <input type="text" name="tpsCuisson_recette" id="inputTpsCuisson" class="form-control" placeholder="Temps de cuisson" required autofocus>
				    </div>
				    <div class="select-style">
				   		<label for="combobox">Type de plat: </label>
						<select name="id_cat">
									<option value="3">Apéritif</option>
									<option value="1">Entrée</option>
									<option value="2">Plat</option>
									<option value="4">Dessert</option>
						</select>
					</div>
					<div>
						<button class="button" type="submit">Envoyer</button>
					</div>			     			
				</form>
			</div> 

			<?php
		}
	}
?>
