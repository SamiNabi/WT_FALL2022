<?php
include '../control/results.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title> Library Management System </title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    #form{
        display:block;
  width: 30%;
  padding:45px;
  border-radius: 30px;
  margin: 80px; /*Space between two bloc*/
  background-color:#d0b8b85e;
  font-weight: bold;
  text-decoration: None;
  font-family: "Times New Roman", Times, serif;    
    }

    </style>
    </head>
<body>       <!-- SEller//-->

<form action="" methods="POST" enctype="multipart/form-data">


<div id="form" class="formcontent">
<table>

<tr>
    
    <td> <h2><b>Seller Registration</b></h2> </td>
</tr>
<tr>
    <td> Name </td>
    <td> <input type="text" name="name"> </td>
</tr>

<tr>
    <td> Age </td>
    <td> <input type="number" name="age"> </td>
</tr>
<tr>
    <td>Gender</td>
    <td> <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
<tr>
    <td> NID Number </td>
    <td> <input type="text" name="nidNumber"> </td>
</tr>
<tr>
    <td> Attach NID  </td>
    <td> <input type="file" name="myfile"> </td>
</tr>
<tr>
    <td> Contact Number </td>
    <td> <input type="text" name="contactNumber"> </td>
</tr>
<tr>
    <td> Email </td>
    <td> <input type="text" name="email"> </td>
</tr>
<tr>
    <td> Password </td>
    <td> <input type="password" name="password"> </td>
</tr>
<tr>
    <td> <input type="reset" name="reset"> </td>
</tr>
<tr>
    <td> <input type="submit" name="Submit"> </td>
</tr>

</table>
</div>

</body>


</html>
