<?php
//include 'securelogin_functions.php';
//include 'functions.php';
//include dirname(dirname(__FILE__)).'/db_connect.php';
//include("class.phpmailer.php");
include 'connection.php';
$post = (!empty($_POST)) ? true : false;
if($post)
{
	$rollno = stripslashes($_POST['mentid']);	
	$rollno1=trim($rollno);
	$createdBy="admin";		
	$status="ACT";
	//$values = $_POST['stuid'];
	if($_POST) 
	{
		//echo "inside if";
		if(is_array($_POST['stuid']))
		{
		//echo "inside if if";
		foreach($_POST['stuid'] as $names)
		{        			
			$name1=trim($names);
			$insert_stmt = mysql_query("INSERT INTO mentor_student VALUES('','$rollno1', '$name1', '$status', CURDATE(),'', '$createdBy', CURDATE(), '', '')")or die($insert_stmt."<br/><br/>".mysql_error());
		}
		}		
	}
	echo 'added successfully';
}
else
{
	echo 'invalid';
	exit;
}
?>

