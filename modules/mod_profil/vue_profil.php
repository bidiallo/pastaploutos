<?php


class VueProfil extends VueGenerique {

	function __construct() {
		parent::__construct();
	}

	 

	


    function vue_consulter_profil_user($profil) {
    
    ?>

      <?php foreach ($profil as $element) { ?>
              
              <div class ="page">

                <div>
                    <div class="bandeau_perso" style="background: transparent url(images/pastas_jumb3.jpg) no-repeat scroll 0% 0%;  width: 100%; max-width: 1024px; height: 58px;">
                      <div class="bienvenue">
                        <div class="trait" style="border-color: #792026"></div>
                          <strong>Bienvenue <?php echo htmlspecialchars($element['prenom_user'])?></strong>
                        <div class="trait" style="border-color: #792026"></div>
                      </div>
                    </div>


                  <div class="contenu">
                    <ul class="params-list">
                      <li class="params-list-title">Mes infos personnelles</li>

                      <li class="params-list-pseudo">
                        <div class="params-title">Pseudo</div>
                        <div class="params"><?php echo htmlspecialchars($element['pseudo_user']);?></div>

                      </li>
                      <li class="params-list-mail">
                        <div class="params-title">E-mail</div>
                        <div class="params"><?php echo htmlspecialchars($element['mail_user']);?></div>
                      </li>


                      <li class="params-list-name">
                        <div class="params-title">Nom</div>
                        <div class="params"><?php echo htmlspecialchars($element['prenom_user']);?><?php echo htmlspecialchars($element['nom_user']);?></div>
                      </li>
                    </ul>
                  </div>     
          
                </div>
                
               
                  
        <a id="btnmodif" href="index.php?module=profil&action=form_modif_mdp&id_user=<?php echo $element['id_user'];?>" role="button"><img src="images/edit.png"> Modifier </a>
              
            </div>

            <?php }?>        
       <?php
  }


    function vue_form_modif_mdp() {
    ?>

      <form method="POST" action="index.php?module=profil&action=modif_profil">
        
        <label for="pwd">Ancien mot de passe :</label>
        <input type="password" name="password_old"><br/>

        <label for="pwd">Nouveau mot de passe :</label>
        <input type="password" name="password_new"><br/>

        <button type="submit" class="btn btn-default">Valider</button>
      </form>

      <?php
    }

}


