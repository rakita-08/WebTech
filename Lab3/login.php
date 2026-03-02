<?php
// login.php

// Valid credentials
$validUsername = "admin";
$validPassword = "admin123";

// Get submitted values
$username = $_POST["username"];
$password = $_POST["password"];

// Validate
if ($username == $validUsername && $password == $validPassword) {
    // Correct — redirect to welcome page
    header("Location: welcome.php?user=" . $username);
    exit;
} else {
    // Wrong — redirect back to login with error
    header("Location: login.html?error=1");
    exit;
}
?>