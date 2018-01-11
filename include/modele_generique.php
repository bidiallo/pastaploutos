<?php
class ModeleGenerique{
	private static $dns = "mysql:host=database-etudiants.iut.univ-paris8.fr;dbname=dutinfopw201618; charset=utf8";
	private static $user= "dutinfopw201618";
	private static $password= "hytytesa";
	protected static $connexion; 

	 static function init(){
		self::$connexion=new PDO(self::$dns, self::$user, self::$password);
		
	}
/*
	function verifiAdmin($id_user) {

		$req = "SELECT admin FROM p_user WHERE id_user = 1";

		$reqPrep = self::$connexion->prepare($req);
		$reqPrep->execute(array($id_user));
		$enreg = $reqPrep->fetch();
		return $enreg[0];
	}*/

}

?>