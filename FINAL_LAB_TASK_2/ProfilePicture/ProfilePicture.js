function validate()
{
	if (document.getElementById('number').value!="" && document.getElementById('file').value!="") 
	{
		if (parseInt(number,10)>0) 
		{
			return true;
		}
		else
		{
			document.getElementById('profilePictureMsg').innerHTML="*Positive number required";
			return false;
		}
	}
	else
	{
		document.getElementById('profilePictureMsg').innerHTML="*Picture and Id cannot be empty ";
		return false;
	}
}
function remover()
{
	if(document.getElementById('number').value!="")
	{
		ocument.getElementById('profilePictureMsg').innerHTML="";
	}
}