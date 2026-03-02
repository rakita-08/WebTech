<?php
// welcome.php

// Get username from URL
$user = isset($_GET["user"])
        ? htmlspecialchars($_GET["user"])
        : "Guest";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 60px; text-align: center; }
    h1   { color: darkgreen; }
    a    {
      display: inline-block; margin-top: 20px;
      padding: 9px 20px; background-color: darkred;
      color: white; text-decoration: none; border-radius: 4px;
    }
  </style>
</head>
<body>

  <h1>&#10004; Welcome, <?php echo $user; ?>!</h1>
  <p>You have successfully logged in.</p>
  <a href="login.html">Logout</a>

</body>
</html>