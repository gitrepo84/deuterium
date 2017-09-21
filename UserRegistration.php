<?php
require_once('util/db/DBActions.php');
require_once('util/log/Logger.php');
require_once('config/config.php');


/**
 * This class processess all the User passed Input Variables and Registers the User.
 * 
 * @import config.php
 * @calls DBActions.php
 * @calls Logger.php 
 *
 **/

class UserRegistration{

	private $email;
	private $phone;
	private $name;
	private $package;
	private $db;

	/**
	 * @param object $db_conn_obj 'Database Connection Obect from config.php'
	**/ 
	public function __construct($db_conn_obj){

		// sets the db conn obj to be passed on further 
		$this->db = $db_conn_obj;

		// validates user passed input
		if(!empty($_POST["email-input"]) && 
		   !empty($_POST["contact-number-input"]) && 
		   !empty($_POST["contact-name-input"]) && 
		   !empty($_POST["package-select"])) {

			$this->email = $_POST["email-input"];
			$this->phone = $_POST["contact-number-input"];
			$this->name = $_POST["contact-name-input"];
			$this->package = $_POST["package-select"];
		}else{
			throw new Exception("At least One of the Input Params is Invalid.");
		}

	}


	/**
	* This is the function that calls databse insert api of DBActions class to register User.
	* Sends the table Column names and their corresponding values in the form of an associative array.
	* 
	* @calls DBActions.dbInsertAPI
	**/
	public function registerUser(){
		try{
			$dbactions_obj = new DBActions($this->db);
			$dbactions_obj->dbInsertAPI(array("EMAIL"=>$this->email,
											  "PHONE"=>$this->phone, 
											  "NAME"=>$this->name, 
											  "PACKAGE"=>$this->package, 
											  "PWD"=>"NULL", 
											  "CREATED_DATE"=>date("Y-m-d H:i:s"), 
											  "LAST_UPDATED_DATE"=>date("Y-m-d H:i:s")
											)
										);

			echo "OK";
		   }catch(Exception $e){
		   	echo "Error";
			Logger::writelog($e->getMessage());
		   }
	}

}


try{
	//instantiate UserRegistration class and pass the db con obj instance obtained from config.php to the constructor
	$user_reg = new UserRegistration($db);
	$user_reg->registerUser();
}catch(Exception $e){
	echo "Error";
	Logger::writelog($e->getMessage());
}
	

?>