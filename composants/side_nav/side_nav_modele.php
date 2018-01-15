<?php



class SideNavModele extends ModeleGenerique {

	function verifAdmin($id) {
		$req= "SELECT * FROM p_user WHERE admin=1 AND id_user=?";
		$reqPrep = self::$connexion->prepare($req);
		$reqPrep->execute(array($id));

		if(!$enrg = $reqPrep->fetch()) {
			return false;
		}

		return $enrg;

	}
	
}

?>