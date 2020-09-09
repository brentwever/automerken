<?php
include ("header.php");

if (isset($_POST['submit'])){
    $automerk = $_POST['automerk'];
    $type = $_POST['type'];
    insert_database($automerk,$type);
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
        <h3><strong>Geef hier uw geliefde automerk op:</strong><h3>
         
            <input class="form-control" type="text" name="automerk" placeholder='Uw geliefde automerk'><br>
            <input class="form-control" type="text" name="type" placeholder="type auto"><br>
            <input class="btn btn-success" type="submit" name="submit" value="Verstuur"/>
          
    </form>

</div>
    
</body>
</html>