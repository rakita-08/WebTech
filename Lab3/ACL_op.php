<?php
// operators.php

$a = 20;
$b = 6;

echo "<h2>PHP Operators Demo</h2>";
echo "<b>a = $a, b = $b</b><br><br>";

// -----------------------------------------------
// ARITHMETIC OPERATORS
// -----------------------------------------------
echo "<h3>1. Arithmetic Operators</h3>";
echo "a + b  = " . ($a + $b)  . "<br>";   // Addition
echo "a - b  = " . ($a - $b)  . "<br>";   // Subtraction
echo "a * b  = " . ($a * $b)  . "<br>";   // Multiplication
echo "a / b  = " . ($a / $b)  . "<br>";   // Division
echo "a % b  = " . ($a % $b)  . "<br>";   // Modulus
echo "a ** b = " . ($a ** $b) . "<br>";   // Exponent

// Increment / Decrement
$x = 10;
echo "<br>x = $x<br>";
echo "x++ = " . $x++ . " (Post Increment, x now = $x)<br>";
echo "++x = " . ++$x . " (Pre Increment)<br>";
echo "x-- = " . $x-- . " (Post Decrement, x now = $x)<br>";
echo "--x = " . --$x . " (Pre Decrement)<br>";

// -----------------------------------------------
// COMPARISON OPERATORS
// -----------------------------------------------
echo "<h3>2. Comparison Operators</h3>";

// var_export shows true/false
echo "a == b  : "; var_export($a == $b);  echo " (Equal)<br>";
echo "a != b  : "; var_export($a != $b);  echo " (Not Equal)<br>";
echo "a >  b  : "; var_export($a >  $b);  echo " (Greater Than)<br>";
echo "a <  b  : "; var_export($a <  $b);  echo " (Less Than)<br>";
echo "a >= b  : "; var_export($a >= $b);  echo " (Greater or Equal)<br>";
echo "a <= b  : "; var_export($a <= $b);  echo " (Less or Equal)<br>";

// Identical (checks value AND type)
$p = 10;
$q = "10";
echo "<br>p = 10 (int), q = '10' (string)<br>";
echo "p == q  : "; var_export($p == $q);  echo " (Equal — same value)<br>";
echo "p === q : "; var_export($p === $q); echo " (Identical — different type)<br>";
echo "p !== q : "; var_export($p !== $q); echo " (Not Identical)<br>";

// -----------------------------------------------
// LOGICAL OPERATORS
// -----------------------------------------------
echo "<h3>3. Logical Operators</h3>";

$x = true;
$y = false;

echo "x = true, y = false<br><br>";
echo "x AND y  : "; var_export($x && $y); echo " (AND)<br>";
echo "x OR  y  : "; var_export($x || $y); echo " (OR)<br>";
echo "NOT x    : "; var_export(!$x);      echo " (NOT)<br>";
echo "x and y  : "; var_export($x and $y);echo " (and)<br>";
echo "x or  y  : "; var_export($x or $y); echo " (or)<br>";
echo "x xor y  : "; var_export($x xor $y);echo " (XOR — true if only one is true)<br>";

// Practical Example
$age   = 20;
$marks = 75;

echo "<br><b>Practical Example:</b><br>";
echo "Age = $age, Marks = $marks<br>";

if ($age >= 18 && $marks >= 35) {
    echo "Result: Eligible (Age >= 18 AND Marks >= 35)<br>";
} else {
    echo "Result: Not Eligible<br>";
}
?>