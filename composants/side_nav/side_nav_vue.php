<?php

require_once "include/composant_vue_generique.php";

class SideNavVue extends ComposantVueGenerique {

	function vue_sidenav_admin() { 
	?>
		
		<div class="sidenav" id="mySidenav">
					<!--<ul class="nav navbar-nav navbar-left">-->
					<!--mettre des logos pour chacune des pages-->
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					
					<?php
					foreach ($sidenav as $lien => $nom) {
						switch ($lien) {


							/*case 'recette':
							echo "\t\t\t<li><a href=\"index.php?module=" . $lien . "\">" . $nom . "</a></li>";
							break;
							*/
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

				<div id="main">
					<h2>Sidenav example</h2>
					<p>Open the side navigation</p>
					<span style="font-size: 30px;cursor: pointer;" onclick="openNav()">&#9776; open</span>
				</div>

				<?php
	}




	function vue_sidenav_user() {
		

	}




	
				

}

?>