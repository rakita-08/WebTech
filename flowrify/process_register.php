<?php
$host = "localhost";
$user = "rakeeta";
$pw = "rakeee";
$db = "flowrify";

$con = mysqli_connect($host, $user, $pw, $db);
if(! $con){
    die("Error" . mysqli_connect_error());
}

$fname = $_POST["first_name"];
$lname = $_POST["last_name"];
$email = $_POST["email"];
$pw = md5($_POST["password"]);
$query = "insert into user_data(First_Name, Last_Name, Email, Password)
 values ('$fname','$lname','$email','$pw')";
$res = mysqli_query($con, $query);
if($res){
    echo "user_registration successful";
}else{
    echo "registration error";
}
?>