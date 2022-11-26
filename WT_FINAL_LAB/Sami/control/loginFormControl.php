<?php
include '../model/db.php';
session_start();

if(isset($_REQUEST["Submit"]))
{

    $mydb=new db();
    $conobj=$mydb->openCon();

    $results=$mydb->checkUser($conobj,"user",$_SESSION["uname"],$_SESSION["password"]);
    if($results==true)
    {
        header("Location:../view/profile.php");
    }
    else{
        echo "Invalid User";
    }
   
}

?>