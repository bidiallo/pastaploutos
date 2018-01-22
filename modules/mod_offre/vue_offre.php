<?php
require_once('include/vue_generique.php');
class VueOffre extends VueGenerique {
   
    function __construct(){
      parent::__construct();
    }
    
    function vue_liste_offre($offres) { ?>

      <section class="img_overlay">
        
              <div class="circle">
                <h1><strong>Offres de Recettes</strong></h1>
              </div>

    </section>

    <section class="container">
        <div class="row">

          <?php  foreach($offres as $offre) { ?>
           <div class="col-sm-6 col-md-4">
           <div class="thumbnail">
              <img src=<?php echo htmlspecialchars($offre['photo_recette']);?> alt="photo de recette" width="400" height="525">
           
           <div class="caption">        
           <div class="table table-responsive">
          
             <table class="table-vertical">
               <thead>
                 <tr>
                   <td><h3><strong><?php echo htmlspecialchars($offre['titre_recette']);?></strong></h3></td>
                 </tr> 
               </thead>

               <tbody>
                    <tr>               
                     <td><?php echo htmlspecialchars($offre['nbPersonne_recette']);?> personnes</td>
                     <td><?php echo htmlspecialchars($offre['tpsPreparation_recette']);?> min</td>
                    </tr>
               </tbody>

                </table>             
                  </div>
                    <p><a id="btnvoir" href="index.php?module=offre&action=consulter_offre&id_recette=<?php echo $offre['id_recette'];?>". class="button" role="button"> Voir plus </a></p>
                  </div>

              </div>
              </div>
              <?php } ?> 
              </div>
            </section>
          <?php  }
  

    function vue_consulter_offre($info) { ?>


          <?php foreach ($info as $element) { ?>
          <div class="container clr page-header-inner">
                  <h1 class="main-title">
                          <?php echo htmlspecialchars($element['titre_recette']) ?> 
                  </h1>
                </div>

                <!--IMAGE A METTRE ABSOLUMENT-->

                <img style="margin-left:300px"src=<?php echo htmlspecialchars($element['photo_recette']);?> alt="photo recette">
                  

                
              <div class ="info">

                  <div class="info-quantity" style="margin-left:190px">
                    <span class="info-quantity-title">Personnes</span>
                    <span><?php echo htmlspecialchars($element['nbPersonne_recette']);?></span>
                  </div>

                  <div class="info-time">
                    <span class="info-time-title">Préparation</span>
                    <span><?php echo htmlspecialchars($element['tpsPreparation_recette']);?> min</span>
                  </div>

                  <div class="info-level">
                    <span class="info-level-title">Difficulté</span>
                    <span><?php echo htmlspecialchars($element['niv_difficulte_recette']);?></span>
                  </div>

                  <div class="info_budget" style="margin-left:100px">
                    <span class="info-budget-title">Coût</span>
                    <span><?php echo htmlspecialchars($element['cout_recette']);?></span>
                  </div>


              </div>


              <div class="contenu-recette">

                    <h1>Préparation</h1>

                    <p><strong><?php echo htmlspecialchars($element['description_recette']); ?></p>

               </div>
                          <p><a class="button-icons" id="btnvoir" href="index.php?module=offre&action=ajouter_offre&id_recette=<?php echo $element['id_recette'];?>". role="button"><img src="./images/add.png"> Valider </a></p>
                        </div>
                        </div>
                          <p><a class="button-icons" id="btnvoir" href="index.php?module=offre&action=supprimer_offre&id_recette=<?php echo $element['id_recette'];?>". role="button"><img src="./images/close.png"> Effacer </a></p>
                            </div>

                        </tbody>
                </table>                      
                </div>
                <?php
    }
  }
}

?>

