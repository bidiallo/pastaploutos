<?php

require_once('include/vue_generique.php');


class VueAccueil extends VueGenerique {

	function __construct() {
		parent:: __construct();
		$this->titre = "Accueil";
	}


	function afficheAccueil() {
		?>
		<div class="jumbotron">
	        <h1>Recettes pour les fetes !</h1>
	        <p class="lead">Il neige. Commencez à préparer les fetes de fin d'année</p>
	        <p><a class="btn btn-lg btn-success" href="#" role="button">En savoir plus...</a></p>
      	</div>

		<div class="row">
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="..." alt="..." class="img-thumbnail">
		      <div class="caption">
		        <h3>Recettes</h3>
		        <p>Retrouver toutes les recettes déjà disponible...</p>
		        <p><a href="index.php?module=recettes&action=liste_recette" class="btn btn-primary" role="button">Toutes les recettes</a></p>
		      </div>
		    </div>
		  </div>

		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="..." alt="..." class="img-thumbnail">
		      <div class="caption">
		        <h3>Idées & Astuces</h3>
		        <p>.Decouvrez nos nouvelles recettes de pates !</p>
		        <p><a href="#" class="btn btn-primary" role="button">En savoir plus...</a></p>
		      </div>
		    </div>
		  </div>

		   <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="..." alt="..." class="img-thumbnail">
		      <div class="caption">
		        <h3>Choisir ingrédients</h3>
		        <p>Sélectionne les ingrédients et trouve une recette adapté.</p>
		        <p><a href="#" class="btn btn-primary" role="button">Go cuisiner ! </a></p>
		      </div>
		    </div>
		  </div>
		</div>

      <?php		
	}

}

?>