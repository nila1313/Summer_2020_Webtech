
"use strict"

var validation=false;
function nameValidate(){
  
  
  var username = document.getElementById('username').value; 
 
 
  if(username==""){
   
    document.getElementById('userMsg').innerHTML="*required";
    window.validation=false;

  }


  else if(username.split(" ").length<2){
   
    document.getElementById('userMsg').innerHTML="*At least two word are needed";
    window.validation=false;

  }
  else if(username.split(" ").length<2 && username>='0' && username<='9')
    {   
         document.getElementById("userMsg").innerHTML="*Must be starts with letter ";  
        window.validation=false;

    }
else if( (username>='A' && username<='Z') || (username>='a'&& username<='z') || username=='.' || username=='-')
    {   
        document.getElementById("userMsg").innerHTML="*Can Contains A-Z or a-z or dot(.) or dash(-) "; 
        window.validation=true;

    }
  
  }

function Validate()
{
	
	if(window.validation==true)
	{
		return true;
	}
	else
	{
		return false;
	}

}

function remover() {
  document.getElementById('userMsg').innerHTML="";
}

///function mustNeed(){
 //document.getElementById('userMsg').innerHTML="*this field is required";
//}