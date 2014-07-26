<?php
$host="localhost";
$usr="root";
$passw="root";
$db="jpmg";

$empid=$_POST["empid"];
$skills=$_POST["skills"];
$salary=$_POST["salary"];
$desc=$_POST["desc"];
$nops=$_POST["nopos"];
$company=$_POST["company"];
$location=$_POST["location"];
$con=mysqli_connect($host,$usr,$passw,$db);

//print_r($con) ;
$query="insert into job(emp_id,vacancies,description,company,salary,location) values('".$empid."','".$nops."','".$desc."','".$company."','".$salary."','".$location."')";
echo $query;
$res=mysqli_query($con,$query);
echo 'hi';
if($res==1)
{
	echo "job posted";
	exit();
}else
{
	echo "job unable to post";
	exit();
}
?>
<!DOCTYPE html>
<html> 
<head> 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
 
    <script> 
        // wait for the DOM to be loaded 
       
    </script> 
</head> 
<body>
<div>
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
<input type="text" class="inputs" name="skills" size="34">
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
</form> 

</div>
</body>