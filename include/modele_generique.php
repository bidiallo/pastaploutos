<?php
class ModeleGenerique{
	private static $dns = "mysql:host=database-etudiants.iut.univ-paris8.fr;dbname=dutinfopw201618; charset=utf8";
	private static $user= "dutinfopw201618";
	private static $password= "hytytesa";
	protected static $connexion; 

	 static function init(){
		self::$connexion=new PDO(self::$dns, self::$user, self::$password);
		
	}

}

?>