<?php
include ("header.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query= "SELECT * FROM automerken WHERE id=$id";
    $connectie_db = Databaseverbinding::database_verbinding_maken();
    $result= mysqli_query($connectie_db,$query);
    while ($row = mysqli_fetch_array ($result)){
        $id=$row['id'];
        $automerk=$row['automerk'];
        $type=$row['type'];
    };

}

if (isset($_POST['submit'])){
    $id_update = $_POST['id'];
    $automerk_update = $_POST['automerk'];
    $type_update = $_POST['type'];
    update($id_update,$automerk_update,$type_update);
    header('location: index.php');
}

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
    <form action="" method="POST">
        <div class="form-group">
        <br>
        <h3><strong>Wijzig hier uw geliefde automerk op:</strong><h3>
            <input hidden class="form-control" type="text" name="id" value='<?php echo $id ?>'><br>
            <input class="form-control" type="text" name="automerk" value='<?php echo $automerk ?>'><br>
            <input class="form-control" type="text" name="type" value='<?php echo $type ?>'><br>
            <input class="btn btn-success" type="submit" name="submit" value="Verstuur"/>
          
    </form>

</div>
    
</body>
</html>