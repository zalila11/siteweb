
<?php
//THIS IS JUST AN EXPLICATION FILE
	//include PHPMailerAutoLoad.php
require_once("../../config.php");
require_once ("C:\wamp64\www\siteweb\back\PHPMailer\PHPMailerAutoLoad.php");

	//create an instance of PHPMailer
	$mail = new PHPMailer();
	//set a host
	$mail->Host = "smtp.gmail.com";
	//enable SMTP
	//$mail->isSMTP();
	$mail->IsSMTP();
	$mail->Host = "smtp.gmail.com";

	$mail->SMTPDebug = 2;
	//set authentification to true
	$mail->SMTPAuth = true;
	//set login details for Gmail account
	$mail->Username = "mohamedslim.koubaa@esprit.tn";
	$mail->Password = "mamatan1";

	//set type of protection
	$mail->SMTPSecure = "tls"; //or we can use TLS
	$mail->SMTPOptions = array(
    	'ssl' => array(
        	'verify_peer' => false,
        	'verify_peer_name' => false,
        	'allow_self_signed' => true
    	)
	);
	//set a port
	$mail->Port = 587; // or 587 if TLS
	//set a subject
	$mail->Subject = "test email";
	//set HTML to true
	$mail->isHTML(true);
	//set a body
	$body = 'test';
	$mail->Body=$body;
	//set who is sending an email
	$mail->setFrom('mohamedslim.koubaa@esprit.tn','Merbleu');
	//set where we are sending email (recipients)
	$mail->addAddress('mohamedslim.koubaa@esprit.tn');
	//send an email
	if($mail->send())
	{
		header("location:afficherRec.php");	}
	else
	{
		echo $mail->ErrorInfo;
	}

?>