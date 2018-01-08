<?php



class NavVue extends VueGenerique {

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
					?><ul class="dropdown-menu">
					<li><a href="index.php?module=profil&action=voir_profil">Voir profil</a></li>
					<li><a href="index.php?module=profil&action=modifier_profil">Modifier profil</a></li>
					<li><a href="index.php?module=profil&action=bons_reduc">Bons de réduction</a></li>
					<li><a href="index.php?module=profil&action=code_a_saisir">Code à saisir</a></li>
					</ul></li><?php
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
	}

}

?>
