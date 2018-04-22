<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Vita</title>
<link rel="stylesheet" href="css/a2.css"></link>
</head>
<body >
<h2>VITA</h2>
<ul>
  <li><a href="whoweare.php">Πλατφόρμα Vita</a></li>
  <li><a href="help.php">Πως μπορώ να εγγραφώ</a></li>
</ul>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
  $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
  $username = mysqli_real_escape_string($con,$username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($con,$password);
  //Checking is user existing in the database or not
        $query = "SELECT * FROM `admins` WHERE username='$username'
         and password='$password'";
  $result = mysqli_query($con,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['username'] = $username;
            // Redirect user to index.php
      header("Location: LogInAdmin.php");
         }elseif($rows==0){   
          //elegxos an uparxei eggrafh sto table students 
     $query = "SELECT * FROM `students` WHERE username='$username'
     and password='$password'";
     $result1 = mysqli_query($con,$query) or die(mysql_error());
     $rows1 = mysqli_num_rows($result1);
          if($rows1==1){
      $_SESSION['username'] = $username;
            // Redirect user to index.php
      header("Location: LogInStudent.php");
         }
        else{
  echo "<div class='form'>
    <h3>Username/password is incorrect.</h3>
    <br/>Click here to <a href='login1.php'>Login</a></div>";
  }


  
  }
  else{
  echo "<div class='form'>
   <h3>Username/password is incorrect.</h3>
   <br/>Click here to <a href='login1.php'>Login</a></div>";
  }
    }else{
?>

<div class="container">
<img src="image1.png">
<h3>ΣΥΝΔΕΣΗ</h3>
<form action=""  autocomplete="off" method="post" name="">
   <table>
 
      <td><input type="text" name="username" placeholder="username"  ></td>
      </tr>
       <tr>
   
      <td><input type="password" name="password" placeholder="password" ></td>
      </tr>
       <tr>
      <td><div class="btn1">
      <input type="submit" name="login_btn" value="Login" /></div>
      </td>
      </tr>
      </table>
      </form>

      
<p>Δεν είστε εγγεγραμμένος; <br><a href='Registration1.php'>Εγγραφείτε εδώ!</a></p>
</div>
</form>
<br>
<br>

<?php } ?>

</body>
</html>