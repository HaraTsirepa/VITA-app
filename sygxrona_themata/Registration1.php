<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Εγγραφή</title>
</head>
<body>
<link rel="stylesheet" href="css/a7.css"></link>
<?php
if(isset($_POST['submit'])) 
{

$message=
'Full Name: '.$_POST['fullname'].'<br />
Subject:  '.$_POST['subject'].'<br />
Email:  '.$_POST['emailid'].'<br />
';
    require "phpmailer/class.phpmailer.php"; //include phpmailer class
      
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
    $mail->Username   = "urwsfouggari@gmail.com"; // Your full Gmail address
    $mail->Password   = ""; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
    $mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
    $mail->Subject = "New Contact Form Enquiry";      // Subject (which isn't required)  

 
    // Send To  
    $mail->AddAddress("recipientemail@gmail.com", "Recipient Name"); // Where to send it - Recipient
    $result = $mail->Send();    // Send!  
  $message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
  unset($mail);

}
?>
   <h2>VITA</h2>
   <ul>
  <li><a href="whoweare.php">Πλατφόρμα Vita</a></li>
  <li><a href="help.php">Πως μπορώ να εγγραφώ</a></li>
</ul>

   <div class="container">
   <h3>ΕΓΓΡΑΦΗ</h3>
      <form name="form1" id="form1" action="" method="post">

            <input type="text" name="fullname" placeholder="Full Name" />
            <br />
            <input type="text" name="subject" placeholder="Subject" />
            <br />
            <input type="text" name="emailid" placeholder="Email" />
            <input type="submit" name="submit" value="Send" />
        
      </form>
      <p><?php if(!empty($message)) echo $message; ?></p>
    </div>
          
</body>
</html>