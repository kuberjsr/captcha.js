<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/captcha.js"></script>
  <script src="js/valid.js"></script> 

<link rel="stylesheet" type="text/css" href="css/mail.css" media="screen">
</head>
<body>
					   
					   
					  <table width="30%" align="center">
  <tr>
    <td>  <form name="rightform" id="rightform" method="post" class="contactform1">
					    	<div>
						    	
						    	<span> <input id="name" name="name" type="text" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Name':this.value;" value="Name" class="textbox1" /></span>
						    </div>
						    <div>
						    	
						    	<span><input name="email" id="email" type="text" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Email':this.value;" value="Email" class="textbox1" /></span>
						    </div>
						    <div>
						     	
						    	<span><input name="contact" type="text" class="textbox1" id="contact" onfocus="this.select()" onblur="this.value=!this.value?'Enter Phone Number':this.value;" onclick="this.value='';" onkeypress="return checkIt(event)" value="Mobile no." maxlength="10" /></span>
						    </div>
						    <div>
						    	<span><textarea name="userMsg" disabled="disabled" class="textbox1"> I m intersted in your project plz call me</textarea></span>
						    </div>
						    <div>
						    	<span> <input name="cap2" type="text" disabled="disabled" id="cap2" class="textbox2"  readonly="readonly" />
                <p> <a href='javascript: Draw();'>Click here for refresh</a></p>
                <script type="text/javascript">Draw()</script>
                </span>
                </div>
                 <div>
						     	
						    	<span><input name="cap1" type="text" class="textbox1" id="cap1" onfocus="this.select()" onblur="this.value=!this.value?'Enter above code':this.value;" onclick="this.value='';" onkeypress="return checkIt(event)" value="Enter above code" /></span>
						    </div>
               
						   <div>
						   		<span><input name="Register" type="button" id="Register"  onclick="validate();" value="Submit"></span>
						  </div>
					    </form></td>
  </tr>
</table>

</body>
</html>

