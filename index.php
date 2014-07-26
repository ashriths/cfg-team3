<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/myst.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<script type="text/javascript">
		function allnumeric()  
		{  
			var x=document.getElementsByName("mobile")[0].value;
			if(isNaN(x))
			{
				alert("Please enter only numbers in mobil no");
				document.location.href = "#toregister";
				return false;
			}
			if(x.length!=10)
			{
				alert("Please enter a 10 digit mobile no");
				document.location.href = "#toregister";
				return false;
			}
			var x2=document.getElementsByName("pwd1")[0].value;
			var x3=	document.getElementsByName("pwd2")[0].value;
			if(x2!=x3)
			{
				document.getElementById('password').focus();
				document.location.href = "#toregister";
				return false;
			}
			alert("Registration Success");
			return true;
		}  
				
		</script>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
       <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
       <meta name="HandheldFriendly" content="true">
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            
            <header>
                <h1><font size="10" color="#FFFAF0">Quest <span style="color:#1298EE"> Connect</span><span>&nbsp;&nbsp;</font><font color="#FFFAF0" size="5"></font></span></h1>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="Login.php" autocomplete="on" method="post"> 
                                <h1><font color="#FFFAF0">Log in</h1> </font>
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" />
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">SIGN UP</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="register.php" autocomplete="on" method="post" onsubmit="return allnumeric()"> 
                                <h1><font color="#FFFAF0"> Sign up </h1></font> 
                                <p> 
                                    <label for="usernamesignup" class="uname" >First name</label>
                                    <input id="username" name="uname" required="required" type="text" placeholder="" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" >Last name</label>
                                    <input id="username" name="lname" required="required" type="text" placeholder="" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" > Email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder=""/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" >Password </label>
                                    <input id="password" name="pwd1" required="required" type="password" placeholder=""/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" >Confirm password </label>
                                    <input id="passwordsignup_confirm" name="pwd2" required="required" type="password" placeholder=""/>
                                </p>
                                 <p> 
                                    <label   >Mobile no</label>
                                    <input  name="mobile" required="required" type="text" placeholder=""/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>