<?php
//include auth.php file on all secure pages
include("auth.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>cv</title>
<link rel="stylesheet" href="css/a9.css"></link>
</head>
<body >
<h2>VITA</h2>
<p>Γειά σου <?php echo $_SESSION['username']; ?>!</p>
<a href="LogInStudent.php">Επιστροφή</a><br><br>
<a href="logout.php">Aποσύνδεση</a><br>
<div class="container">
<h3>Στοιχεία Φοιτητή</h3>
<?php
require('db.php');
$username=$_SESSION['username'];
$query = "SELECT * FROM `cv` WHERE username='$username'";
  $result1 = mysqli_query($con,$query) or die(mysql_error());

?>
    

<table>
	<?php while($row1=mysqli_fetch_array($result1)):;?>

		<tr><td>Όνομα:</td><td> <?php echo $row1[1];?></td></tr>
		<tr><td>Επώνυμο: </td><td><?php echo $row1[2];?></td></tr>
		<tr><td>Κινητό: </td><td><?php echo $row1[4];?></td></tr>
		<tr><td>E-mail: </td><td><?php echo $row1[5];?></td></tr>
		<tr><td>Γλώσσες Προγραμματισμού: </td><td><?php echo $row1[6];?></td></tr>
		<tr><td>Πλατφόρμες: </td><td><?php echo $row1[7];?></td></tr>
		<tr><td>Τελικός Βαθμός: </td><td><?php echo $row1[8];?></td></tr>
		<tr><td>Πλατφόρμες Λογισμικού: </td><td><?php echo $row1[9];?></td></tr>
		<tr><td>Ενδιαφέροντα: </td><td><?php echo $row1[10];?></td></tr>
		</tr>
	<?php endwhile;?>
</table>
</div>
</form>
<br>
<br>