<?php

class Datebase{
	
	private $dbName = 'localhost';
	private $dbHost = 'esolar07_guest_list';
	private $dbUsername = 'esolar07_dbeddie';
	private $dbUserPassword = 'kate3481';
	private $db;
	
	public static function connection(){
		
		try{
			$this -> db = new PDO("mysql:host=$this->dbName;dbname=$this->dbname", $this->dbUsername, $this->dbUserPassword);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		} catch(Exception $e){
			echo $e->getMessage();
			die();
		}
				
	}
}


?>