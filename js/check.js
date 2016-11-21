
// handle the form submit event
function prepareEventHandlers() {
	document.getElementById("logiiin").onsubmit = function() {
		// prevent a form from submitting if no email.
		if (document.getElementById("username").value == "") {
			document.getElementById("mess1").innerHTML = "Please provide an email address!";
			// to STOP the form from submitting
			return false;
		}
		else if (document.getElementById("password").value == "")
		{
			document.getElementById("mess2").innerHTML = "Please give your password!";
			return false;
		}
		 else {
			// reset and allow the form to submit
			document.getElementById("mess1").innerHTML = "";
			return true;
		}
	};
	document.getElementById("pbp").onsubmit = function() {
		// prevent a form from submitting if no email.
		if (document.getElementById("tittle").value == "") {
			document.getElementById("mess1").innerHTML = "Please provide a tittle!";
			// to STOP the form from submitting
			return false;
		}
		else if (document.getElementById("file_upload").value == null)
		{
			document.getElementById("mess2").innerHTML = "Please give your tittle Image!";
			return false;
		}
		else if (document.getElementById("blog_de").value == "")
		{
			document.getElementById("mess2").innerHTML = "Please give details!";
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
