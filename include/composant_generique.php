<?php


class ComposantGenerique {

	protected $contenu;

	public function __construct() {
		
		$this->controleur= new ControleurGenerique();
	}


	public function getControleur() {
		return $this->controleur;
	}


}