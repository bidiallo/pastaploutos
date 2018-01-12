<?php
require_once('include/vue_generique.php');

class VueRecette extends VueGenerique {
   
  function __construct(){
    parent::__construct();
  }


  function vue_liste_recette($recettes) {
 // var_dump($recettes);
  ?>
    <div class="row">
      <!--faire un foreach qui recupere les données -->
        <?php  foreach($recettes as $recette) {
         // var_dump($recette['photo_recette']);
         ?>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src=<?php echo htmlspecialchars($recette['photo_recette']);?> alt="photo de recette" width="150" height="135.5">

          <div class="caption">
            
              <div class="table table-responsive">

              
                <table class="table-vertical">
                  <thead>
                    <tr>
                    <td><strong><?php echo htmlspecialchars($recette['titre_recette']);?></strong></td>
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
              <p><a id="btnvoir" href="index.php?module=recette&action=voir_recette". class="btn btn-default" role="button"> Voir plus </a></p>

          </div>

        </div>
      </div>
       
  <?php } ?> 
    </div>


 <?php  }
  
   

  function vue_consulter_recette($info) {
    ?>

    
              <!--<header class="page-header">-->
                  <div class="container clr page-header-inner">
                      <h1 class="page-header-title">
                          <?php echo htmlspecialchars($info['titre_recette']) ?> 
                      </h1>

                  </div>
              <!--</header>-->

              <div class ="page">
                <table class="table table-striped">
                        <thead>
                                <tr>    
                                    <td><strong>Titre</strong></td>
                                    <td><?php echo htmlspecialchars($info['titre_recette']);
                                    //FINIR ICI?></td>
                                </tr>
                        </thead>
                        <tbody>                              
                                <tr>    
                                    <td><strong>Nombre de personne</strong></td>
                                    <td><?php echo htmlspecialchars($info['nbPersonne_recette']);?></td>
                                </tr>
                                <tr>    
                                    <td><strong>Niveau de difficulte</strong></td>
                                    <td><?php echo htmlspecialchars($info['difficulte_recette']);?></td>
                                </tr>
                                <tr>    
                                    <td><strong>Cout de la recette</strong></td>
                                    <td><?php echo htmlspecialchars($info['cout_recette']);?></td>
                                </tr>
                                <tr>    
                                    <td><strong>Description</strong></td>
                                    <td><?php echo htmlspecialchars($info['description_recette']);?></td>
                                </tr>
                        
                        
                        </tbody>
                </table>                      

              </div>
              
                       
       <?php
  }
}

?>


