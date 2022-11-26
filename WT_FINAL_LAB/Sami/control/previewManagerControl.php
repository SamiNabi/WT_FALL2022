<?php
include '../model/db.php';
session_start();

if(isset($_REQUEST["Submit"]))
{

    

    

    $mydb=new db();
    $conobj=$mydb->openCon();
    $mydb->insertUser($conobj,"user",$_SESSION["uname"],$_SESSION["password"],$_SESSION["age"],$_SESSION["gender"],
    $_SESSION["nidNumber"],$_SESSION["contactNumber"],$_SESSION["email"]);
    $mydb->closeCon($conobj);

    header("Location: ../view/loginForm.php");



}





?>


