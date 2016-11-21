
// handle the form submit event
function prepareEventHandlers() {
	document.getElementById("signnn").onsubmit = function() {
		// prevent a form from submitting if no email.
		if (document.getElementById("email").value == "")
		{
			document.getElementById("mess3").innerHTML = "Please provide an email address!";
			return false;
		}
		else if (document.getElementById("username").value == "") {
			document.getElementById("mess1").innerHTML = "Please provide a username ";
			// to STOP the form from submitting
			return false;
		}
		else if (document.getElementById("password").value == "")
		{
			document.getElementById("mess2").innerHTML = "Please give your password!";
			return false;
		}
		
		else if (document.getElementById("password_con").value != document.getElementById("password").value)
		{
			document.getElementById("mess4").innerHTML = "Password dont mach!";
			return false;
		}
		 else {
			// reset and allow the form to submit
			document.getElementById("mess1").innerHTML = "";
			return true;
		}
	};
}

// when the document loads
window.onload =  function() {
	prepareEventHandlers();
}
