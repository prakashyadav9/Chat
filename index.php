<?php

	require('includes/core.inc.php');

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Chat</title>
		<link type="text/css" rel="stylesheet" href="public/css/main.css" />
		<!-- Javascript -->
		<script>
			 function searchKeyPress(e){
    		// look for window.event in case event isn't passed in
        		if (typeof e == 'undefined' && window.event) { e = window.event; }
       			if(e.which === 13 && e.shiftKey===false)
       			{
       				e.preventDefault();
					console.log(e);
					//alert("Key pressed Enter");
					$('#form_input').submit();
					
       			}
				if(e.shiftKey===true && e.which === 13)
       			{
       				//e.preventDefault();
					console.log(e);
       				//alert("Key pressed Enter + Shift");

       			}
				function displayMsg(){
					
				}
       			
       		}	
		</script>
		<!--end of javascript-->
	</head>
	<body>
		<div class ="chat">
			<form action="" method="post" id="form_input" >
				<input type ="text" class="chat-name" placeholder="Enter your name" name="sender" id="sender"/>

				<div class ="chat-messages" id ="messages">
					<div class="chat-message">

					</div>
				</div>
				<textarea class ="chat-textarea" placeholder="type your message" name="message" id="message" onkeypress="searchKeyPress(event);"></textarea>
				<!--<input type="submit" name="send" id="send" value="Send"/>-->
				<div id="feedback">
					<p>l1</p>
				</div>
				
				<!--<div class ="chat-status"><span>Idle</span></div>-->
			</form>
		</div>
		<!--Javascript-->
		<script type="text/javascript" src="scripts/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="scripts/js/auto_chat.js"></script>
		<script type="text/javascript" src="scripts/js/send.js"></script>
	</body>
</html>