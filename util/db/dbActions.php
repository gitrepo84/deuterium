<?php
require_once('util/log/Logger.php');

/**
* Utility Class to perform CRUD operations
**/

class DBActions{

	var $db;

	function __construct($db){
		$this->db = $db;
	}

	/**
	* Function processes the Input Array, which consists of Table Col Names and their corresponding values.
	*
	* @param array $columnsAndvaluesArray 'This is the Input Associative Array'
	* 
	* This is how the processing happens:
	*	1. Fetch the Input Associative Array
	*	2. Find out the Size of the Input Array
	*	3. Process the array by separating the column names and their values
	*	4. Store all the column names in a separate concatenated string
	*	5. And store all column values in a another concatenated string
	*	6. Call dbInsert() function to do the actual db insert into the table
	**/
	public function dbInsertAPI($columnsAndvaluesArray){
		$loopCounter = 1;
		$column_Name_Placeholder = ""; 
		$column_Name_Concatenated = ""; 
		$column_Value_Placeholder = ""; 
		$column_Value_Concatenated = "";

		$inputArraySize = count($columnsAndvaluesArray);

		foreach($columnsAndvaluesArray as $columnName => $columnValue) {
		    if($loopCounter < $inputArraySize){
		    	$column_Name_Placeholder = $columnName.",";
		    	$column_Value_Placeholder = "'".$columnValue."'".",";
		    }else{
		    	$column_Name_Placeholder = $columnName;
		    	$column_Value_Placeholder = "'".$columnValue."'";	
		    }
		    $column_Name_Concatenated = $column_Name_Concatenated.$column_Name_Placeholder;
		    $column_Value_Concatenated = $column_Value_Concatenated.$column_Value_Placeholder;

		    $loopCounter++;
		}

	    $this->dbInsert($column_Name_Concatenated, $column_Value_Concatenated);
	}


	/**
	* @param string $column_Name_Concatenated 'Concatenated String of Table Column Names'
	* @param string $column_Value_Concatenated 'Concatenated String of Table Column Values'
	**/
	private function dbInsert($column_Name_Concatenated, $column_Value_Concatenated){
		try{
			$stmt = $this->db->prepare("INSERT INTO deut_USER_REGISTRATION_INFO (".$column_Name_Concatenated.") VALUES (".$column_Value_Concatenated.")");
			$stmt->execute();
		}catch(PDOException $e){
			echo "Error";	
			Logger::writelog($e->getMessage());
		}

	}

}

?>