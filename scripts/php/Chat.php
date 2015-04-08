<?php
	require('../../includes/database/connect.db.php');
	require('../../includes/functions/chat.func.php');
	
	$messages = get_msg();
			foreach($messages as $message) {
				echo '<strong>'.$message['sender'].' :-</strong>';// this is how the sender name appears in the message display section
				echo $message['message'].'<br /><br />';//this is how the message send by above sender appears in message display section
			}
	

?>