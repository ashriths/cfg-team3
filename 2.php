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