<?php
class ModeleGenerique{
	private static $dns = "mysql:host=database-etudiants.iut.univ-paris8.fr;dbname=dutinfopw20164; charset=utf8";
	private static $user= "dutinfopw20164";
	private static $password= "rytutyta";
	protected static $connexion; 

	 static function init(){
		self::$connexion=new PDO(self::$dns, self::$user, self::$password);
	}

}

?>