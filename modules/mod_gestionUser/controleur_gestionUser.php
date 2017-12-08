<?php

require_once('modules/mod_gestionUser/modele_gestionUser.php');
require_once('modules/mod_gestionUser/vue_gestionUser.php');



class ControleurGestionUser extends ControleurGenerique {

	function __construct() {
		$this->modele = new ModeleGestionUser();
		$this->vue = new VueGestionUser();
	}



/*
	function erreur() {
            $this->vue->vue_erreur ("Erreur");
    }

    function confirm() {
    		$this->vue->vue_confirm("Valide!");
    }
*/

	function ajout_user() {

		/*
		if (!isset($_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['mail'], $_POST[''])) {
			# code...
		}
		*/

		if (!$this->modele->modele_ajout_user($_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['mail'], $_SESSION['admin'])) {
			
			$this->vue->vue_erreur("Ajout user impossible !!!");
		
		} else {
			$this->vue->vue_confirm("User ajouté.");
		}

	}


	function form_ajout_user() {

		if ($this->modele->admin($_SESSION['id_user'])) {

			$this->vue->vue_form_ajout_admin();
		
		} else {
			$this->vue->vue_form_ajout_user();
		}

	}

	function list_profil() {

		if ($this->modele->) {
			# code...
		}
	}
	
}


?>