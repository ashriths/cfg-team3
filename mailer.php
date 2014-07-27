<?php
/**
* Simple example script using PHPMailer with exceptions enabled
* @package phpmailer
* @version $Id$
*/

require './phpmailer/class.phpmailer.php';
$token = substr(md5(uniqid(rand(), true)),0,6);
try {
	
	$sid=$_SESSION['sid'];
	$spass=$_SESSION['spassword'];
	$semail=$_SESSION['semial'];
	
	$mail = new PHPMailer(true); //New instance, with exceptions enabled

	//$body             = file_get_contents('contents.html');
	//$body             = preg_replace('/\\\\/','', $body); //Strip backslashes
	$en_pass=base64_encode($token);
	$email=$_POST['emailid'];
	$uid=$_POST['uid'];
	$stuname=$_POST['stuname'];
	$usertype=$_POST['usertype'];
	$createdby="admin";
	$body="Congratulations! \n You have been enrolled into Quest Connect Placement program <br/>Username :$sid \n Password :$spass<br/> Thank You!.";
	$mail->IsSMTP();                           // tell the class to use SMTP
	$mail->SMTPAuth   = true;
	$mail->SMTPSecure = 'ssl'; // enable SMTP authentication
	$mail->Port       = 465;                    // set the SMTP server port
	$mail->Host       = "smtp.gmail.com"; // SMTP server
	$mail->Username   = "quest.alliance.jpmc@gmail.com";     // SMTP server username
	$mail->Password   = "cfgteam3";            // SMTP server password
	$mail->SMTPDebug  = 1; 
	//$mail->IsSendmail();  // tell the class to use Sendmail

	$mail->AddReplyTo("quest.alliance.jpmc@gmail.com","Admin");

	$mail->From       = "quest.alliance.jpmc@gmail.com";
	$mail->FromName   = "Admin";



	$mail->AddAddress($semail);

	$mail->Subject  = "Credentials";

	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->WordWrap   = 80; // set word wrap

	$mail->MsgHTML($body);

	$mail->IsHTML(true); // send as HTML

	$mail->Send();
	echo "<script type='text/javascript'>alert('mail sent successfully');</script>";
} catch (phpmailerException $e) 
	{
	echo $e->errorMessage();
    }
?>
