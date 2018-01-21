<?php


class ConnexionControleur extends ControleurGenerique {

	public function __construct() {
		$this->vue = new ConnexionVue();
	}

	public function affiche() {

		if(!isset($_SESSION['id_user']) || $_SESSION['id_user'] == '') {
			$this->vue->vue_connexion();
		
		} else {
			$this->vue->vue_deconnexion();
		}

	}
}


?>