<?php 

include_once "includes/add.inc.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Students</title>
</head>
<body>

    <h1>Adding Students</h1>
    <a href="index.php">Home</a>

    <form action="includes/add.inc.php" method="post">
        <input type="text" name="fname" placeholder="First Name">
        <input type="text" name="lname" placeholder="Last Name">
        <input type="text" name="bday" placeholder="Birth day">
        <button type="submit" name="submit">Add Student</button>
    </form>
    
</body>
</html>