<?php

$message="Hello";
    require "phpmailer/PHPMailerAutoload.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "footballaccessoriesfeedback@gmail.com"; // Your full Gmail address
    $mail->Password   = "sunitsiddhanth9391"; // Your Gmail password
      
    // Compose
    $mail->SetFrom("footballaccessoriesfeedback@gmail.com", "Football");
    $mail->AddReplyTo("sunit6k@gmail.com", "Sunit");
    $mail->Subject = "New Contact Form Enquiry";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress("sunit6k@gmail.com", "SID"); // Where to send it - Recipient
    $result = $mail->Send();		// Send!  
	$message = $result ? 'Successfully Sent!' : 'Sending Failed!';   
	echo $message;   
	unset($mail);


?>