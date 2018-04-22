<?php
//include auth.php file on all secure pages
include("auth.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Εγγραφή</title>
</head>
<link rel="stylesheet" href="css/katax2.css"></link>
<body>

<h2>VITA</h2>
<p>Γειά σου <?php echo $_SESSION['username']; ?>!</p>
<a href="LogInAdmin.php">Επιστροφή</a><br><br>
<a href="logout.php">Aποσύνδεση</a><br>
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
    $age = stripslashes($_REQUEST['age']);
    $age = mysqli_real_escape_string($con,$age);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $gender = mysqli_real_escape_string($con,$_POST['gender']);
    $status = mysqli_real_escape_string($con,$_POST['idiothta']);
    $trn_date = date("Y-m-d H:i:s");


 if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $error = true;
         echo "<div class='form'>
<h3>Username/password is incorrect.</h3>";
    }
     if (!preg_match("/^[a-zA-Z ]+$/",$surname)) {
        $error = true;
         echo "Παρακαλώ συμπληρώστε σωστά όλα τα πεδία!";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        echo "Υπάρχει λάθος στο e-mail!";
    }

    if($password != $cpassword) {
        $error = true;
        echo "Οι κωδικοί δεν ταιριάζουν!";
    }
    $query = "SELECT * FROM `admins` WHERE username='$username'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
          $error = true;
        echo "Υπάρχει ήδη εγγραφή με το ίδιο username!!";
        
         }
     if (!$error) {
        $query = "INSERT into `admins` (name,surname,username,age, password,gender,status, email, trn_date)
VALUES ('$name','$surname','$username','$age','$password','$gender', '$status', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='LogI.php'>Login</a></div>";
        }
    }
}else{
?>

<div class="container">
<form name=""  method="post">
<h3>Φόρμα εγγραφής νέου διαχειριστή</h3>
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
      <td>Ηλικία:</td>
      <td><input type="text" name="age" class="textInput"></td>
      </tr>
       <tr>
      <td>Email:</td>
      <td><input type="email" name="email" class="textInput"></td>
      </tr>
      
       <tr>
      <td>Κωδικός:</td>
      <td><input type="password" name="password" class="textInput"></td>
      </tr>
       <tr>
      <td>Επιβεβαίωση κωδικού:</td>
      <td><input type="password" name="cpassword" class="textInput"></td>
      </tr>
       <tr>
        <td>Φύλο:</td>
      <td><input type="radio" name="gender"  value="male" checked> Άνδρας<br><input type="radio" name="gender" value="female">Γυναίκα</td><br>
      </tr>
      <td>Ιδιότητα:</td>
      <td><input type="radio" name="idiothta"  value="student" checked>Μαθητής<input type="radio" name="idiothta" value="professor">Καθη/τής</td>
      </tr>
      <tr>
      <td>
      <br> <div class="btn">
      <input type="submit" name="submit" value="Εγγραφή" /></div>
      </td>
      </tr></table>
      </table>
</form>
</div>
<br>
<br>
<br>
<br>
<img src="images/orbit.gif" >
<?php } ?>
</body>
</html>