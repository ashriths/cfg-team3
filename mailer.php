<?php
/**
* Simple example script using PHPMailer with exceptions enabled
* @package phpmailer
* @version $Id$
*/

require './phpmailer/class.phpmailer.php';
//include 'connection.php';
try {
	$mail = new PHPMailer(true); //New instance, with exceptions enabled

	//$body             = file_get_contents('contents.html');
	//$body             = preg_replace('/\\\\/','', $body); //Strip backslashes
	//$rad_pass=md5(uniqid(rand(), true));
	//$email=$_POST['emailid'];
	$body="The password for your account is <br/>'hi everyone'<br/> and user name will be your respective roll number/mentor Id.";
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

	//$to = $email;

	$mail->AddAddress('saikrupa521@gmail.com');

	$mail->Subject  = "Password For Your RRS Account";

	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->WordWrap   = 80; // set word wrap

	$mail->MsgHTML($body);

	$mail->IsHTML(true); // send as HTML

	$mail->Send();
	echo 'Message has been sent.';
} catch (phpmailerException $e) 
	{
	echo $e->errorMessage();
}
?>