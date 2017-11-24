<?php
ob_flush();

include_once('include/controleur_generique.php');
include_once('include/modele_generique.php');
include_once('include/module_generique.php');
include_once('include/vue_generique.php');
include_once('include/modele_generique_exception.php');


ModeleGenerique::init();


if(!session_start()) {
	echo 'impossible de recuperer la session';
}


$module = isset($_GET['module']) ? $_GET['module'] : "accueil";

switch ($module) {
	//case 'accueil':
	case 'connexion':
	/*
	case 'recettes':
	case 'compte':
	*/

		include_once ("modules/mod_$module/mod_$module.php");
		$nom_module = "Mod$module";
		$classe_module = new $nom_module();
		break;

	default:
		$classe_module = new ModuleGenerique();
}

$classe_module->getControleur()->getVue()->tamponVersContenu();

require_once("include/template.php");

?>