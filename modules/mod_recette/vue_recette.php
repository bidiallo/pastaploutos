<?php
require_once('include/vue_generique.php');

class VueRecette extends VueGenerique {
   
  function __construct(){
    parent::__construct();
  }
  function vue_liste_recette($recettes) {
  
  ?>
    <div class="row">
      <!--faire un foreach qui recupere les données -->
        <?php foreach($recettes as $recette) {
                ?>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="images/patesBolo.jpg" alt="photo de recette" width="150" height="135.5">

          <div class="caption">
            
              <div class="table table-responsive">

              
                <table class="table-vertical">
                  <thead>
                    <tr>
                    <th>Recette</th>
                    </tr> 
                  </thead>



                  
                  <tbody>
                    <tr>
                      <td><?php echo htmlspecialchars($recette['nom_recette']);?></td>
                    </tr>
                  </tbody>
                  
                </table>
                
              </div>
              <p><a id="btnmodif" href="index.php?module=recette&action=recette". class="btn btn-default" role="button"> Voir plus </a></p>

          </div>

        </div>
      </div>
      
    <?php } ?>
    </div>


    <?php 
  } 
   

  function vue_consulter_recette($info) {
    ?>

    
              <!--<header class="page-header">-->
                  <div class="container clr page-header-inner">
                      <h1 class="page-header-title">
                          <?php echo htmlspecialchars($info['nom_recette']) ?> 
                      </h1>

                  </div>
              <!--</header>-->

              <div class ="page">
                <table class="table table-striped">
                        <thead>
                                <tr>    
                                    <td><strong>NOM</strong></td>
                                    <td><?php echo htmlspecialchars($info['nom_recette']);
                                    //FINIR ICI?></td>
                                </tr>
                        </thead>
                        <tbody>
                                <tr>    
                                    <td><strong>Prénom</strong></td>
                                    <td><?php echo htmlspecialchars($info['prenom_user']);?></td>
                                </tr>
                                <tr>    
                                    <td><strong>E-mail</strong></td>
                                    <td><?php echo htmlspecialchars($info['mail_user']);?></td>
                                </tr>
                                <tr>    
                                    <td><strong>Pseudo</strong></td>
                                    <td><?php echo htmlspecialchars($info['pseudo_user']);?></td>
                                </tr>
                        
                        </tbody>
                </table>                      

              </div>
              <?php         
            echo "<form class='btnn' action='index.php?module=gestionUser&action=suppr_profil&id=". htmlspecialchars($info['id_user'])."'method='POST'>"  ?>
      
       <input class="btn btn-danger" type="submit" value="Désactiver"/>
                       
       <?php
  }


}