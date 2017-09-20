<?php

require_once('util/db/dbActions.php');
require_once('config/config.php');

//if(isset($_POST["email-input"]) && isset($_POST["contact-number-input"]) && isset($_POST["contact-name-input"]) && 
//	isset($_POST["package-select"])) {

//	$user_email = $_POST["email-input"];
//	$user_contact_no = $_POST["contact-number-input"];
//	$user_name = $_POST["contact-name-input"];
//	$user_package_select = $_POST["package-select"];

	$user_email = "xxx@gga";
	$user_contact_no = "81818";
	$user_name = "hahah";
	$user_package_select = "1";	

	$dbActionsObj = new dbActions($db);
	$dbActionsObj->dbInsertAPI(array("EMAIL"=>$user_email, "PHONE"=>$user_contact_no, "NAME"=>$user_name, "PACKAGE"=>$user_package_select, "PWD"=>"NULL", "CREATED_DATE"=>date("Y-m-d H:i:s"), "LAST_UPDATED_DATE"=>date("Y-m-d H:i:s")));

	echo "OK";

//}
	



?>