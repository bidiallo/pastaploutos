<?php


class VueProfil extends VueGenerique {

	function __construct() {
		parent::__construct();
	}

	 

	function vue_consulter_profil_user($profil) {
    //var_dump($profil);
    ?>

      <div class="row">
          <?php foreach ($profil as $element) { ?>
              
              <div class="container clr page-header-inner">
                    <h1 class="page-header-title"> Bonjour
                        <?php echo htmlspecialchars($element['prenom_user']) ?> 
                        :)
                    </h1>

              </div>

              <div class ="page">
            
                
              
                <table class="table table-striped">
                        <thead>
                                <tr>    
                                    <td><strong>NOM</strong></td>
                                    <td><?php echo htmlspecialchars($element['prenom_user']);?></td>
                                </tr>
                        </thead>
                        <tbody>
                                <tr>    
                                    <td><strong>Prénom</strong></td>
                                    <td><?php echo htmlspecialchars($element['nom_user']);
                                    //var_dump($profil['prenom_user']);
                                    ?></td>
                                </tr>
                                <tr>    
                                    <td><strong>E-mail</strong></td>
                                    <td><?php echo htmlspecialchars($element['mail_user']);?></td>
                                </tr>
                                <tr>    
                                    <td><strong>Pseudo</strong></td>
                                    <td><?php echo htmlspecialchars($element['pseudo_user']);?></td>
                                </tr>
                        
                        </tbody>
                </table>                      
        
              </div>
        
       <p><a id="btnmodif" href="index.php?module=profil&action=form_modif_mdp&id_user=<?php echo $element['id_user'];?>" class="btn btn-default" role="button"> Modifier </a></p>

       <?php }?>  

      </div> 

       <?php
  }


    function vue_form_modif_mdp() {
    ?>

      <form method="POST" action="index.php?module=profil&action=modif_profil">
        
        <label for="pwd">Ancien mot de passe :</label>
        <input type="password" name="password_old"><br/>

        <label for="pwd">Nouveau mot de passe :</label>
        <input type="password" name="password_new"><br/>

        <label for="pwd">Vérification : </label>
        <input type="password" name="password_new_verif"><br/>

        <button type="submit" class="btn btn-default">Valider</button>
      </form>

      <?php
    }

}


