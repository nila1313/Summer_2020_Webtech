"use strict"

function validate()
{
	var a=document.gender.gender;
	for (i=0;i<a.length;i++) 
	{
		if (a[i].checked==true) 
		{
			return true;
		}
	}
	document.getElementById('genderMsg').innerHTML="Gender Required";
	return false;
}

function remover() {
  document.getElementById('genderMsg').innerHTML="";
}

function mustNeed(){
 document.getElementById('genderMsg').innerHTML="*this field is required";
}