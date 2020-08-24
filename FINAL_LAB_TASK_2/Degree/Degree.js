 "use strict"
function Validate() {
	if(document.getElementById('SSC').checked || document.getElementById('HSC').checked || document.getElementById('BSc').checked)
	{
		return true;
	}
	else
	{
		document.getElementById('degreeMsg').innerHTML="Please select your Degree";
		return false;
	}
}
function remover() {
  document.getElementById('degreeMsg').innerHTML="";
}

function mustNeed(){
 document.getElementById('degreeMsg').innerHTML="*this field is required";
}