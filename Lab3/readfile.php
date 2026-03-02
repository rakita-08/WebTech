<?php
// readfile.php

$filename = "students.txt";

echo "<h2>File Content — " . $filename . "</h2>";

// Check if file exists
if (!file_exists($filename)) {
    echo "Error: File '$filename' not found.";
    exit;
}

// Read all lines from file into array
$lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr style='background-color:darkblue; color:white;'>";
echo "<th>Sr. No.</th>";
echo "<th>Name</th>";
echo "<th>Marks</th>";
echo "<th>Result</th>";
echo "</tr>";

$sr = 1;

foreach ($lines as $line) {

    // Split each line by comma
    $data = explode(",", $line);

    $name   = trim($data[0]);
    $marks  = trim($data[1]);
    $result = trim($data[2]);

    // Color row based on result
    $bgColor = ($result == "Pass") ? "#e8f8e8" : "#fde8e8";

    echo "<tr style='background-color: $bgColor;'>";
    echo "<td>" . $sr++   . "</td>";
    echo "<td>" . $name   . "</td>";
    echo "<td>" . $marks  . "</td>";
    echo "<td>" . $result . "</td>";
    echo "</tr>";
}

echo "</table>";

// Also show raw file content
echo "<br><h3>Raw File Content:</h3>";
echo "<pre>" . htmlspecialchars(file_get_contents($filename)) . "</pre>";
?>