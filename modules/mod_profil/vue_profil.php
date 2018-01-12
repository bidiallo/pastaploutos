<?php


class VueProfil extends VueGenerique {

	function __construct() {
		parent::__construct();
	}




	function vue_modif_user() {
	?>

		<form method="POST" action="index.php?module=gestionUser&action=modif_profil">
			
			<input type="hidden" name="">Nouveau mail : >


		</form>
		<?php
	}

	
	 

	function vue_consulter_profil($info) {
		var_dump($info);
		?>

		
              <!--<header class="page-header">-->
                  <div class="container clr page-header-inner">
                      <h1 class="page-header-title">
                           <?php echo htmlspecialchars($info[0]['prenom_user']) ?> 
                      </h1>

                  </div>
              <!--</header>-->

              <div class ="page">
                <table class="table table-striped">
                        <thead>
                                <tr>    
                                    <td><strong>NOM</strong></td>
                                    <td><?php echo htmlspecialchars($info[0]['nom_user']);?></td>
                                </tr>
                        </thead>
                        <tbody>
                                <tr>    
                                    <td><strong>Prénom</strong></td>
                                    <td><?php echo htmlspecialchars($info[0]['prenom_user']);?></td>
                                </tr>
                                <tr>    
                                    <td><strong>E-mail</strong></td>
                                    <td><?php echo htmlspecialchars($info[0]['mail_user']);?></td>
                                </tr>
                                <tr>    
                                    <td><strong>Pseudo</strong></td>
                                    <td><?php echo htmlspecialchars($info[0]['pseudo_user']);?></td>
                                </tr>
                    		
                        </tbody>
                </table>                      

              </div>



               	<div class="row">
				  <div class="col-sm-4">

				  </div>

				  <div class="col-sm-8">
				  	
				  </div>
				</div> 
              <?php	 				
     				echo "<form class='btnn' action='index.php?module=gestionUser&action=suppr_profil&id=". htmlspecialchars($info[0]['id_user'])."'method='POST'>"  ?>
      
       <input class="btn btn-danger" type="submit" value="Désactiver"/>
                       
       <?php
	}


}


