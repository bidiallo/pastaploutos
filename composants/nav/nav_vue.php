<?php

require_once "include/composant_vue_generique.php";

class NavVue extends ComposantVueGenerique {

	function affiche($nav) {

		?>

		<nav class="navbar-default">
			<div class="container-fluid">

				<div class="navbar-header">
					<a class="navbar-brand" href="index.php?module=accueil">
					<img src="images/campao.png" width="150" height="50" style="margin-top: -5px;">
					</a>		
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
				<ul class="nav navbar-nav navbar-left">
				
				<?php
				foreach ($nav as $lien => $nom) {
					switch ($lien) {

						case 'recette':
						echo "\t\t\t<li><a class='dropdown-toggle' data-toggle='dropdown' role='button' href=\"index.php?module=" . $lien . "\">" . $nom . "</a></li>";
						break;
						

						case 'connexion':
						echo "\t\t\t<li><a href=\"index.php?module=" . $lien . "\"><span class=\"glyphicon glyphicon-log-in\"></span>" ." ". $nom . "</a></li>";
						break;

						case 'inscription':
						echo "\t\t\t<li><a href=\"index.php?module=" . $lien . "\"><span class=\"glyphicon glyphicon-plus\"></span>" ." ". $nom . "</a></li>";
						break;

						case 'deconnexion':
						echo "\t\t\t<li><a href=\"index.php?module=connexion&action=deconnexion\"><span class=\"glyphicon glyphicon-log-out\"></span>" ." ".$nom . "</a></li>";
						break;
						
						default:
						echo "\t\t\t<li><a href=\"index.php?module=" . $lien . "\">" . $nom . "</a></li>";
						break;
					}
				}
				?>
				</div>
			</div>
		</nav>
		<?php
	}

}

?>