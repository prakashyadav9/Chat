$('#form_input').submit(function() {
	//alert ("ok");
	var message = $('#message').val();
	var sender 	= $('#sender').val();
	
	$.ajax({
		url: 'scripts/php/Send.php',
		data: { sender: sender, message: message }, 
		success: function(data) {
			$('#feedback').html(data);
			
				$('#feedback').fadeIn('slow', function() {
					$('#feedback').fadeOut(600);
				});
				
			$('#message').val('');
			//$('#sender').val('');
			
		}
	});
	
	return false;
});