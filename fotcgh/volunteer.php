<?php
//DO NOT ADD ANYTHING ABOVE THIS LINE, AS YOUR PHP SCRIPT WILL NOT WORK

$email = "fotcgh@yahoo.com";
$message = "The following information was submitted from the form on your website:\n
";
$message .= "First Name: ".$_REQUEST["name"]."\n\n";
$message .= "Email address: ".$_REQUEST["email"]."\n\n";
$message .= "Message: ".$_REQUEST["phone"]."\n\n";
$headers2 = "MIME-Version: 1.0\r\n"
           ."Content-Type: $contentType; charset=utf-8\r\n"
           ."Content-Transfer-Encoding: 8bit\r\n"
           ."From: =?UTF-8?B?".base64_encode(".$email.")."?= <".$email.">\r\n"
           ."Reply-To: ".$email."\r\n"
           ."X-Mailer: PHP/".phpversion();
mail( $email, "Hi, check this voluteer out ", $message,$headers2 );
header("Location: http://fotcgh.org/thanks.html");
?>




