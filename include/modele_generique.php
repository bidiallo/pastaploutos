<?php
class ModeleGenerique{
	private static $dns = "mysql:http://localhost:8080/phpmyadmin/db_structure.php?server=1&db=campao;dbname=campao; charset=utf8";
	private static $user= "root";
	private static $password= " ";
	protected static $connexion; 

	 static function init(){
		self::$connexion=new PDO(self::$dns, self::$user, self::$password);
	}

}

?>