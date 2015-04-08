<?php
	require('../../includes/database/connect.db.php');
	require('../../includes/functions/chat.func.php');
	//This file is to check if the sender , message field is empty or not if empty particular message will appear.
	//if the sender name and message are properly defined then the Message sent will be echoed each time the message is send.
	if(isset($_GET['sender'])&&!empty($_GET['sender'])) {
		//$sender = $_GET['sender'];
		$sender = input($_GET['sender']);
		if(isset($_GET['message'])&&!empty($_GET['message'])) {
			//$message = $_GET['message'];
			$message = input($_GET['message']);
			//str_replace(array("\n", "\r"), '', $message = input($_GET['message']));
			if(send_msg($sender, $message)) {
				echo 'Message Sent';
			} else {
				echo 'Message wasn\'t sent';
			}
			
		} else {
			echo 'No Message was entered';
		}
		
	} else {
		echo 'No Name was entered.';
	}
	
	function input($input) {
		$input = trim($input);
		$input = stripslashes($input);
		$input = htmlspecialchars($input);
		return $input;
}

?>