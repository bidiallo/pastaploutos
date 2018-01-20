<?php

require_once('include/vue_generique.php');


class VueAccueil extends VueGenerique {

	function __construct() {
		parent:: __construct();
		$this->titre = "Accueil";
	}


	function afficheAccueil() {
		?>
		<section class="jumbotron">
			<div class="container">
					<div class="row text-center">
				        <h1>Recettes pour les fetes !</h1>
				        <p class="lead">Il neige. Commencez à préparer les fetes de fin d'année</p>
				        <p><a  class="button-jumb" href="ideesastuces" role="button">En savoir plus...</a></p>
      		</div>
      	</section>

      	<section class="container">

			<div class="row">
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="images/pates.jpg" alt="photo recette" class="img-thumbnail">
			      <div class="caption">
			        <h3>Recettes</h3>
			        <p>Retrouver toutes les recettes déjà disponibles...</p>
			        <p><a class="button" href="index.php?module=recette&action=liste_recette" role="button">Recettes</a></p>
			      </div>
			    </div>
			  </div>

			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="images/2018.jpg" alt="..." class="img-thumbnail">
			      <div class="caption">
			        <h3>Idées & Astuces</h3>
			        <p>Decouvrez nos nouvelles recettes de pates !</p>
			        <p><a href="index.php?module=ideesetastuces&action=liste_ideesetastuces" class="button" role="button">En savoir plus...</a></p>
			      </div>
			    </div>
			  </div>

			   <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			    	<!--photo 500x625-->
			      <img src="images/ingredients2.jpg" alt="..." class="img-thumbnail">
			      <div class="caption">
			        <h3>Choisir ingrédients</h3>
			        <p>Trouve une recette en sélectionnant un ingrédient.</p>
			        <p><a href="index.php?module=choisir&action=form_choisir" class="button" role="button">Go cuisiner ! </a></p>
			      </div>
			    </div>
			  </div>
			</div>
	 	</section>

      <?php		
	}

}

?>