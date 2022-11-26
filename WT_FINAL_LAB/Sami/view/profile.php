<html>
    <body>

<?php
include '../control/profieControl.php';


session_start();
if(empty($_SESSION["uname"]))
{
    header("Location: ../view/login.php");
}
?>
Hello

<?php
echo $_SESSION["uname"];
?>
    </body>
</html>