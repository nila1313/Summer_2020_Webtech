
"use strict"
function validate()
{
	var bd=document.bloodGroup.bloodGroup;
	if (bd.value == "Select Blood Group") 
	{
		document.getElementById('bloodGroupMsg').innerHTML="Please select your Blood Group";
		return false;
	}
	else
	{
		return true;
	}
}