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
    	<link href="modules/mod_<?php echo "$module"?>/<?php echo "$module"?>.css" rel="stylesheet" type="text/css">

		<!-- Latest compiled and minified CSS -->
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!--<title><?php /*echo $classe_module->getControleur()->getVue->getTitre();*/?></title>-->
		<title>PastaPloutos</title>
	</head>


	


	<body>

		<?php
						
			//require_once('composants/nav/nav.php');
			require_once('nav.php');
			//require_once('composants/connexion/connexion.php');
			//$sidenav = new Nav();

			//verifier la session isset si user est connecté
			if(isset($_SESSION['id_user'])) {
				?>

				<div class="sidenav" id="mySidenav">
					<!--<ul class="nav navbar-nav navbar-left">-->
					<!--mettre des logos pour chacune des pages-->
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					
					<?php
						require_once('composants/nav/nav.php');
						require_once('composants/connexion/connexion.php');
						$sidenav = new Nav();
					?>
				</div>


				<div id="main">
					<h2>Sidenav example</h2>
					<p>Open the side navigation</p>
					<span style="font-size: 30px;cursor: pointer;" onclick="openNav()">&#9776; open</span>
				</div>

				<?php
			}
				
			?>

		<section>
		<?php //var_dump($classe_module);
	 			echo $classe_module->getControleur()->getVue()->getContenu();?>
	 			
	 			</section>

	 </body>

	 
	<!--footer-->
		<footer class="footer" style= "margin-left: 15%; margin-top: 45%;">
			<div class="container">
				<div class="row">
				  <div class="col-xs-6 col-sm-4">
				  	<p class="text-muted"> PastaPloutos est un site vous permettant de trouver n'importe quel recette à base de pate en passant par la traditionnelle recette des pates à la bolognaise et allant jusqu'à vous présenter les recettes les plus originales du moment.</p>
				  	
				  </div>

				  <div class="col-xs-6 col-sm-4">
				  		<h5 class="text-muted">
				  		Informations pratiques
				  		</h2>
				  		<p>blablablablablabla</p>
				  </div>

				  <!-- Optional: clear the XS cols if their content doesn't match in height -->
				  <div class="clearfix visible-xs-block"></div>

				  <div class="col-xs-6 col-sm-4">
				  	<ul class="text-muted">
				  		<li><a href="#">Les origines du site</a></li>
				  		<li><a href="#">Contact</a></li>
				  		<li><a href="#">Mentions Légales</a></li>
				  	</ul>
				  </div>
				</div>
			</div>
		</footer>


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    	<!-- Latest compiled and minified JavaScript -->
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="/include/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>


    	<script type="text/javascript">
    		
    		function openNav() {
    			document.getElementById("mySidenav").style.width = "250px";
    			document.getElementById("main").style.marginLeft = "250px";
    		}


    		function closeNav() {
    			document.getElementById("mySidenav").style.width = "0";
    			document.getElementById("main").style.marginLeft = "0";
    		}
    	</script>
	
</html>