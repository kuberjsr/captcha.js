// JavaScript Document

function is_email(email)
{
	if(!email.match(/^[A-Za-z0-9\._\-+]+@[A-Za-z0-9_\-+]+(\.[A-Za-z0-9_\-+]+)+$/))
	return false;
	return true;
}
function is_name(name)
{
	if(!name.match(/^[a-zA-Z ]*$/))
	return false;
	else
	return true;
}
function Numeric(){
	if(isNaN(document.rightform.contact.value))
	{
		alert("Given value is not a number");
		return false;

	}
}


function validate() 
{
	if(document.rightform.name.value == "Name" ) 
	{
		alert("Name can not be Blank !");
		document.rightform.name.focus();
		return false;
		
	}
	else if(! is_name( document.rightform.name.value))
	{
		alert("Name should be Valid Format !");
		document.rightform.name.focus();
		return false;
	} 
	 
	else if(document.rightform.email.value == "Email" ) 
	{
		alert("E-Mail can not be Blank !");
		document.rightform.email.focus();
		return false;
	} 
	else if(! is_email( document.rightform.email.value))
	{
		alert("Email Address should be Valid Format !");
		document.rightform.email.focus();
		return false;
	} 
	
	 
	   else if(document.rightform.contact.value == "Enter Phone Number" ) 
	{
		alert("contact no.can not be Blank !");
		document.rightform.contact.focus();
		return false;
	} 
	else if(isNaN(document.rightform.contact.value))
	{
		alert("Please enter valid contact no.");
		document.rightform.contact.focus();
		return false;

	}
else if(document.rightform.cap1.value == "Enter above code" ) 
	{
		alert("Captcha can not be Blank !");
		document.rightform.cap1.focus();
		return false;
	} 

	
	else if(document.rightform.cap1.value != document.rightform.cap2.value ) 
	{
		alert("Code is not match !");
		document.rightform.cap1.focus();
		return false;
	}
		else
	  {	   
		   document.rightform.method="post";
		  document.rightform.action="request.php";
		  document.rightform.submit(); 
		   
		    return true;
	   }
}
	
	
	
