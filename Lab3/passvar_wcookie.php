<?php
// cookies.php
// Must set cookies BEFORE any HTML output

// SET cookies
setcookie("username",  "Raynee",  time() + (60 * 60 * 24), "/"); // 1 day
setcookie("course",    "B.Sc.CSIT",      time() + (60 * 60 * 24), "/");
setcookie("rollno",    "02831",     time() + (60 * 60 * 24), "/");
setcookie("lastvisit", date("d-m-Y"),   time() + (60 * 60 * 24), "/");
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Cookies</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 40px; }
    h2   { color: darkblue; }
    h3   { color: darkgreen; margin-top: 25px; }
    table { border-collapse: collapse; width: 450px; }
    th { background-color: darkblue; color: white; padding: 9px; }
    td { border: 1px solid #ccc; padding: 9px; }
  </style>
</head>
<body>

  <h2>PHP Cookies Demo</h2>

  <h3>1. Cookies Set</h3>
  <p>The following cookies have been set for 1 day:</p>
  <table>
    <tr><th>Cookie Name</th><th>Value</th></tr>
    <tr><td>username</td><td>Raynee</td></tr>
    <tr><td>course</td><td>B.Sc.CSIT</td></tr>
    <tr><td>rollno</td><td>02831</td></tr>
    <tr><td>lastvisit</td><td><?php echo date("d-m-Y"); ?></td></tr>
  </table>

  <h3>2. Reading Cookies using $_COOKIE</h3>
  <?php
  // Check and read each cookie
  if (isset($_COOKIE["username"])) {
      echo "Username  : " . $_COOKIE["username"]  . "<br>";
      echo "Course    : " . $_COOKIE["course"]    . "<br>";
      echo "Roll No   : " . $_COOKIE["rollno"]    . "<br>";
      echo "Last Visit: " . $_COOKIE["lastvisit"] . "<br>";
  } else {
      echo "Cookies not yet available. Please <b>refresh the page once</b>.";
  }
  ?>

  <h3>3. All Cookies on this Page</h3>
  <?php
  if (!empty($_COOKIE)) {
      echo "<table>";
      echo "<tr><th>Name</th><th>Value</th></tr>";
      foreach ($_COOKIE as $name => $value) {
          echo "<tr><td>" . $name . "</td><td>" . $value . "</td></tr>";
      }
      echo "</table>";
  } else {
      echo "No cookies found. Refresh page.";
  }
  ?>

  <h3>4. Delete a Cookie</h3>
  <?php
  // Delete cookie by setting expiry in the past
  setcookie("rollno", "", time() - 3600, "/");
  echo "Cookie 'rollno' has been deleted (set expiry to past).<br>";
  echo "Refresh to confirm it is removed.";
  ?>

</body>
</html>