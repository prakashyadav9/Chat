<?php
    // Function that will display the chats done and will also get the recent chats.
	function get_msg() {
		
		$query = "SELECT `Sender`, `Message` FROM `chat`.`chat` ORDER BY `Msg_ID` DESC";//DESC FOR Message in decremented order ASC forascending
		
		$run = mysql_query($query);
		
		$messages = array();
		
		while($message = mysql_fetch_assoc($run)) {
			$messages[] = array('sender'=>$message['Sender'],
								'message'=>$message['Message']);
		}
		
		return $messages;
		
	}
	//This function is to make the chat message entry into the database
	//if the chat message is empty and sender name is empty then no extra space will be occupied
	function send_msg($sender, $message) {
		
		if(!empty($sender) && !empty($message)) {
			
			$sender 	= mysql_real_escape_string($sender);
			$message 	= mysql_real_escape_string($message);
			
			$query = "INSERT INTO `chat`.`chat` VALUES (null, '{$sender}', '$message')";
			
			if($run = mysql_query($query)) {
				return true;
			} else {
				return false;
			}
			
		} else {
			return false;
		}
	}
?>
