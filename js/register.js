var error;

$(document).ready(function(e) 
{
    
	signupForm();
	loginForm();
	
});

// register form ajax


function signupForm()
{
	
		
	
		// variable to hold request
		var request;
		// bind to the submit event of our form
		$("#signup").submit(function(event){
		// show loading bar until the json is recieved
		validation();
		
    	// abort any pending request
		if (request) {
			request.abort();
		}
		// setup some local variables
		var $form = $(this);
		// let's select and cache all the fields
		var $inputs = $form.find("input, select, button, textarea");
		// serialize the data in the form
		var serializedData = $form.serialize();
		
		
		// let's disable the inputs for the duration of the ajax request
		// Note: we disable elements AFTER the form data has been serialized.
		// Disabled form elements will not be serialized.
		
			
		if(error.length==0)
		{
			$('#loading').html("<img src='img/loading.gif'>");
			 $inputs.prop("disabled", true);
		// fire off the request to /form.php
			request = $.ajax({
				url: "http://www.fajjemobile.info/korkster.com/signup_form.php",
				type: "post",
				data: serializedData
			});
			
				// callback handler that will be called on success
			request.done(function (response, textStatus, jqXHR){
				// log a message to the console
				
				console.log("Hooray, it worked!");
				$('#loading').html('');
				
				if(response=="success")
				{
					$('#loading').html('You have been REGISTERED successfully!  A Verificaiton Link has been Emailed to you!');
				}
				else if(response == "username already exist")
				{
					$('#loading').html('Username already in use! Select a different username!');
					
				}
				else
				{
					$('#loading').html('Sorry, There has been an error in our system! We are working on it. Thank You for your patience. ' + response);
				}
				
				//window.location.href = "your-questions.html";
			});
		
			// callback handler that will be called on failure
			request.fail(function (jqXHR, textStatus, errorThrown){
				// log the error to the console
				$('#loading').html('');
				alert('Request Failed!');
				console.error(
					"The following error occured: "+
					textStatus, errorThrown
				);
			});
	
			// callback handler that will be called regardless
			// if the request failed or succeeded
			request.always(function () {
				// reenable the inputs
				$inputs.prop("disabled", false);
			});
			
			
		} // if clause end's here of validation
	
		// prevent default posting of form
		event.preventDefault();
	});
	
}



function validation()

{
	error = [];
	
	var errorDiv = document.getElementById('error');
	errorDiv.innerHTML = "";
	var username = document.getElementById('username').value;
	var firstName = document.getElementById('firstName').value;
	var lastName = document.getElementById('lastName').value;
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
	var verifyPassword = document.getElementById('verifyPassword').value;
	
	if(password != verifyPassword)
	{
		error.push("Password Doesnot Match!");
	}
	
	nullCheck(username,"Username");
	nullCheck(firstName,"First Name");
	nullCheck(lastName,"Last Name");
	nullCheck(email,"Email");
	nullCheck(password,"Password");
	nullCheck(verifyPassword,"Verify Password");
	
	for(var i=0; i<error.length; i++)
	{
		errorDiv.innerHTML += error[i];
	}
}


function nullCheck(inputField,nameToPrintOnScreen)
{
	
	if(inputField==null || inputField=="")
	{
		var e = nameToPrintOnScreen+" Cannot be left empty! <br/>"
		error.push(e + "");
	}
	
}



// login form code below.



function loginForm()
{
	
		// variable to hold request
		var request;
		// bind to the submit event of our form
		$("#login-form").submit(function(event){
		// show loading bar until the json is recieved
		//alert('Login Submit button clicked!');
		loginValidation();
		
    // abort any pending request
		if (request) {
			request.abort();
		}
		// setup some local variables
		var $form = $(this);
		// let's select and cache all the fields
		var $inputs = $form.find("input, select, button, textarea");
		// serialize the data in the form
		var serializedData = $form.serialize();
		
		
		// let's disable the inputs for the duration of the ajax request
		// Note: we disable elements AFTER the form data has been serialized.
		// Disabled form elements will not be serialized.
			
		if(error.length==0)
		{
			$('#loading-login').html("<img src='img/loading.gif'>");
			 $inputs.prop("disabled", true);
		// fire off the request to /form.php
			request = $.ajax({
				url: "http://www.fajjemobile.info/korkster.com/login_form.php",
				type: "post",
				data: serializedData
			});
			
				// callback handler that will be called on success
			request.done(function (response, textStatus, jqXHR){
				// log a message to the console
				
				//alert(response);
				
				console.log("Hooray, it worked!");
				$('#loading-login').html('');
				
				if(response=="success")
				{
					$('#loading-login').html('Successfull');
				}
				else if(response == "incorrect credentials")
				{
					$('#loading-login').html('Incorrect Credentials');
					
				}
				else
				{
					$('#loading-login').html('Sorry, There has been an error in our system! We are working on it. Thank You for your patience. ' + response);
				}
				
				//window.location.href = "your-questions.html";
			});
		
			// callback handler that will be called on failure
			request.fail(function (jqXHR, textStatus, errorThrown){
				// log the error to the console
				$('#loading-login').html('');
				alert('Request Failed!');
				console.error(
					"The following error occured: "+
					textStatus, errorThrown
				);
			});
	
			// callback handler that will be called regardless
			// if the request failed or succeeded
			request.always(function () {
				// reenable the inputs
				$inputs.prop("disabled", false);
			});
			
			
		} // if clause end's here of validation
	
		// prevent default posting of form
		event.preventDefault();
	});
	
}


function loginValidation()
{
	error = [];
	
	var errorDiv = document.getElementById('error-login');
	errorDiv.innerHTML = "";
	var username = document.getElementById('username-login').value;
	var password = document.getElementById('password-login').value;
	
	nullCheck(username,"Username");
	nullCheck(password,"Password");
	
	for(var i=0; i<error.length; i++)
	{
		errorDiv.innerHTML += error[i];
	}
		
}
