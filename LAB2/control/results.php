<?php


$hasError=0;
if(isset($_REQUEST["Submit"]))
{
if(empty($_REQUEST["name"]))
{
    echo "Name is required";
    $hasError=1;
}
else
{
    echo $_REQUEST["name"];
}
echo "<br>";


if(empty($_REQUEST["age"]))
{
    echo "Age is required";
    $hasError=1;
}
else
{
    echo $_REQUEST["age"];
}
echo "<br>";

if(empty($_REQUEST["gender"]))
{
    echo "Name is required";
    $hasError=1;
}
else
{
    echo $_REQUEST["gender"];
}
echo "<br>";

if(empty($_REQUEST["nidNumber"]))
{
    echo "NID is required";
    $hasError=1;
}
else
{
    echo $_REQUEST["nidNumber"];
}
echo "<br>";


if(empty($_REQUEST["contactNumber"]))
{
    echo "Contact is required";
    $hasError=1;
}
else
{
    echo $_REQUEST["contactNumber"];
}
echo "<br>";

if(empty($_REQUEST["email"]))
{
    echo "Email is required";
    $hasError=1;
}
else
{
    echo $_REQUEST["email"];
}
echo "<br>";
if(empty($_REQUEST["password"]))
{
    echo "Password is required";
    $hasError=1;
}
else
{
    echo $_REQUEST["password"];
}
echo "<br>";

if(empty($_FILES["myfile"]["name"]))
{
    echo "No file selected";
}
else{
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/".$_REQUEST["name"].".jpg"))
    {
        echo "file uploaded";
    }
    else
    {
        echo "file not uploaded";
    }
}

if($hasError==0)
{
    $phpArray= array(
        "Name"=>$_REQUEST["name"],
        "Age"=>$_REQUEST["age"],
        "Gender"=>$_REQUEST["gender"],
        "NidNumber"=>$_REQUEST["nidNumber"],
        "ConatactNumber"=>$_REQUEST["contactNumber"],
        "Email"=>$_REQUEST["email"],
        "Password"=>$_REQUEST["password"],
        "MyFile"=>$_REQUEST["myfile"]



    );

    $phpdata=json_decode(file_get_contents("../data/data.json"));
    $phpdata[]=$phpArray;

    $myJsonObj=json_encode($phpdata,JSON_PRETTY_PRINT);
    if(file_put_contents("../data/data.json",$myJsonObj))
    {
        echo "json data written";
    }
    else
    {
        echo "error occured";
    }

}



}






?>
