<?php
require_once('include/vue_generique.php');

class VueFavoris extends VueGenerique {
   
  function __construct(){
    parent::__construct();
  }


  function vue_liste_favoris($favoris) { ?>
    <div class="row">
      <!--faire un foreach qui recupere les données -->
        <?php  foreach($fav as $favoris) { ?>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src=<?php echo htmlspecialchars($fav['photo_recette']);?> alt="photo de recette" width="400" height="525">

          <div class="caption">
            
              <div class="table table-responsive">

              
                <table class="table-vertical">
                  <thead>
                    <tr>
                    <td><strong><?php echo htmlspecialchars($fav['titre_recette']);?></strong></td>
                    </tr> 
                  </thead>



                 <tbody>
                    <tr>
                      
                      <td>Nombre de Personnes :<?php echo htmlspecialchars($fav['nbPersonne_recette']);?></td>
                      <td>Temps de préparation :<?php echo htmlspecialchars($fav['tpsPreparation_recette']);?></td>
                      <td>Temps de cuisson :<?php echo htmlspecialchars($fav['tpsCuisson_recette']);?></td>
                    </tr>
                  </tbody>
                  
                </table>
                
              </div>
              <p><a id="btnvoir" href="index.php?module=offre&action=consulter_offre&id_recette=<?php echo $offre['id_recette'];?>". class="btn btn-default" role="button"> Voir plus </a></p>
          </div>

        </div>
      </div>
       
  <?php } ?> 
    </div>


 <?php  }
}
  
 

?>


