<?php


class ConnexionVue extends ComposantVueGenerique {

	function vue_connexion() {

		?>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="index.php?module=connexion">Connexion</a></li>
		</ul>
		<?php
	}


	function vue_deconnexion() {

		?>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="index.php?module=connexion&action=deconnexion">Deconnexion</a></li>
		</ul>
		<?php
	}
}


?>