<?php
// display.php

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $gender  = htmlspecialchars($_POST["gender"]);
    $course  = htmlspecialchars($_POST["course"]);
    $address = htmlspecialchars($_POST["address"]);

    // Hobbies is an array (checkboxes)
    $hobbies = isset($_POST["hobbies"])
               ? implode(", ", $_POST["hobbies"])
               : "None selected";
?>

<!DOCTYPE html>
<html>
<head><title>Form Data</title></head>
<body>

  <h2>Submitted Details</h2>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>Field</th>
      <th>Value</th>
    </tr>
    <tr>
      <td>Name</td>
      <td><?php echo $name; ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $email; ?></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><?php echo $gender; ?></td>
    </tr>
    <tr>
      <td>Course</td>
      <td><?php echo $course; ?></td>
    </tr>
    <tr>
      <td>Hobbies</td>
      <td><?php echo $hobbies; ?></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><?php echo $address; ?></td>
    </tr>
  </table>

  <br>
  <a href="form.html">Go Back</a>

</body>
</html>

<?php } else {
    echo "No data submitted.";
} ?>
