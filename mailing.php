<?php
	if (function_exists("date_default_timezone_set"))
	{	
		date_default_timezone_set('Europe/Warsaw');
	}
	
    require_once('php/mail.php');
	
	$mailServerConnection = new MailServerConnection();
	$body ="Someone filed and send form from JadeCode site <br />";
	$body.=" First name: ".htmlentities($_REQUEST['first_name'])."<br />";
	$body.=" Email: ".htmlentities($_REQUEST['email'])."<br />";
	$body.=" Comments: ".htmlentities($_REQUEST['comments'])."<br />";
	if ($mailServerConnection->sendMail('lukasz@jadecode.com', 'JadeCode form', $body)) {
		echo 'success';
	} else {
		echo 'error';
	}
?>