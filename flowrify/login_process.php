<?php
if(empty($_POST["username"]) | empty($_POST["password"])){
    header("Location:login.php");
}

$uname = $_POST["username"];
$pw = $_POST["password"];

if($uname == "rakeeta" & $pw == "rakeee"){
    header("Location:dashboard.php");
} else{
    header("Location:login.php");
}

?>