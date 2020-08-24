
"use strict"


function Validate(){
  
  var username = document.getElementById('username').value; 
 

  if(username==""){
   
    document.getElementById('userMsg').innerHTML="*Name is not available";
    return false;

  }
   
  else if( (name>='A' && name<='Z' || name>='a'&& name<='z') && lent< 2)
    {   
         document.getElementById("userMsg").innerHTML="*At least two characteris needed";  
        return false;

    }

    return true;
}

function remover() {
  document.getElementById('userMsg').innerHTML="";
}

function mustNeed(){
 document.getElementById('userMsg').innerHTML="*this field is required";
}