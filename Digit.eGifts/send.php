<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
<link rel="stylesheet" href="../styles.css">
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<script src="https://www.google.com/recaptcha/api.js"></script>

</body>
</html>
<?php

	require 'recaptchalib.php';

	$siteKey = '6LccVQsTAAAAAAjX8v__vBuDlFhQsgPsqiw3kc15'; // votre clé publique
	$secret = '6LccVQsTAAAAAD28EZG8x0b8wwv_cOm9T7VcIOQD'; // votre clé privée
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	
	$name_l = strlen($name);
	$email_l = strlen($email);
	$message_l = strlen($message);
	
	$message_fix = str_replace(array("'", "\\","ç","é","è","à","ô","û","â","ê"), array("''", "\\\\","c","e","e","a","o","u","a","e"), $message);
	

$reCaptcha = new ReCaptcha($secret);
if(isset($_POST["g-recaptcha-response"])) {
    $resp = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
        );
    if ($resp != null && $resp->success) {
    	if(preg_match('#@#', $email) && preg_match('#.#', $email) && $name_l >= 3 && $email_l >= 6 && $message_l >= 20 && $message_l < 10001){

			// GROS CODE //

			require './include/PHPMailer/PHPMailerAutoload.php';

			$mail = new PHPMailer;

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp-mail.outlook.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'bmx22c@hotmail.fr';                 // SMTP username
			$mail->Password = '#SECRET';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

			$mail->From = $email;
			$mail->FromName = $name;
			$mail->addAddress('bmx22c@hotmail.fr', 'Contact Digit.eGifts');     // Add a recipient

			$mail->Port = 587; 

			$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Contact Digit.eGifts';
			$mail->Body    = $message;

			//$mail->SMTPDebug = 1;

			if(!$mail->send()) {
			    //echo 'Message could not be sent.';
			    //echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    //echo 'Message has been sent';
			}

			// GROS CODE //

			echo('	<center>
						<h1><a href="http://digit-egifts.fr/">Message envoy&eacute;!</a></h1>
					</center>');
		}else{
			echo('<script type=text/javascript>
				var redirect = confirm("ERREUR: \nMultiple raisons: \n- Nom trop court, \n- E-mail trop court, \n- Message trop court.");
				if(redirect){
					window.location.href = "javascript:history.back()";
				}else{
					window.location.href = "javascript:history.back()";
				}
			</script>');
			echo('	<center>
						<h1>ERREUR!</h1>
					</center>');
		}
    }
    else {
    	echo('<script type=text/javascript>
				var redirect = confirm("ERREUR: \nCAPTCHA INCORRECT!");
				if(redirect){
					window.location.href = "javascript:history.back()";
				}else{
					window.location.href = "javascript:history.back()";
				}
			</script>');
			echo('	<center>
						<h1>ERREUR!</h1>
					</center>');
    	}
    }

		
	
?>