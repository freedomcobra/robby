

//Form jQuery
$(document).ready(function() {

	$('#button-blue').click(function () {
		var name = $('#name').val();
		
		var email = $('#email').val();
		
		var comment = $('#comment').val();
	})
});


// Form Validation JS

function validate() {
	var x = document.forms["form"]["name"].value;
	var y = document.forms["form"]["email"].value;
	var z = document.forms["form"]["text"].value;
	if (x == null || x == "") {
		alert("Name must be filled out, yo.");
		return false;
	}
	else if (y == null || y == "") {
		alert("Please type your Email address so I can get back to you.");
		return false;
	}
	else if (z == null || z == "") {
		alert("Please write a comment that tells me about yourself.");
		return false;
	}
}