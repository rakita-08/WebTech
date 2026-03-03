<?php
// counter.php

// Start session — must be first line
session_start();

// If count not set, initialize to 0
if (!isset($_SESSION["page_views"])) {
    $_SESSION["page_views"] = 0;
}

// Increment count on every page load/refresh
$_SESSION["page_views"]++;

$count = $_SESSION["page_views"];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Page View Counter</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 60px; text-align: center; }
    h2   { color: darkblue; }
    .counter-box {
      display: inline-block;
      padding: 30px 50px;
      background-color: darkblue;
      color: white;
      border-radius: 10px;
      margin: 20px;
    }
    .counter-box h1 { font-size: 60px; margin: 0; }
    .counter-box p  { font-size: 18px; margin: 5px 0 0 0; }
    a {
      display: inline-block; margin: 10px;
      padding: 9px 20px; background-color: darkred;
      color: white; text-decoration: none; border-radius: 4px;
    }
  </style>
</head>
<body>

  <h2>Page View Counter using SESSION</h2>

  <div class="counter-box">
    <h1><?php echo $count; ?></h1>
    <p>Page Views</p>
  </div>

  <br>

  <p>Refresh the page to increase the counter.</p>
  <p>Session ID: <b><?php echo session_id(); ?></b></p>

  <!-- Reset counter -->
  <a href="reset_count.php">Reset Counter</a>

</body>
</html>