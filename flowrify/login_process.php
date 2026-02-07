<?php
session_start();

if(empty($_POST["username"]) | empty($_POST["password"])){
    header("Location:login.php");
}

$uname = $_POST["username"];
$pass = $_POST["password"];

/*
if($uname == "rakeeta" & $pw == "rakeee"){
    header("Location:dashboard.php");
} else{
    header("Location:login.php");
} */

$host = "localhost";
$user = "rakeeta";
$pw = "rakeee";
$db = "flowrify";

$con = mysqli_connect($host, $user, $pw, $db);
if(!$con){
    die("Error" . mysqli_connect_error());
}
$query = "select * from user_data where Email = '$uname'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

if(password_verify($pass, $row["Password"])){
    $_SESSION["username"] = $uname;
    header("Location:dashboard.php");
} else{
    header("Location:login.php");
}
?>