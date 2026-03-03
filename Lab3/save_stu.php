<?php
$host     = "localhost";
$user     = "rakeeta";        // your MySQL username
$password = "rakeee";            // your MySQL password (blank in XAMPP)
$database = "lab_6";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Get form values
$name    = htmlspecialchars($_POST["name"]);
$address = htmlspecialchars($_POST["address"]);
$phone   = htmlspecialchars($_POST["phone"]);
$age     = intval($_POST["age"]);
$gender  = htmlspecialchars($_POST["gender"]);

// Insert into database
$sql = "INSERT INTO students (name, address, phone, age, gender)
        VALUES ('$name', '$address', '$phone', $age, '$gender')";

if (mysqli_query($conn, $sql)) {
    echo "<h3 style='color:green;'>
            Student record saved successfully!
          </h3>";

    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>Field</th><th>Value</th></tr>";
    echo "<tr><td>Name</td><td>$name</td></tr>";
    echo "<tr><td>Address</td><td>$address</td></tr>";
    echo "<tr><td>Phone</td><td>$phone</td></tr>";
    echo "<tr><td>Age</td><td>$age</td></tr>";
    echo "<tr><td>Gender</td><td>$gender</td></tr>";
    echo "</table>";

} else {
    echo "Error saving record: " . mysqli_error($conn);
}

mysqli_close($conn);

echo "<br><a href='student_form.html'>Add Another Student</a>";
?>