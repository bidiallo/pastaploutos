<?php
require_once('include/vue_generique.php');

class VueIdees extends VueGenerique {
   
  function __construct(){
    parent::__construct();
  }


  function vue_liste_idee($recettes) {
 // var_dump($recettes);
  ?>
    <div class="row">
      <!--faire un foreach qui recupere les données -->
        <?php  foreach($recettes as $recette) {
         // var_dump($recette['photo_recette']);
         ?>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img class="img-thumbnail" src=<?php echo htmlspecialchars($recette['photo_recette']);?> alt="photo de recette" width="400" height="525">

          <div class="caption">
            
              <div class="table table-responsive">

              
                <table class="table-vertical">
                  <thead>
                    <tr>
                    <td><h3><?php echo htmlspecialchars($recette['titre_recette']);?></h3></td>
                    </tr> 
                  </thead>



                 <tbody>
                    <tr>
                      
                      <td>Nombre de Personnes :<?php echo htmlspecialchars($recette['nbPersonne_recette']);?></td>
                      <td>Temps de préparation :<?php echo htmlspecialchars($recette['tpsPreparation_recette']);?></td>
                      <td>Temps de cuisson :<?php echo htmlspecialchars($recette['tpsCuisson_recette']);?></td>
                    </tr>
                  </tbody>
                  
                </table>
                
              </div>
              <p><a id="btnvoir" href="index.php?module=idees&action=consulter_idee&id_recette=<?php echo $recette['id_recette'];?>". class="button" role="button"> Voir plus </a></p>
              </div>

        </div>
      </div>
       
  <?php } ?> 
    </div>


 <?php  }
  
   

  function vue_consulter_idee($info) {
   // var_dump($info);
    ?>

          <?php foreach ($info as $element) { ?>
              
                  <div class="container clr page-header-inner">
                      <h1 class="page-header-title">
                          <?php echo htmlspecialchars($element['titre_recette']) ?> 
                      </h1>

                  </div>
              <div class ="page">

                <table class="table table-striped">
                        <thead>

                        </thead>
                        <tbody>   
                                  <img src=<?php echo htmlspecialchars($element['photo_recette']);?> alt="photo recette" width="150" height="135.5">                           
                                <tr>    
                                    <th><strong>Nombre de personne: </strong> <?php echo htmlspecialchars($element['nbPersonne_recette']);?></th>

                                    <th><strong>Niveau de difficulte: </strong><?php echo htmlspecialchars($element['niv_difficulte_recette']);?></th>

                                    <th><strong>Cout de la recette: </strong><?php echo htmlspecialchars($element['cout_recette']);?></th>

                                    <th><strong>Preparation: </strong><?php echo htmlspecialchars($element['tpsPreparation_recette']);?><strong> min</strong></th>
                                   
                                    <th><strong>Cuisson: </strong><?php echo htmlspecialchars($element['tpsCuisson_recette']);?><strong> min</strong></th>

                                </tr>
                                <tr>
                                  <td><strong>Description: </strong><?php echo htmlspecialchars($element['description_recette']); ?></td>
                                </tr>
                                </div>

                        </tbody>
                </table>                      

              </div>
              
                       
       <?php
  }
}
}

?>


