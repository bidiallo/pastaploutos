<?php
require_once('modele_ideesetastuces.php');
require_once('vue_ideesetastuces.php');
require_once('include/modele_generique.php');
require_once('include/controleur_generique.php');


class ControleurConnexion extends ControleurGenerique {

	function __construct() {
		$this->vue=new VueIdeesetastuces();
		$this->modele=new ModeleIdeesetastuces();
	}

	


}

?>