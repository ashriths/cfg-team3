
<!DOCTYPE html>

<head> 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
    <meta name="description" content="website description" />
   <meta name="keywords" content="website keywords, website keywords" />
   <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
   <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
   <link rel="stylesheet" type="text/css" href="css/demo.css" />
   <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/Custom.css" />
    <script type="text/javascript" src="js/pace.min.js"></script>
   <script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>
    <script> 
        // wait for the DOM to be loaded 
       
    </script> 
    <style> 
 inputs:-webkit-input-placeholder { 
    color:    #2E9AFE; 
} 
 
inputs-moz-placeholder { 
    color:    #2E9AFE; 
} 
 
 .inputs  { 
 width:200px; 
padding: 8px 8px; 
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
font-weight: 400; 
font-size: px; 
color: #fffff; 

background: #FFF; 
border: 1px solid #FFF; 
border-radius: 5px; 
box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.50); 
-moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50); 
-webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.50); 
} 
.inputs:focus { 
   background: ##0101DF; 
color: #FFFFFF; 
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25); 
-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25); 
-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25); 
    outline:0; 
} 
  .inputs:hover   { 
background: #2E9AFE; 
color: #FFFFFF; 
} 
.img { max-width: 100%; }
 
 </style> 
</head> 
<body>
<div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
         <form action="logout" style="position:fixed;left:1200px;top:60px"><input type="submit" class="logout" value="Logout"v></form>
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Quest Connect<span class="logo_colour">Book</span></a></h1>
          <h2></h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
           <li ><a href="">Home</a></li>
        
               <li><a href="">Send Notifications</a></li>
          <li class="selected"><a href="studentregistration.php">Enrolling</a></li>
        </ul>
      </div>
    </div>
<div>
<div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        
        <h4>&nbsp;</h4>
      </div>
      <div id="content" style="height:1000px;width:565px;">
        <form action="studentregistration.php" method="post">
<table cellpadding="1"   align="center" cellspacing="1" width="500px"  bgcolor="#3399FF" style="color:#fff" id="table1_hide">

<tr colspan="2">


<td ><label>Student name</label></td><td colspan =4>
<input type="text" class="inputs" name="sname" id="empid"size="34" required>
</td>
</tr>


<td ><label>Primary skill set</label></td><td colspan =4>
<input type="text" class="inputs" name="skills" size="34" placeholder="seperated by commas" required>
</td>
</tr>

<td><label>Gender</label></td>
<td><input type="radio" name="gender" id="male" value="male" size="10" checked>Male
<input type="radio" name="gender" id="Female" value="Female" size="10">Female</td>
</tr>
<tr>

<tr colspan="2">
<td ><label>mobile no</label></td><td colspan =4>
<input type="text" class="inputs" name="mobile" size="34" placeholder="seperate by commas" required>
</td>
</tr>

<tr>
<td><label> Prefered location</label></td>
<td><input type="text" class="inputs" name="location" size="34" required></td>
</tr>

<tr>
<td><label>Address</label></td>
<td><input type="text"  class="inputs" name="address" id="city"size="34"  required></td>
</tr>

<tr>
<td><label>Description</label></td>
<td><textarea rows="4"  class="inputs" cols="20" name="desc" ></textarea></td>
</tr>

<td ><label>Email id</label></td><td colspan =4>
<input type="text" class="inputs" name="email" size="34" required>
</td>
</tr>

<tr>
<td></td>
<td colspan=2><input type="reset">
<input type="submit" value="Post" size="30"></td>
</tr>
</table>
</font>
</form>   <br>  <br>	
      	<div id="accordion" style="overflow-y: scroll;">
      	
      	</div>
        <p>&nbsp;</p>
</div>
    </div>
    <div id="footer">
        Copyrights@Engineering Note Book
    </div>
  </div>
</body>
</html>


<?php
        session_start();
		
$host="localhost";
$usr="root";
$passw="cfg2014!";
$db="jpmg";
if(isset($_POST["sname"]))
{
$sid=$_POST["sname"];
$skills=$_POST["skills"];
$sname=$_POST["sname"];
$desc=$_POST["desc"];
$address=$_POST["address"];
$gender=$_POST["gender"];
$location=$_POST["location"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$con=mysqli_connect($host,$usr,$passw,$db);
echo "<script type='text/javascript'>alert('in out res');</script>";

//print_r($con) ;
$query="insert into trainee(email,skills,sname,message,address,location,mobile,gender) values('".$email."','".$skills."','".$sname."','".$desc."','".$address."','".$location."','".$mobile."','".$gender."')";

echo "<script type='text/javascript'>alert('in out res');</script>";
echo "<script type='text/javascript'>alert(\"".$query."\");</script>";
$res=mysqli_query($con,$query);
if($res==1)
{
	echo "<script type='text/javascript'>alert('in res');</script>";
	$query="select * from where email='".$email."' and skills='".$skills."' and name='".$sname."' and mobile='".$mobile."' limit 1";
	$res2=mysqli_query($con,$query);
	while($row = mysqli_fetch_array($res2))
	{
		echo "<script type='text/javascript'>alert('in session');</script>";
		$_SESSION["sid"]=$row['trainee_id'];
		$_SESSION["spassword"]=$row['password'];
		$_SESSION["semail"]=$row['email'];
		$semail=$row['email'];
			$sid=$row['trainee_id'];
		$spass=$row['password'];

	}
	echo "<script type='text/javascript'>alert('Enrolled successfully');</script>";
	

    $from = "quest.alliance.jpmc@gmail.com"; // sender
    $subject = "credentials";
    $message = $sid+$spass;
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail("quest.alliance.jpmc@gmail.com",$subject,$message,"From: '".$from."'\n");
    echo "Thank you for sending us feedback";


echo "<script type='text/javascript'>alert('mail successfully');</script>";
	
		/* $ch = curl_init($url);$url="./mailer.php";
	curl_setopt($ch, CURLOPT_POST, true);	
	curl_setopt($ch, CURLOPT_POSTFIELDS);
	curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 1);
	$out=curl_exec($ch);	
	curl_close($ch); */
	exit();
}else
{
	echo "<script type='text/javascript'>alert('Unable tp enroll');</script>";
	exit();
}
}
?>