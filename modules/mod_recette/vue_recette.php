<?php
require_once('include/vue_generique.php');

class VueRecette extends VueGenerique {
   
  function __construct(){
    parent::__construct();
  }
  function vue_form_recette($recettes){
    ?> 
    <div class="row" >

        <div class="col-sm-6 col-md-4">
        <div class="thumbnail">

          <img src="images/patesBolo.jpg" alt="photo de la recette" width="200" height="184.5">

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


    <?php }
    }
    }
    ?> 

