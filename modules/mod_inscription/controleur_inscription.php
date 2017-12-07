
<?php
require_once('modele_inscription.php');
require_once('vue_inscription.php');
//require_once('../../include/modele_generique.php');
require_once('include/controleur_generique.php');


class ControleurInscription extends ControleurGenerique {

	function __construct() {
		$this->vue=new VueInscription();
		$this->model=new ModeleInscription();
	}

	function form_inscription() {
		$this->vue->vue_form_inscription();
	}


	function getModel(){
		return $this->model;
	}


}


?>