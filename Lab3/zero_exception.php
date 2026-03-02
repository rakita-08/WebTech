<?php
// divide.php

function divideNumbers($a, $b) {
    // Check if divisor is zero before dividing
    if ($b == 0) {
        throw new Exception("Arithmetic Error: Cannot divide by zero!");
    }
    return $a / $b;
}

// Test Case 1: Normal Division
try {
    $result = divideNumbers(20, 4);
    echo "20 / 4 = " . $result . "<br>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}

// Test Case 2: Divide by Zero
try {
    $result = divideNumbers(10, 0);
    echo "10 / 0 = " . $result . "<br>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}

// Test Case 3: Negative Division
try {
    $result = divideNumbers(-15, 3);
    echo "-15 / 3 = " . $result . "<br>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}

// Test Case 4: Division from user input
try {
    $num1 = 50;
    $num2 = 0;
    echo "<br>Trying to divide $num1 by $num2...<br>";
    $result = divideNumbers($num1, $num2);
    echo "Result = " . $result . "<br>";
} catch (Exception $e) {
    echo "Caught Exception: " . $e->getMessage() . "<br>";
} finally {
    // finally block always runs
    echo "Division operation attempted.<br>";
}
?>
