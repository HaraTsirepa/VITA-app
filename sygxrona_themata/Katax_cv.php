<?php
//include auth.php file on all secure pages
include("auth.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>cv</title>
<link rel="stylesheet" href="css/a10.css"></link>
</head>
<body >
<h2>VITA </h2>
<p>Γειά σου <?php echo $_SESSION['username']; ?>!</p>
<a href="LogInStudent.php">Επιστροφή</a><br><br>
<a href="logout.php">Aποσύνδεση</a><br>
<div class="container">
<?php
require('db.php');
// If form submitted, insert values into the database.

$error = false;

if (isset($_REQUEST['submit'])){
    // removes backslashes
    $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
    $name = mysqli_real_escape_string($con,$name);
    $surname = stripslashes($_REQUEST['surname']);
        //escapes special characters in a string
    $surname = mysqli_real_escape_string($con,$surname);
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con,$username); 
    $phone = stripslashes($_REQUEST['phone']);
    $phone = mysqli_real_escape_string($con,$phone);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $glwsses_program = stripslashes($_REQUEST['glwsses_program']);
    $glwsses_program = mysqli_real_escape_string($con,$glwsses_program);
    $platformes = stripslashes($_REQUEST['platformes']);
    $platformes = mysqli_real_escape_string($con,$platformes);
    $telikos_vathmos = stripslashes($_REQUEST['telikos_vathmos']);
    $telikos_vathmos = mysqli_real_escape_string($con,$telikos_vathmos);
    $platformes_logismikou = stripslashes($_REQUEST['platformes_logismikou']);
    $platformes_logismikou = mysqli_real_escape_string($con,$platformes_logismikou);
    $endiaferonta = stripslashes($_REQUEST['endiaferonta']);
    $endiaferonta = mysqli_real_escape_string($con,$endiaferonta);


 if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $error = true;
         echo "<div class='form'>
<h3>Username/password is incorrect.</h3>";
    }
    if (!preg_match("/^[a-zA-Z ]+$/",$surname)) {
        $error = true;
         echo "Υπάρχει λάθος στο επίθετο σας!!";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        echo "Υπάρχει λάθος στο e-mail σας!";
    }
  
     $query = "SELECT * FROM `cv` WHERE username='$username'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
          $error = true;
        echo "Έχετε ήδη εισάγει το βιογραφικό σας!!!";
        
         }
     if (!$error) {
        $query = "INSERT into `cv` (onoma,epwnymo,username,kinhto,email,glwsses_program,platformes,telikos_vathmos_pt,platformes_logismikou,endiaferonta)
VALUES ('$name','$surname','$username','$phone','$email','$glwsses_program', '$platformes', '$telikos_vathmos', '$platformes_logismikou', '$endiaferonta')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>";
        }
    }
}else{
?>

<div class="container">
<form name=""  method="post">
<h3>ΥΠΟΒΟΛΗ ΣΤΟΙΧΕΙΩΝ</h3>
<table>
     <tr> 
      <td>Όνομα:</td>
      <td><input type="text" name="name"  class="textInput"></td>
      </tr>
       <tr> 
      <td>Επώνυμο:</td>
      <td><input type="text" name="surname" class="textInput"></td>
      </tr>
      <tr> 
      <td>Username:</td>
      <td><input type="text" name="username" class="textInput"></td>
      </tr>
      <tr> 
      <td>Κινητό:</td>
      <td><input type="text" name="phone" class="textInput"></td>
      </tr>
       <tr>
      <td>Email:</td>
      <td><input type="email" name="email" class="textInput"></td>
      </tr>
      
       <tr>
      <td>Γλώσσες Προγραμματισμού:</td>
      <td><input type="text" name="glwsses_program" class="textInput"></td>
      </tr>
       <tr>
      <td>Πλατφόρμες:</td>
      <td><input type="text" name="platformes" class="textInput"></td>
      </tr>
       <tr>
        <td>Τελικός Βαθμός:</td>
      <td><input type="text" name="telikos_vathmos"  class="textInput"></td>
      </tr>
      <tr>
      <td>Πλατφόρμες Λογισμικού:</td>
      <td><input type="text" name="platformes_logismikou"  class="textInput"></td>
      </tr>
      <tr>
      <td>Ενδιαφέροντα:</td>
      <td><input type="text" name="endiaferonta"  class="textInput"></td>
      </tr>
      <tr>
      <td>
      <br> <div class="btn">
      <input type="submit" name="submit" value="Υποβολή" /></div>
      </td>
      </tr></table>
      </table>

</form>
</div>
<?php } ?>
</body>
</html>