<?php
require_once('include/vue_generique.php');

class VueOffre extends VueGenerique {
   
  function __construct(){
    parent::__construct();
  }


  function vue_liste_offre($offres) { ?>
    <div class="row">
      <!--faire un foreach qui recupere les données -->
        <?php  foreach($offres as $offre) { ?>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src=<?php echo htmlspecialchars($offre['photo_recette']);?> alt="photo de recette" width="400" height="525">

          <div class="caption">
            
              <div class="table table-responsive">

              
                <table class="table-vertical">
                  <thead>
                    <tr>
                    <td><strong><?php echo htmlspecialchars($offre['titre_recette']);?></strong></td>
                    </tr> 
                  </thead>



                 <tbody>
                    <tr>
                      
                      <td>Nombre de Personnes :<?php echo htmlspecialchars($offre['nbPersonne_recette']);?></td>
                      <td>Temps de préparation :<?php echo htmlspecialchars($offre['tpsPreparation_recette']);?></td>
                      <td>Temps de cuisson :<?php echo htmlspecialchars($offre['tpsCuisson_recette']);?></td>
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
  
   

  function vue_consulter_offre($info) {
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
                                    <p><a id="btnvoir" href="index.php?module=offre&action=ajouter_offre&id_recette=<?php echo $element['id_recette'];?>". class="btn btn-default" role="button"> Valider </a></p>
                                </div>
                                </div>
                                    <p><a id="btnvoir" href="index.php?module=offre&action=consulter_offre&id_recette=<?php echo $element['id_recette'];?>". class="btn btn-default" role="button"> Effacer </a></p>
                                </div>
                        </tbody>
                </table>                      

              </div>
              
                       
       <?php
  }
}

}

?>


