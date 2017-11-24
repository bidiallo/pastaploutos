<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		 <link rel="stylesheet" href="/include/bootstrap-3.3.7/dist/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="/include/bootstrap-3.3.7/dist/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="/include/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>


		<title><?php echo $module->getControleur()->getVue->getTitre();?></title>
	</head>
	<body>

	<?php echo $module->getControleur()->getVue()->getContenu()?>


	<!--footer-->
		<footer>
			
			<div class="row">
			  <div class="col-xs-6 col-sm-4">
			  	<p> PastaPloutos est un site vouzs permettant de trouver n'importe quel recette à base de pate en passant par la traditionnelle recette des pates à la bolognaise et allant jusqu'à vous présenter les recettes les plus originales du moment.</p>
			  	
			  </div>

			  <div class="col-xs-6 col-sm-4">Informations pratiques</div>

			  <!-- Optional: clear the XS cols if their content doesn't match in height -->
			  <div class="clearfix visible-xs-block"></div>

			  <div class="col-xs-6 col-sm-4">
			  	<ul>
			  		<li><a href="#">Les origines du site</a></li>
			  		<li><a href="#">Contact</a></li>
			  		<li><a href="#">Mentions Légales</a></li>
			  	</ul>
			  </div>
			</div>

		</footer>

	</body>
</html>