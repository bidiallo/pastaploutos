 <?php

require_once('modules/mod_gestionUser/modele_gestionUser.php');
require_once('modules/mod_gestionUser/vue_gestionUser.php');



class ControleurGestionUser extends ControleurGenerique {


	function __construct() {
		$this->modele = new ModeleGestionUser();
		$this->vue = new VueGestionUser();
	}




	//en train de tester juste pour les users
	function liste_profil() {

		//if($this->modele->$_SESSION['id_user']) {}
			
			$user = $this->modele->modele_get_liste_user();
			$this->vue->vue_liste_user($user);
		//}

	}

	function consulter_profil() {

		if(!isset($_SESSION['id_user']) || $_SESSION['id_user'] == "") {
			$this->vue->vue_erreur("Vous n'etes pas connecté.");
		}
		else {
			try{
				$element = $this->modele->modele_recuperer_info_user($_POST['id_user']);
				//var_dump($_POST['id_user']);
				$this->vue->vue_consulter_profil($element);
			} catch(Exception $e) {
				//$this->vue->vue_erreur("Erreur accès BDD");
			}
		}
	}


	function form_modif_droit() {
		//if($this->modele->verifiAdmin($_SESSION['id_user'])) {
			//var_dump($_POST['droit']);
			$admin = $this->modele->get_admin($_GET['id_user']);
			$this->vue->vue_form_modif_droit($_GET['id_user'], $admin);
		//}
	}


	function modif_droit() {
		


		if ($_POST['droit'] == "0" || $_POST['droit'] == "1") {
			if($_POST['droit'] == "0") {
				$droit = 0;
			}
			else if ($_POST['droit'] == "1") {
				$droit = 1;
			}


			if (!$this->modele->modele_modif_droit($_GET['id_user'], $droit)) {
				$this->vue->vue_erreur("Modification impossible");
				echo "pass";
			}
			else {
				$this->vue->vue_confirm('Droit changé');
			}
		}
		else {
			$this->vue->vue_erreur("Modification impossible");
			$droit = 0;
		}
	}


	

	function supprimer_profil() {
		//$id_user = htmlspecialchars($_GET['id_user']);
		$this->modele->modele_suppr_user( htmlspecialchars($_GET['id_user']));
		$this->vue->vue_confirm("Profil supprimé !");
		session_destroy();
		//header('Location:index.php?module=gestionUser&action=liste_profil');	
	}

}

?>