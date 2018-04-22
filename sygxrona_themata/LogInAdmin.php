<?php
//include auth.php file on all secure pages
include("auth.php");


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>cv</title>
<link rel="stylesheet" href="css/a5.css"></link>
</head>
<body >
<h2>VITA </h2>
<p>Γειά σου <?php echo $_SESSION['username']; ?>!</p>
<a href="logout.php">Αποσύνδεση</a>
<div class="container">
<h3>ΕΠΙΛΟΓΕΣ</h3>
<ul>
 <li><a href='RegistrationNewStudent.php'>Καταχώρηση Φοιτητή</a></li>
<li><a href='RegistrationNewAdmin.php'>Καταχώρηση Διαχειριστή</a><li>
<li><a href='view.php'>Προβολή καταχωρημένων βιογραφικών</a></li>
<li><a href='anazhthsh.php'>Αναζήτηση φοιτητών</a></li>
</ul>
<br>
</form>
<br>
<br>


</body>
</html>