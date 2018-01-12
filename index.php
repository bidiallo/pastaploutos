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

//var_dump($_GET['module']); //affiche pour verifier si le module et l'action existe bien
//var_dump($_GET['action']); // si ils sont a null, redirige vers la cover ---> donc faux! :/

$module = isset($_GET['module']) ? $_GET['module'] : "cover";


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


	case 'deconnexion':

		session_destroy();
		header('Location:index.php?module=accueil');
		break;


	case 'inscription':

		include_once ("modules/mod_inscription/mod_$module.php");
		$nom_module = "ModInscription";
		$classe_module = new $nom_module();				

		break;


	case 'gestionUser':
		
		include_once ("modules/mod_gestionUser/mod_$module.php");
		$nom_module = "ModGestionUser";
		$classe_module = new $nom_module();

		break;


	case 'profil':

		include_once ("modules/mod_profil/mod_$module.php");
		$nom_module = "ModProfil";
		$classe_module = new $nom_module();

		break;


	case 'recette':

		include_once ("modules/mod_recette/mod_$module.php");
		$nom_module = "ModRecette";
		$classe_module = new $nom_module();

		break;

	case 'proposer':

		include_once ("modules/mod_proposer/mod_$module.php");
		$nom_module = "ModProposer";
		$classe_module = new $nom_module();

		break;


	 default:

		$classe_module = new ModuleGenerique();
		header('Location: index.php?module=cover');		

}
	$classe_module->getControleur()->getVue()->tamponVersContenu();

require_once("include/template.php");

?>