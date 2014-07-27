
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
          <li><a href="">Post aJob</a></li>
               <li><a href="">Review contacts</a></li>
          <li><a href="Team.j sp">Manage Posts</a></li>
          <li class="selected"><a href="employer.php">Post a Job</a></li>
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
        <form action="employer.php" method="post">
<table cellpadding="1"   align="center" cellspacing="1" width="500px"  bgcolor="#3399FF" style="color:#fff" id="table1_hide">

<tr colspan="2">
<td ><label>Employee Id</label></td><td colspan =4>
<input type="text" class="inputs" name="empid" id="empid"size="34">
</td>
</tr>

<tr>
<td><label>Company</label></td>
<td><input type="text"  class="inputs" name="company" size="34"  ></td>
</tr>

<tr colspan="2">
<td ><label>Skills Reaquired</label></td><td colspan =4>
<input type="text" class="inputs" name="skills" size="34" placeholder="seperate by commas">
</td>
</tr>

<tr>
<td><label>Salary</label></td>
<td><input type="text" class="inputs" name="salary" size="34"></td>
</tr>

<tr>
<td><label>No of positions</label></td>
<td><input type="text"  class="inputs" name="nopos" id="city"size="34"  ></td>
</tr>

<tr>
<td><label>Description</label></td>
<td><textarea rows="4"  class="inputs" cols="20" name="desc" ></textarea></td>
</tr>

<tr>
<td><label>location</label></td>
<td><input type="text"  class="inputs" name="location" id="city"size="34"  ></td>
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
$host="localhost";
$usr="root";
$passw="cfg2014!";
$db="jpmg";
if(isset($_POST["empid"]))
{
$empid=$_POST["empid"];
$skills=$_POST["skills"];

$salary=$_POST["salary"];
$desc=$_POST["desc"];
$nops=$_POST["nopos"];
$company=$_POST["company"];
$location=$_POST["location"];
$con=mysqli_connect($host,$usr,$passw,$db);

//print_r($con) ;
$query="insert into job(emp_id,vacancies,description,company,salary,location,skills) values('".$empid."','".$nops."','".$desc."','".$company."','".$salary."','".$location."','".$skills."')";

$res=mysqli_query($con,$query);


if($res==1)
{
	echo "<script type='text/javascript'>alert('Job posted successfully');</script>";
	exit();
}else
{
	echo "<script type='text/javascript'>alert('Unable to post Job');</script>";
	exit();
}
}
?>