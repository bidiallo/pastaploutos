<?php
require_once('include/vue_generique.php');

class VueFavoris extends VueGenerique {
   
  function __construct(){
    parent::__construct();
  }


  function vue_liste_favoris($favoris) { 
    ?>
    <section class="img_overlay">
        
              <div class="circle">
                <h1><strong>Vos Favoris</strong></h1>
              </div>

    </section>

    <section class="container">
      <div class="row">
       
         <?php  foreach($favoris as $fav) { 
           
           ?>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src=<?php echo htmlspecialchars($fav['photo_recette']);?> alt="photo de recette" width="400" height="525">

            <div class="caption">
              
                <div class="table table-responsive">

                
                  <table class="table-vertical">
                    <thead>
                      <tr>
                      <td><h3><strong><?php echo htmlspecialchars($fav['titre_recette']);?></strong></h3></td>
                      </tr> 
                    </thead>



                    <tbody>
                      <tr>
                        
                        <td><?php echo htmlspecialchars($fav['nbPersonne_recette']);?> personnes</td>
                        <td><?php echo htmlspecialchars($fav['tpsPreparation_recette']);?>min</td>
        
                      </tr>
                    </tbody>
                    
                  </table>
                  
                </div>

                <?php
                    /*echo "<p class='button'><a href='index.php?module=recette&action=consulter_recette&id_recette=".$recette['id_recette']. "'> Voir plus </p>";
                 */?>
                <p ><a id="btnvoir" href="index.php?module=recette&action=consulter_recette&id_recette=<?php echo $fav['id_recette'];?>". class="button" role="button">Voir</a></p>
                </div>
                <p><a id="btnsuppr" href="index.php?module=favoris&action=supprimer_offre&id_recette=<?php echo $fav['id_recette'];?>".  role="button"><img src="images/close.png">
                </a></p>

          </div>
        </div>
         
    <?php } ?> 
      </div>
    </section>


 <?php  }

}
  
 

?>


