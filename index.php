<?php
include ("header.php");


$query= "SELECT * FROM automerken";
$connectie_db = Databaseverbinding::database_verbinding_maken();
$result= mysqli_query($connectie_db,$query);


include ("footer.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<div class='container'>
<br>
<p>Geliefde automerken met type:</p>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Automerk</th>
      <th scope="col">Type</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($row = mysqli_fetch_array ($result)){
    ?>
    <tr>
  
      <th scope="row"><?php echo $id_grabber=$row['id']; ?> </th>
      <td><?php echo $automerk_grabber= $row['automerk']; ?></td>
      <td><?php echo $type_grabber= $row['type'];  ?></td>
      <td><a href='update.php?id=<?php echo $id_grabber?>'>Edit</a></td>
      <td><a href='delete.php?id=<?php echo $id_grabber?>'>Delete</a></td>

    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</body>
</html>