$(document).ready(function() {

	$('#pass2').keyup(function() {

		var password = $('#password').val();
		var password2 = $('#password2').val();

		if ( password == password2 ) {
			$('#error2').css("background", "url(check.png)");
		} else {
			$('#error2').css("background", "url(check-.png)");
		}

	});

});