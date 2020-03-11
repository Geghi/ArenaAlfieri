
<!DOCTYPE html>
<html lang="it">
	<body>
		<head>         
			<title>Your Submission</title>	
			<meta charset="utf-8"> 
			<meta name = "author" content = "Mantovani Giacomo">
			<meta name="viewport" content="width=device-width">
			<link rel="shortcut icon" href="http://www.arenaalfieri.netlify/favicon.ico"/>
			<link href="../css/main.css" rel="stylesheet" type="text/css"/>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		</head>
		<div class="success-text">

<?php
	if(isset($_POST['email'])) {
	
		// EDIT THE 2 LINES BELOW AS REQUIRED
		$email_to = "mantovani.giacomo96@gmail.com";
		$email_subject = "B&B Arena Alfieri";
	
		function died($error) {
			// your error code can go here
			echo "We are very sorry, but there were error(s) found with the form you submitted. ";
			echo "These errors appear below.<br /><br />";
			echo $error."<br /><br />";
			echo "Please go back and fix these errors.<br /><br />";
			die();
		}
	

		// validation expected data exists
		if(!isset($_POST['nome']) ||
			!isset($_POST['cognome']) ||
			!isset($_POST['email']) ||
			!isset($_POST['messaggio'])) {
			died('We are sorry, but there appears to be a problem with the form you submitted.');       
		}
	
	
		$first_name = $_POST['nome'];
		$last_name = $_POST['cognome']; 
		$email = $_POST['email']; 
		$message = $_POST['messaggio']; 
	
		$error_message = "";
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	
		if(!preg_match($email_exp,$email)) {
			$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
		}
		
		$string_exp = "/^[A-Za-z .'-]+$/";
		
		if(!preg_match($string_exp,$first_name)) {
			$error_message .= 'The First Name you entered does not appear to be valid.<br />';
		}
		
		if(!preg_match($string_exp,$last_name)) {
			$error_message .= 'The Last Name you entered does not appear to be valid.<br />';
		}
		
		if(strlen($message) < 2) {
			$error_message .= 'The Comments you entered do not appear to be valid.<br />';
		}
		
		if(strlen($error_message) > 0) {
			died($error_message);
		}
	
		$email_message = "Form details below.\n\n";
	
		
		function clean_string($string) {
			$bad = array("content-type","bcc:","to:","cc:","href");
			return str_replace($bad,"",$string);
		}
	
		$email_message .= "First Name: ".clean_string($first_name)."\n";
		$email_message .= "Last Name: ".clean_string($last_name)."\n";
		$email_message .= "Email: ".clean_string($email)."\n";
		$email_message .= "Message: ".clean_string($message)."\n";
	
		// create email headers
		$headers = 'From: '.$email."\r\n".
					'Reply-To: '.$email."\r\n" .
					'X-Mailer: PHP/' . phpversion();
		
			
		if(@mail($email_to, $email_subject, $email_message, $headers)){
		?>
			
				<h2>Thank you!</h1>
				<p>Your submission has been received.</p>
		<?php

		} else{

		?>
				<h2>Sorry!</h1>
				<p>We had some issues. Try later.</p>
		<?php
		}
	}
?>

			<a href="../index.php" class="cta"><p>Go back to the site</p></a>
		</div>
	</body>
</html>