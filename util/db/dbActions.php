<?php

class dbActions{

	var $db;

	function __construct($db){
		$this->db = $db;
	}


	function dbInsertAPI($columnsAndvaluesArray){
		$loopCounter = 1;
		$column_Name_Placeholder = ""; //column_Name_Placeholder
		$column_Name_Concatenated = ""; //column_Name_Concatenated
		$column_Value_Placeholder = ""; //column_Value_Placeholder
		$column_Value_Concatenated = ""; //column_Value_Concatenated

		$inputArraySize = count($columnsAndvaluesArray);

		foreach($columnsAndvaluesArray as $columnName => $columnValue) {
//		    echo "Key=" . $columnName . ", Value=" . $columnValue;
		    
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
//	    echo $strkey1;
//	    echo "<br>";
//	    echo $strCol1;

	    $this->dbInsert($column_Name_Concatenated, $column_Value_Concatenated);
	}


	private function dbInsert($column_Name_Concatenated, $column_Value_Concatenated){
		try{
			$stmt = $this->db->prepare("INSERT INTO deut_USER_REGISTRATION_INFO (".$column_Name_Concatenated.") VALUES (".$column_Value_Concatenated.")");
			$stmt->execute();
//			echo "OK";
		}catch(PDOException $e){
			echo "Error: " . $e->getMessage();	
		}
	}

}


/*$user_email = "xxx@xxx.com";
$user_contact_no = "717171";
$user_name = "ahjhas";
$user_package_select = "1";

$colValArr1 = array("EMAIL"=>$user_email, "PHONE"=>$user_contact_no, "NAME"=>$user_name, "PACKAGE"=>$user_package_select);

$obj = new dbActions($db);
$obj->t1($colValArr1);*/


?>