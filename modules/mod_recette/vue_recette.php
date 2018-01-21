<?php
require_once('include/vue_generique.php');

class VueRecette extends VueGenerique {
   
  function __construct(){
    parent::__construct();
  }


  function vue_liste_recette($recettes) {

  ?>
    <section class="img_overlay">
        
              <div class="circle">
                <h1><strong>Les Recettes</strong></h1>
              </div>

    </section>
<?php
    echo "
    <section>
      <form class='search-form'>
        <input type='text' name='search' id='search' placeholder='Que voulez-vous cuisiner ?'>
        <p id='r'></p>
      </form>
     </section>

    <script src='jquery-3.1.1.min.js'></script>
    <script>
      $('#search').on('input', function() {
        var recherche=$('#search').val();
        $.ajax({
          url : 'rechercherecette.php',
          data : 'mot='+recherche,
          type : 'POST',
          dataType : 'html',
          success : function (code_html) {
            console.log(code_html);
            $('#r').html(code_html);
          }
        });
      });
    </script>

    ";?>

    <section class="container">
      <div class="row">
       
          <?php  foreach($recettes as $recette) {
           
           ?>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img class="img-thumbnail" src=<?php echo htmlspecialchars($recette['photo_recette']);?> alt="photo de recette" width="400" height="525">

            <div class="caption">
              
                <div class="table table-responsive">

                
                  <table class="table-vertical">
                    <thead>
                      <tr>
                      <td><h3><strong><?php echo htmlspecialchars($recette['titre_recette']);?></strong></h3></td>
                      </tr> 
                    </thead>



                    <tbody>
                      <tr>
                        
                        <td><?php echo htmlspecialchars($recette['nbPersonne_recette']);?> personnes</td>
                        <td><?php echo htmlspecialchars($recette['tpsPreparation_recette']);?>min</td>
        
                      </tr>
                    </tbody>
                    
                  </table>
                  
                </div>

                <?php
                    /*echo "<p class='button'><a href='index.php?module=recette&action=consulter_recette&id_recette=".$recette['id_recette']. "'> Voir plus </p>";
                 */?>
                <p ><a href="index.php?module=recette&action=consulter_recette&id_recette=<?php echo $recette['id_recette'];?>". class="button" role="button">Voir</a></p>
                </div>

          </div>
        </div>
         
    <?php } ?> 
      </div>
    </section>

 <?php  }
  
   

  function vue_consulter_recette($info) {

    ?>

          <?php foreach ($info as $element) { ?>
              
                  <div class="container clr page-header-inner">
                      <h1 class="main-title">
                          <?php echo htmlspecialchars($element['titre_recette']) ?> 
                      </h1>

                      <img style="margin-left:300px"src=<?php echo htmlspecialchars($element['photo_recette']);?> alt="photo recette">                           


                  </div>
              <div class ="info">

                  <div class="info-quantity" style="margin-left:190px">
                    <span class="info-quantity-title">Personnes</span>
                    <span><?php echo htmlspecialchars($element['nbPersonne_recette']);?></span>
                  </div>

                  <div class="info-time">
                    <span class="info-time-title">Temps</span>
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

              <p><a class="button-favoris" id="btnvoir" href="index.php?module=recette&action=favoris_recette&id_recette=<?php echo $element['id_recette'];?>&is_favoris=<?php echo $element['is_favoris'];?>". role="button"><img src="./images/hearts.png"> Ajouter aux favoris </a></p>
                      

              </div>
              
                       
       <?php
  }
}
}

?>


