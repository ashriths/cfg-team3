<?php
$host="localhost";
$usr="root";
$passw="root";
$db="jpmg";
if(isset($_POST["empid"]))
{


$empid=$_POST["empid"];
$skills=$_POST["skills"];
$salary=$_POST["salary"];
$desc=$_POST["desc"];
$nops=$_POST["nops"];
$company=$_POST["company"];
$location=$_POST["location"];


$con=mysqli_connect($host,$usr,$passw,$db);
$query="insert into job(empid,vacancies,description,company,salary,location) values('$empid','$nops','$company','$salary','$location')";
$res=mysqli_query($con,$query);
if($res==true)
{
	echo "job posted";
	exit();
}else
{
	echo "job unable to post";
	exit();
}
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<table cellpadding="1"   align="center" cellspacing="1" width="500px"  bgcolor="#3399FF" style="color:#fff" id="table1_hide">

<tr colspan="2">
<td ><label>Employee Id</label></td><td colspan =4>
<input type="text" class="inputs" name="empid" id="empid"size="34">
</td>
</tr>

<tr>
<td><label>Company</label></td>
<td><input type="text"  class="inputs" name="company" id="city"size="34"  ></td>
</tr>

<tr colspan="2">
<td ><label>Skills Reaquired</label></td><td colspan =4>
<input type="text" class="inputs" name="skills" id="lname"size="34">
</td>
</tr>

<tr>
<td><label>Salary</label></td>
<td><input type="text" class="inputs" name="salary" id="lname" size="34"></td>
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
<td><label>No of positions</label></td>
<td><input type="text"  class="inputs" name="nopos" id="city"size="34"  ></td>
</tr>

<tr>
<td><label>No of positions</label></td>
<td><input type="text"  class="inputs" name="nopos" id="city"size="34"  ></td>
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