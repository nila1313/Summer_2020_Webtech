"use strict"


function nameValidate(){
  var validationName=false;
  
  var username = document.getElementById('username').value; 
 
 
  if(username==""){
   
    document.getElementById('nameMsg').innerHTML="*this field is required";
    validationName=false;

  }


  else if(userName.split(" ").length<2){
   
    document.getElementById('nameMsg').innerHTML="*At least two characters are needed";
    validationName=false;

  }
  else if(userName.split(" ").length<2 && username>='0' && username<='9')
    {   
         document.getElementById("nameMsg").innerHTML="*Must be starts with letter ";  
        validationName=false;

    }
else if( (username>='A' && username<='Z') || (username>='a'&& username<='z') || username=='.' || username=='-')
    {   
        document.getElementById("nameMsg").innerHTML="*Can Contains A-Z or a-z or dot(.) or dash(-) "; 
       validationName=true;

    }
    return validationName;
  }


function emailValidate()
{
  var validationEmail=false;
  var email=document.getElementById('email').value;
  if(email!="")
  {
    if(email.split("@").length>=2)
    {
      emailsplit=email.split("@");
      if(emailsplit[1].split(".").length>=2)
      {
        validationEmail= true;
      }
      else
      {
        document.getElementById('emailMsg').innerHTML="Please enter valid email. .com is missing";
        validationEmail= false;
      }
    }
    else
    {
      document.getElementById('emailMsg').innerHTML="Please enter valid email";
      validationEmail= false;
    }
  }
  else
  {
    document.getElementById('emailMsg').innerHTML="Field cannot be empty";
    validationEmail= false;
  }
   return validationEmail
}

function emailValidate()
{ 
  var validationGender;
  var email=document.getElementById('email').value;
  if(email!="")
  {
    if(email.split("@").length>=2)
    {
      emailsplit=email.split("@");
      if(emailsplit[1].split(".").length>=2)
      {
        validationGender= true;
      }
      else
      {
        document.getElementById('msg').innerHTML="Please enter valid email. .com is missing";
        validationGender= false;
      }
    }
    else
    {
      document.getElementById('msg').innerHTML="Please enter valid email";
     validationGender= false;
    }
  }
  else
  {
    document.getElementById('msg').innerHTML="Field cannot be empty";
    validationGender= false;
  }
  return validationGender;
}

function dateofBirthalidate()
{
  var day=document.getElementById('day').value;
  var month=document.getElementById('month').value;
  var year=document.getElementById('year').value;
  if (day!="" && month!="" && year!="") 
  {
    if(day>0 && day<32 && month>0 && month<13 && year>1899 && year<2017)
    {
      return true;
    }
    else
    {
      document.getElementById('dateofbirthMsg').innerHTML="day range 0 to 31 and month range 1 to 12 and year range 1900 to 2016";
      return false;
    }
  }
  else
  {
    document.getElementById('dateofbirthMsg').innerHTML="Please fill all the boxes";
    return false;
  }
  
}
function remover()
{
  document.getElementById('dateofbirthMsg').innerHTML="";
}

function genderValidate()
{ 
  var
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


function Validate()
{
	
  var valName=nameValidate();
  var valEmail=nameEmail();
  var valEmail=nameEmail();
	if(valName==true && valEmail==true)
	{
		return true;
	}
	else
	{
		return false;
	}

}

function remover() {
  document.getElementById('nameMsg').innerHTML="";
  document.getElementById('emailMsg').innerHTML="";
  document.getElementById('genderMsg').innerHTML="";
}

function mustNeed(){
 document.getElementById('userMsg').innerHTML="*this field is required";
}