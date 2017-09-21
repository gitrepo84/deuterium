<?php

/**
* Utility Class to Log Operations
* Just include this php file and make a static call to the log function to send the message
* The log write will take care of the rest
**/

class Logger{

	const LOG_FILE = "logs/Site_General_Errors.log";

	public static function writeLog($msg){
		ERROR_LOG($msg." | Date: ".date("Y-m-d H:i:s")."\n", 3, self::LOG_FILE);
	}

}


?>