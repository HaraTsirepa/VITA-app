<?php
//include auth.php file on all secure pages
include("auth.php");


?>
<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<head>
<title>Vita</title>
<link rel="stylesheet" href="css/a12.css"></link>
</head>
<h2>VITA</h2>
<p>Γειά σου <?php echo $_SESSION['username']; ?>!</p>
<a href="LogInStudent.php">Επιστροφή</a><br><br>
<a href="logout.php">Aποσύνδεση</a><br>
<body>
<div id="header">

</div>
<div id="body">
	<table  border="0.9"  align="center">
    <tr>
    <th colspan="4">Καταχωρημένα cv<label></label></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
	$sql="SELECT * FROM tbl_uploads";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
	}
	?>
    </table>
    </div>
</div>
</body>
</html>