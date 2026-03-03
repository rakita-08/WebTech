<?php
// url_receive.php

echo "<h2>Variables Received from URL</h2>";

// Show the full URL
echo "<b>Current URL:</b> ";
echo "http://" . $_SERVER["HTTP_HOST"] .
     $_SERVER["REQUEST_URI"] . "<br><br>";

// Check if variables exist in URL using $_GET
if (isset($_GET["name"])) {

    $name   = htmlspecialchars($_GET["name"]);
    $course = htmlspecialchars($_GET["course"]);
    $age    = htmlspecialchars($_GET["age"]);

    echo "<h3>Received Values:</h3>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr style='background:darkblue; color:white;'>";
    echo "<th>Parameter</th><th>Value</th></tr>";
    echo "<tr><td>name</td><td>$name</td></tr>";
    echo "<tr><td>course</td><td>$course</td></tr>";
    echo "<tr><td>age</td><td>$age</td></tr>";
    echo "</table>";

    echo "<br><b>All \$_GET variables:</b><br>";
    foreach ($_GET as $key => $value) {
        echo "$key = " . htmlspecialchars($value) . "<br>";
    }

} else {
    echo "No variables received in URL.<br>";
}

echo "<br><a href='url_form.html'>Go Back</a>";
?>