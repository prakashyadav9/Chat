<?php

	$db_host = 'localhost';//ip address of particular database server where database is going to reside
	$db_user = 'root'; //user name of the database
	$db_pass = '';//password to access the database
	
	$db_name = 'chat'; //databse name
	
	//Stablish a connection to the database
	//feedback variable is not necessary replace feedback with echo to check if the script is running properly
	if($connection = mysql_connect($db_host, $db_user, $db_pass)) {
	
		$feedback[] = 'Connected to Database Server...<br />';
	
		if($database = mysql_select_db($db_name, $connection)) {
			$feedback[] = 'Database has been selected...<br />';
		} else {
			$feedback[] = 'Database was not found.<br />';
		}	
	} else {
		$feedback[] = 'Unable to connect to MYSQL server.<br />';
	}	
	

?>