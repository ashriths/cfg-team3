
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
hr.style-two {
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
    background-image:    -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
    background-image:     -ms-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
    background-image:      -o-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
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
          <h1><a href="index.html">Quest Connect<span class="logo_colour">Connect</span></a></h1>
          <h2></h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
           <li class="selected" ><a href="employerhome.php">Home</a></li>
          <li><a href="employerjobpost.php">Post aJob</a></li>
               <li><a href="">Review contacts</a></li>
          <li><a href="Team.j sp">Manage Posts</a></li>
          
        </ul>
      </div>
    </div>
<div>
<div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        
        <h4>&nbsp;</h4>
      </div>
      <div id="content" style="height:1000px;width:100%;overflow-y: scroll">

<?php
$host="localhost";
$usr="root";
$passw="cfg2014!";
$db="jpmg";
$con=mysqli_connect($host,$usr,$passw,$db);
$query="select * from job";
$res=mysqli_query($con,$query);

while($rows=mysqli_fetch_assoc($res))
{
	
		$skills=$rows["skills"];
		$jobid=$rows["j_id"];
		$empid=$rows["emp_id"];
		$vacancies=$rows["vacancies"];
		$description=$rows["description"];
		$company=$rows["company"];
		$salary=$rows["salary"];
		$location=$rows["location"];
		
?>
         <form  action="engine.php" method="Post">
         
        <label>Employee Id:</label>
        <label name="empid"><?=$empid?></label><br><br>
        

       <label>Company:</label>
       <label name="company"><?=$company?></label><br><br>
      
        <label >Skills Reaquired:</label>
		<label name="skills"><?=$skills?></label><br><br>
       

        <label>Salary:</label>
       <label name="salary"><?=$salary?></label><br><br>
      
        <label>No of positions:</label>
        <label name="vacancies"><?=$vacancies?></label><br><br>
        

       <label>Description:</label>
       <label name="desc"><?=$description?></label><br><br>
        

       <label>location:</label>
        <label name="comapny"><?=$company?></label><br><br><br>
       




       
        <input type="submit" value="View matching candidates" size="30"><br><br>
 
</form>


		<hr>
		
	<br><br><br>
<?php
}
?>


 <br>  <br>	
      	<div id="accordion" style="overflow-y: scroll;">
      	
      	</div>
        <p>&nbsp;</p>
</div>
    </div>
    <div id="footer">
        Copyrights@Quect COnnect
    </div>
  </div>
</body>
</html>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>