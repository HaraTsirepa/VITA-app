<?php
//include auth.php file on all secure pages
include("auth.php");


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>cv</title>
<link rel="stylesheet" href="css/a4.css"></link>
</head>
<body >
<h2>VITA</h2>
<p>Γειά σου <?php echo $_SESSION['username']; ?>!</p>
<a href="logout.php">Aποσύνδεση</a>
<div class="container">
<h3>ΕΠΙΛΟΓΕΣ</h3>
<ul>
  <li><a href="https://drive.google.com/open?id=0B8AwICCwXsscWWxqTi1Tb184OE0">Οδηγίες για cv</a></li>
  <li><a href='Katax_cv.php'>Καταχώρηση Βιογραφικού</a></li>
  <li><a href='probolh_cv.php'>Προβολή Βιογραφικού</a></li>
   <li><br><a href='uploadpdf.php'>Υποβολή Pdf</a></li>
</ul>
</div>
</form>
<br>
<br>


</body>
</html>