<?php

class Database{
	
	private static $dbHost = 'localhost';
	private static $dbName = 'esolar07_babyshower';
	private static $dbUsername = 'esolar07_dbeddie';
	private static $dbUserPassword = 'kate3481';
	private static $db;
	
	public static function connection(){
		
		try{
			self::$db = new PDO("mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
			self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		} catch(Exception $e){
			echo $e->getMessage();
			die();
		}
		
		return self::$db;
	}
	
}


?>