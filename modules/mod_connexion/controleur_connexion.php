<?php

require_once('modules/mod_connexion/modele_connexion.php');
require_once('modules/mod_connexion/vue_connexion.php');


class ControleurConnexion extends ControleurGenerique {

	public function__construct() {
		$this->vue=new VueConnexion();
		$this->model=new ModeleConnexion();
	}

	public function controleur_initialiser() {
		$this->vue->vue_form_connexion();
	}
}

?>