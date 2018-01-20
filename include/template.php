<?php
include_once('controleur_generique.php');
include_once('module_generique.php');


?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" type="text/css" href="template.css">
    	<link href="modules/mod_<?php echo "$module"?>/<?php echo "$module"?>.css" rel="stylesheet" type="text/css">

		<!-- Latest compiled and minified CSS -->
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!--<title><?php /*echo $classe_module->getControleur()->getVue->getTitre();*/?></title>-->
		<title>PastaPloutos</title>


	</head>

	<header>
		
		<?php

			require_once('composants/nav/nav.php');
			require_once('composants/connexion/connexion.php');
			$nav = new Nav();
		
		?>
	</header>

		
	


	<body>

		<section class="site-content">
		<?php 
	 			echo $classe_module->getControleur()->getVue()->getContenu();?>
	 			
	 	</section>

	 </body>

	 
	<!--footer-->
	<footer>
     <div class="container">
       <div class="row text-center">
       
                 <div class="col-md-6 col-sm-6 col-xs-12">
                  <ul class="list-inline">
                               
                               <li>
                                    <a href="https://www.facebook.com" class="icon-facebook" title="Facebook"><img src="images/facebook.png"></a>
                               </li>
                               
                               <li>
                                     <a href="http://instagram.com" class="icon-instagram" title="Instagram"><img src="images/instagram.png"></a> 
                               </li>
                              
                               <li>
                                    <a href="https://twitter.com" class="icon-twitter" title="Twitter"><img src="images/twitter.png"></a>
                               </li>
                              
                     </ul>
                   </div>
           
                 <div class="col-md-6 col-sm-6 col-xs-12">
                  <ul class="menu list-inline">
                             
                         <li>
                            <a href="index.php?module=accueil">Accueil</a>
                          </li>
                               
                          <li>
                             <a href="#">About</a>
                          </li>
                               
                          <li>
                            <a href="#">Blog</a>
                          </li>
                               
                          <li>
                             <a href="#">Gallery </a>
                          </li>
                               
                          <li>
                            <a href="#">Contact</a>
                         </li>
               
                 </ul>
               </div>
           
           
           </div> 
        </div>
    </footer>

    <div class="copyright">
     <div class="container">
       
         <div class="row text-center">
         	<p>Copyright © 2017 All rights reserved</p>
         </div>
         
 	   </div>
    </div>


		

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    	<!-- Latest compiled and minified JavaScript -->
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="/include/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>


	
</html>