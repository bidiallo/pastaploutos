<?php


class ControleurGestionUser extends VueGenerique {

	function __construct() {
		$this->modele = new ModeleGestionUser();
		$this->vue = new VueGestionUser();
	}

	
}


?>