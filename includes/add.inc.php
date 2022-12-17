<?php

if(isset($_POST['submit'])){

    require_once "../classes/dbh.class.php";
    require_once "../classes/add.class.m.php";
    require_once "../classes/add.class.c.php";
    
    

    $fname = htmlspecialchars($_POST['fname']);    
    $lname = htmlspecialchars($_POST['lname']);
    $bday = htmlspecialchars($_POST['bday']);

    $add = new Addcontroller($fname, $lname, $bday);

    $add->signupUser();

    header("location: ../index.php");
}