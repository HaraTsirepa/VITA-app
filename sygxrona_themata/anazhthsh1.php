
<?php

if(isset($_POST['search']))
{
      $search_term = mysql_real_escape_string($_POST['search_box']);
      $sql .="WHERE onoma = '{$search_term}'";
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
<title>cv</title>
<style>
table,tr,th,td
{
  border: 1px solid black;
}
</style>
<link rel="stylesheet" href="css/a2.css"></link>
</head>
     <body>
     <h2>CV </h2>
     <form name="search_form" method="POST" action="display_data.php">
    <input type="text" name="search_box" placeholder="Value To Search"><br><br>
    <input type="submit" name="search" value="Filter"><br><br>
            

     <table>
      <tr>
      <th>όνομα</th>
      <th>Επώνυμο</th>
      <th>Ε-mail</th>
      <th>Γλώσσες Προγραμματισμού</th>
      </tr>
      <?php while($row = mysqli_fetch_array($search_result)):?>
        <tr>
               <td><?php echo $row['id'];?></td>
                   <td><?php echo $row['onoma'];?></td>
                   </tr>
      <?php endwhile;?>
     </table>