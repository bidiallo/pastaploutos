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
	        <h1>Jumbotron heading</h1>
	        <p class="lead">Il neige. Commencez à préparer les fetes de fin d'année</p>
	        <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
      	</div>

		<div class="row">
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="..." alt="..." class="img-thumbnail">
		      <div class="caption">
		        <h3>Actu#1</h3>
		        <p>Retrouver toutes les recettes déjà disponible...</p>
		        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
		      </div>
		    </div>
		  </div>

		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="..." alt="..." class="img-thumbnail">
		      <div class="caption">
		        <h3>Actu#2</h3>
		        <p>.Decouvrez nos nouvelles recettes de pates !</p>
		        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
		      </div>
		    </div>
		  </div>

		   <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="..." alt="..." class="img-thumbnail">
		      <div class="caption">
		        <h3>Actu#3</h3>
		        <p>Sélectionne les ingrédients que tu possèdes déjà et trouve une recette adapté.</p>
		        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
		      </div>
		    </div>
		  </div>
		</div>

      <?php		
	}

}

?>