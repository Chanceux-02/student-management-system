<?php
    $id = $_GET['id'];

    require_once "classes/dbh.class.php";
    require_once "classes/edit.class.m.php";


    $place_holder = new Edit(); //dire gin call ang show nga class para ma call ang placeholder nga method
    $row = $place_holder->placeHolder($id); // gin assign ang id nga variable sa method para mag gana ang edit

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Information</title>
</head>
<body>

    <h1>Edit Information</h1>
    <a href="index.php">Home</a>
    
    <form action="includes/edit.inc.php?id=<?= $id;?>" method="post">
        <input type="text" name="fname" value = "<?= $row['first_name'];?>" >
        <input type="text" name="lname" value = "<?= $row['last_name'];?>" >
        <input type="text" name="bday" value = "<?= $row['birthday'];?>" >
        <button type="submit" name="submit">Update Student</button>
    </form>
    
</body>
</html>