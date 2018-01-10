<?php
require_once('include/vue_generique.php');

class VueRecette extends VueGenerique{
   
  function __construct(){
    parent::__construct();
  }
  function vue_form_recette(){
    ?> 
    <div class="container" >

        <form class="form-signin" action ="index.php?module=recette&action=liste_recette" method="post">

          <h2 class="form-signin-heading">Liste des recettes !</h2>


        <div class="recette n1">
        <div class="image">
          <img src="" alt="">
        </div>
        <div class="text">
          <p>recette 1</p>

          </form>

      </div> <!-- /container -->

    <?php
  }
}

?>
