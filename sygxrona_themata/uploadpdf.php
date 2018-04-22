<?php
//include auth.php file on all secure pages
include("auth.php");


?>
<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<head>
<title>CV</title>
<link rel="stylesheet" href="css/a11.css"></link>
</head>
<body>
<h2>VITA</h2>
<p>Γειά σου <?php echo $_SESSION['username']; ?>!</p>
<a href="LogInStudent.php">Επιστροφή</a><br><br>
<a href="logout.php">Aποσύνδεση</a><br>

<div class="container">
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" />

	<button type="submit" name="btn-upload">upload</button>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>Επιτυχής εισαγωγή!!!...  </label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Προέκυψε πρόβλημα, προσπαθήστε ξανά!</label>
        <?php
	}
	else
	{
		?>
        <label>Ανεβάστε αρχείο (PDF or DOC)</label>
        <?php
	}
	?>
</div>
</body>
</html>