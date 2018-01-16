<?php require_once('modele_generique.php'); ?>


	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
      
            <li><a href="index.php?module=recettes&action=liste_recette">Recettes</a></li>
            <li><a href="#contact">Idées & Astuces</a></li>
            <li><a href="#contact">Choisis tes ingrédients</a></li>

            <?php

                if(!isset($_SESSION['id_user'])) {
                  ?>
                  <li><a href="index.php?module=connexion&action=form_connexion">Connexion</a></li>

                  <?php

                }
              ?>
          </ul>
          
        </div>
      </div>
    </nav>