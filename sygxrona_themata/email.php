<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Εγγραφή</title>
</head>
<link rel="stylesheet" href="css/a8.css"></link>
<body>
<h2>CV </h2>
<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  // Pear Mail Library
require_once "Mail.php";

$from = '<urwsfouggari@gmail.com>';
$to = '<urwsfouggari@yahoo.com>';
$subject = 'Hi!';
$body = "Hi,\n\nHow are you?";

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'johndoe@gmail.com',
        'password' => 'passwordxxx'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');

?>
<h2>Εγγραφή</h2>


 <form method="post">
  Email: <input name="email" type="text" /><br />
  Subject: <input name="subject" type="text" /><br />
  Message:<br />
  <textarea name="comment" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Submit" />
  </form>
  
</body>
</html>