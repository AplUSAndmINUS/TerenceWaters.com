<?php
	$errors = '';
	$myemail = 'terence@terencewaters.com';
	if(empty($_POST['fname']) ||
	   empty($_POST['lname']) ||
	   empty($_POST['email']) ||
	   empty($_POST['comments']))
	{
		$errors .= "\n Error: All fields are required";
	} else {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email_address = $_POST['email'];
		$message = $_POST['message'];
		$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			$emailErr = "Invalid email"; 
		}
		if (empty($errors)) {
			$to = $myemail;
			$email_subject = "Contact form submission: $fname $lname";
			$email_body = "You have received a new message from the site! ". 
			"Here are the details: \n Name: $fname + $lname \n".
			"Email: $email_address\n Message: \n $message";
			$headers = "From: $myemail\r\n";
			$headers .= "Reply-To: $email_address\r\n";
			$headers .= "X-Mailer: PHP/" + phpVersion();
			mail($to, $email_subject, $email_body, $headers);
			// redirect to the 'thank you' page 
			header('Location: contact-form-thank-you.html');
		}
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
	echo nl2br($errors);
?>
</body>
</html>
