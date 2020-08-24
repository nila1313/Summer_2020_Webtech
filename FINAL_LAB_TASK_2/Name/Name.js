
"use strict"


function nameValidate(){
  var validation=false;
  
  var username = document.getElementById('username').value; 
 
 
  if(username==""){
   
    document.getElementById('userMsg').innerHTML="*this field is required";
    validation=false;

  }


  else if(userName.split(" ").length<2){
   
    document.getElementById('userMsg').innerHTML="*At least two characters are needed";
    validation=false;

  }
  else if(userName.split(" ").length<2 && username>='0' && username<='9')
    {   
         document.getElementById("userMsg").innerHTML="*Must be starts with letter ";  
        validation=false;

    }
else if( (username>='A' && username<='Z') || (username>='a'&& username<='z') || username=='.' || username=='-')
    {   
        document.getElementById("userMsg").innerHTML="*Can Contains A-Z or a-z or dot(.) or dash(-) "; 
        validation=true;

    }
    return validation;
  }

function Validate()
{
  var val=nameValidate();
  if(val==true)
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

function mustNeed(){
 document.getElementById('userMsg').innerHTML="*this field is required";
}