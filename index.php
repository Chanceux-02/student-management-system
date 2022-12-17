<?php 

require_once "classes/dbh.class.php";
include_once "classes/show.class.m.php";

$con = new Dbh;
$answer = $con->connect();

$show = new Show;
$row = $show->data();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>CRUD</title>
</head>
<body>

<h1>Student Management System</h1>


<table>
    <a href="add.php">Add Student</a>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birth Day</th>
            </tr>

            <?php foreach($row as $key => $val){ ?>    <!-- amuni ang mag show sang data halin sa slod sang database-->

            <tr>
                <td><?= $val['first_name'];?> </td>  <!-- nag gamit ko di shorthand para mag echo-->
                <td><?= $val['last_name'];?></td>   <!-- halin ni sa sa may add.php ang mga last_name-->
                <td><?= $val['birthday'];?></td>
                
                <td> <a href="includes/delete.inc.php?id=<?= $val['id'];?>" name="delete">delete</a> </td>
                <td> <a href="edit.php?id=<?= $val['id'];?>" name="edit">edit</a> </td>
                
            </tr>

            <?php } ?>  <!-- amuni ang mag show sang data halin sa slod sang database-->

</table>


    
</body>
</html>