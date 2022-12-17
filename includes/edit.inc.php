<?php

if(isset($_POST['submit'])){

    require_once "../index.php";
    require_once "../classes/dbh.class.php";
    require_once "../classes/edit.class.m.php";
    require_once "../classes/edit.class.c.php";
        
    $fname = htmlspecialchars($_POST['fname']);    
    $lname = htmlspecialchars($_POST['lname']);
    $bday = htmlspecialchars($_POST['bday']);
    $id = $_GET['id'];

    $edit = new Editcontroller($fname, $lname, $bday, $id);

    $edit->getData();
    
    header("location: ../index.php");
}