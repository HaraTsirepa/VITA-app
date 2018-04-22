<?php
//include auth.php file on all secure pages
include("auth.php");


?>
<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query="SELECT * FROM `cv` WHERE CONCAT(`onoma`, `epwnymo`, `kinhto`, `email`, `glwsses_program`, `platformes`, `telikos_vathmos_pt`, `platformes_logismikou`, `endiaferonta`) LIKE'%".$valueToSearch."%'";
      $search_result = filterTable($query);
}
else{
	  $query = "SELECT * FROM `cv` ";
	$search_result = filterTable($query);

}

  function filterTable($query)
  {
  	$connect = mysqli_connect("localhost","root","","sygxrona_themata_database");
  	$filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Vita</title>
<style>
table,tr,th,td
{
	border: 1px solid black;
}
</style>
<link rel="stylesheet" href="css/a13.css"></link>
</head>
     <body>

<h2>VITA</h2>
<p>Γειά σου <?php echo $_SESSION['username']; ?>!</p>

    <form action="anazhthsh.php" method="post">
    <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
    <input type="submit" name="search" value="Filter"><br><br>
            

    <table  align="center">
     	<tr>
     	<th>Όνομα</th>
     	<th>Επώνυμο</th>
     	<th>Κινητό</th>
     	<th>Ε-mail</th>
     	<th>Γλώσσες Προγραμματισμού</th>
     	<th>Πλατφόρμες</th>
     	<th>Βαθμός Πτυχίου</th>
     	<th>Πλατφόρμες Λογισμικού</th>
        <th>Ενδιαφέροντα</th>
     	

     	</tr>
     	<?php while($row = mysqli_fetch_array($search_result)):?>
     		<tr>
     		       <td><?php echo $row['onoma'];?></td>
                   <td><?php echo $row['epwnymo'];?></td>
                   <td><?php echo $row['kinhto'];?></td>
                   <td><?php echo $row['email'];?></td>
                   <td><?php echo $row['glwsses_program'];?></td>
                   <td><?php echo $row['platformes'];?></td>
                   <td><?php echo $row['telikos_vathmos_pt'];?></td>
                   <td><?php echo $row['platformes_logismikou'];?></td>
                   <td><?php echo $row['endiaferonta'];?></td>
                   </tr>
     	<?php endwhile;?>

     </table>
	