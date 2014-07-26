function validate()
{ 
	var d=  /^[a-zA-Z]*$/;
	var f=document.forms["registration"]["fname"].value;
	var l=document.forms["registration"]["lname"].value;	
	if(f==null || f=="" || f>=0 || f<9 || d.test(f)==false)
	{
		   document.getElementById("error").innerHTML="Invalid name ";
		   document.getElementById("error1").innerHTML="";
	}
	else
	{
		document.getElementById("error").innerHTML="";
	}
}
function validate1()
{ 
	var d=  /^[a-zA-Z]*$/;
	var l=document.forms["registration"]["lname"].value;	
	if(l==null || l=="" || l>=0 || l<9 || d.test(f)==false)
	{
		   document.getElementById("error1").innerHTML="Invalid name ";
	}	
	else
	{
		document.getElementById("error1").innerHTML="";
	}	
}
function validate2()
{
	 if( document.registration.Username.value == "" )
  {
     document.getElementById("error2").innerHTML="Invalid Username ";
    // document.registration.Username.focus() ;
     return false;
  }
  else
	{
		document.getElementById("error2").innerHTML="";
	}	
}

function validate3()
{
	 
  var email = document.registration.emailid.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
  if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
  {
     document.getElementById("error3").innerHTML="Invalid Email ";
     return false;
  }
  else
	{
		document.getElementById("error3").innerHTML="";
	}	
}
function validate4()
{
	var pwd=document.forms["registration"]["password"].value;	
	var d=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;  
	if(d.test(pwd) == true)   
	{   
		document.getElementById("error4").innerHTML="Valid Password..";		
	}  
	else  
	{   
		document.getElementById("error4").innerHTML="Invalid Password . .";
	}  


}
function validate9()
{
	var pwd=document.registration.password.value;
	var pwd2=document.registration.reenter.value;
	if(pwd!=pwd2)
	{
		document.getElementById("error9").innerHTML="Password mismatch";
	}
	else
	{
		document.getElementById("error9").innerHTML="";
	}	
}
