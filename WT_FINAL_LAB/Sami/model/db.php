<?php


class db
{



function openCon()
{

    $conn = new mysqli("localhost","root","","manager");
    return $conn;


}

function insertUser($conn, $tablename,$uname,$password,$age,$gender,$nidNumber,$contactNumber,$email)
{
    $sql="INSERT INTO $tablename(uname,password,age,gender,nidNumber,contactNumber,email) VALUES
    ('$uname','$password','$age','$gender','$nidNumber','$contactNumber','$email')";

    if($conn->query($sql)==TRUE)
    {

        echo "data Written";
    }
    else
    {
        echo "error occured".$conn->error;
    }

}


function closeCon($conn)
{
    $conn->close();
}


function checkUser($conn,$tablename,$uname,$password)
{
    $sql=" SELECT * FROM $tablename WHERE uname='$uname' AND password='$password' ";
    $result= $conn->query($sql);
    if($result->num_rows >0)
    {
        return true;
    }
    else
    {
        return false;
    }

}



function showAll($conn,$tablename)
{
    $sql="SELECT * FROM $tablename";
    $result= $conn-> query($sql);
    return $result;
}














}


?>