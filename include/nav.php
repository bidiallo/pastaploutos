<?php require_once('modele_generique.php'); ?>


	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            
            <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
            
          </button>
          <a class="navbar-brand" href="#">PastaPloutos</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class ="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="index.php?module=recettes&action=liste_recette">Recettes<span class="caret"></span></a>

            </li>
            <li><a href="index.php?module=recettes&action=liste_recette">Recettes</a></li>
            <li><a href="#contact">Idées & Astuces</a></li>
            <li><a href="#contact">Choisis tes ingrédients</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <!--<li><a href="../navbar/">Default</a></li>-->
            <li><a href="index.php?module=inscription&action=form_inscription"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>
            <li class="active"><a href="index.php?module=connexion&action=form_connexion"><span class="glyphicon glyphicon-log-in"></span> Connexion <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>