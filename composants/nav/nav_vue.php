<?php

require_once "include/composant_vue_generique.php";

class NavVue extends ComposantVueGenerique {

	function affiche($nav) {

		?>

		<nav class="navbar-default">
			<div class="container-fluid">

				<div class="navbar-header">
					<a class="navbar-brand" href="index.php?module=accueil">
					<img src="/images/campao.png" width="130" height="30" style="margin-top: -5px;">
					</a>		
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
				<ul class="nav navbar-nav navbar-left">
				<!--mettre des logos pour chacune des pages-->
				<?php
				foreach ($nav as $lien => $nom) {
					switch ($lien) {


						case 'recettes':
						echo "\t\t\t<li><a href=\"index.php?module=" . $lien . "\"><span class=\"glyphicon glyphicon-plus\"></span>" ." ". $nom . "</a></li>";
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

						case 'profil':
						echo "\t\t\t<li><a href=\"index.php?module=" . $lien . "\">" . $nom . "</a>"; //<span class=\"caret\"></span> (avant </a>)
						
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