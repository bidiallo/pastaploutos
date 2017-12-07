<?php
//ob_flush();

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

	case 'cover':
		include_once("modules/mod_cover/mod_$module.php");
		$nom_module = "ModCover";
		$classe_module = new $nom_module();
		break;

	case 'accueil':
		
		include_once ("modules/mod_accueil/mod_$module.php");
		$nom_module = "ModAccueil";
		$classe_module = new $nom_module();
		break;
	
	case 'connexion':

		include_once ("modules/mod_connexion/mod_$module.php");
		$nom_module = "ModConnexion";
		$classe_module = new $nom_module();
		break;


	case 'inscription':

		include_once ("modules/mod_inscription/mod_$module.php");
		$nom_module = "ModInscription";
		$classe_module = new $nom_module();
		break;
	case 'accueil':
		
		include_once ("modules/mod_accueil/mod_$module.php");
		$nom_module = "modAccueil";
		$classe_module = new $nom_module();
		break;

	 default:

		$classe_module = new ModuleGenerique();
		header('Location: index.php?module=cover');

	$classe_module->getControleur()->getVue()->tamponVersContenu();
}

require_once("include/template.php");

?>