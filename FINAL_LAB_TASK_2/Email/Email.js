
"use strict"
function validate()
{
	var email=document.getElementById('email').value;
	if (email=="") 
	{
		document.getElementById('emailMsg').innerHTML="*Can not be empty";
		return false;
	}	
}

function remover()
{
	document.getElementById('emailMsg').innerHTML="";
}

function mustNeed(){
 document.getElementById('userMsg').innerHTML="*this field is required";
}