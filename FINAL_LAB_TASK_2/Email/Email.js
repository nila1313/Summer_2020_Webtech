
"use strict"
function validate()
{
	var email=document.getElementById('email').value;
	if (email=="") {
	
	emailSplit=email.split("@");
			if(emailSplit[1].split(".").length>=2)
			{
				return true;
			}
	else{		
		document.getElementById('emailMsg').innerHTML="*Can not be empty";
		return false;
	}
	else
		{
			document.getElementById('emailMsg').innerHTML="Please enter valid email";
			return false;
		}	
}

function remover()
{
	document.getElementById('emailMsg').innerHTML="";
}

function mustNeed(){
 document.getElementById('emailMsg').innerHTML="*this field is required";
}