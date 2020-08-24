
"use strict"
function Validate(){
  
  var username = document.getElementById('username').value; 
 

  if(username==""){
    

    document.getElementById('userMsg').innerHTML="*Name is not available";

  }
   

}

function remover() {
  document.getElementById('userMsg').innerHTML="";
}

function mustNeed(){
 document.getElementById('userMsg').innerHTML="*this field is required";
}