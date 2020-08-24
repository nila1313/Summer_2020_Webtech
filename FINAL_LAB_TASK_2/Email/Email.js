
"use strict"
function validate()
{
	var email=document.getElementById('email').value;
	if (email=="") 
	{
		document.getElementById('emailmsg').innerHTML="*Can not be empty";
		return false;
	}	
}

function remover()
{
	document.getElementById('emailmsg').innerHTML="";
}

function mustNeed(){
 document.getElementById('userMsg').innerHTML="*this field is required";
}