<?php


class VueGenerique{
	protected $contenu;
	protected $titre;

	function __construct(){
		$this->contenu = "";
		$this->titre = "";
		//ob_start();	//temporise les affichages
	}


	function tamponVersContenu(){
		$this-> contenu = $this -> contenu /*. ob_get_clean()*/;
	}

	function vue_erreur($msgerror){

		?><font color = "ff0000"><?php echo $msgerror; ?></font><?php	
	}

	function vue_confirmation($msgconfirm){

		?><font color = "008000"><?php echo $msgconfirm; ?></font><?php
	}
	
	function getTitre() {
		return $this->titre;
	}

	function getContenu() {
		return $this->contenu;
	}

}
?>