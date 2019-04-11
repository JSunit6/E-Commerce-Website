<?php
require "phpmailer/PHPMailerAutoload.php"; //include phpmailer class

$email=htmlentities($_POST['forgotemail']);
$conn=mysql_connect('localhost','root');
if(!$conn)
{
	die("Connection not established".mysql_error());
}
else
{
	mysql_select_db("mca_project_1317",$conn);
	$query="select password from reg_dtls where email_id='".$email."'";
	$result=mysql_query($query);
		if(isset($result))
		{
		    $row=mysql_fetch_assoc($result);
			$pass=$row['password'];
			
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
		    $message="You had requested for password recovery and your password is:".$pass." <br>with regards,<br> Football Accessories.";
		    $mail->SetFrom("footballaccessoriesfeedback@gmail.com", "Football Accessories");
		    $mail->AddReplyTo("sunit6k@gmail.com", "Sunit");
		    $mail->Subject = "Password Recovery";      // Subject (which isn't required)  
		    $mail->MsgHTML($message);
		 
		    // Send To  
		    $mail->AddAddress($email); // Where to send it - Recipient
		    $result = $mail->Send();		// Send!  
			$message = $result ? 'Successfully Sent!' : 'Sending Failed!';   
			unset($mail);

			echo '<script>
					alert("Your password has been mailed to you. You will be redicted to login page.");
				</script>';
				header("Location:FootballWeb.php");	
		}
		else
		{
			echo '<script>
				alert("please enter a valid email-address");
			</script>';
		}











    
      



}

?>