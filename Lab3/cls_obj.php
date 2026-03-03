<?php
// classes.php

// -----------------------------------------------
// CLASS DEFINITION
// -----------------------------------------------
class Student {

    // Properties (variables inside class)
    public    $name;
    public    $rollno;
    public    $course;
    protected $marks;
    private   $password;

    // Constructor — runs when object is created
    public function __construct($name, $rollno, $course, $marks) {
        $this->name   = $name;
        $this->rollno = $rollno;
        $this->course = $course;
        $this->marks  = $marks;
        $this->password = "secret123";
    }

    // Method: Display student details
    public function displayDetails() {
        echo "Name   : " . $this->name   . "<br>";
        echo "Roll No: " . $this->rollno . "<br>";
        echo "Course : " . $this->course . "<br>";
        echo "Marks  : " . $this->marks  . "<br>";
    }

    // Method: Calculate grade
    public function getGrade() {
        if ($this->marks >= 90) return "A+";
        if ($this->marks >= 75) return "A";
        if ($this->marks >= 60) return "B";
        if ($this->marks >= 35) return "C";
        return "F (Fail)";
    }

    // Method: Check pass or fail
    public function getResult() {
        return ($this->marks >= 35) ? "Pass" : "Fail";
    }

    // Setter for marks
    public function setMarks($marks) {
        $this->marks = $marks;
    }

    // Getter for marks
    public function getMarks() {
        return $this->marks;
    }

    // Destructor — runs when object is destroyed
    public function __destruct() {
        echo "<br>Object for '" . $this->name . "' destroyed.<br>";
    }
}


// -----------------------------------------------
// INHERITANCE — Child class extends parent class
// -----------------------------------------------
class GraduateStudent extends Student {

    public $thesis;

    public function __construct($name, $rollno, $course, $marks, $thesis) {
        // Call parent constructor
        parent::__construct($name, $rollno, $course, $marks);
        $this->thesis = $thesis;
    }

    // Override parent method
    public function displayDetails() {
        parent::displayDetails();
        echo "Thesis : " . $this->thesis . "<br>";
    }
}


// -----------------------------------------------
// CREATE OBJECTS AND USE THEM
// -----------------------------------------------

echo "<h2>PHP Classes and Objects</h2>";

// Create object of Student class
echo "<h3>1. Creating Student Object</h3>";
$s1 = new Student("Raynee", "211", "B.Sc.CSIT", 85);
$s1->displayDetails();
echo "Grade  : " . $s1->getGrade()  . "<br>";
echo "Result : " . $s1->getResult() . "<br>";

// Second object
echo "<h3>2. Second Student Object</h3>";
$s2 = new Student("Praul", "102", "BCA", 28);
$s2->displayDetails();
echo "Grade  : " . $s2->getGrade()  . "<br>";
echo "Result : " . $s2->getResult() . "<br>";

// Using setter and getter
echo "<h3>3. Using Setter and Getter</h3>";
echo "Old Marks: " . $s2->getMarks() . "<br>";
$s2->setMarks(72);
echo "New Marks: " . $s2->getMarks() . "<br>";
echo "New Grade: " . $s2->getGrade() . "<br>";

// Inheritance
echo "<h3>4. Inheritance — GraduateStudent</h3>";
$g1 = new GraduateStudent("Amen", "921", "BIT", 91,
                           "Machine Learning in Healthcare");
$g1->displayDetails();
echo "Grade  : " . $g1->getGrade()  . "<br>";
echo "Result : " . $g1->getResult() . "<br>";

// Check class
echo "<h3>5. Object Information</h3>";
echo "s1 is a Student        : ";
var_dump($s1 instanceof Student); echo "<br>";

echo "g1 is a GraduateStudent: ";
var_dump($g1 instanceof GraduateStudent); echo "<br>";

echo "g1 is also a Student   : ";
var_dump($g1 instanceof Student); echo "<br>";
?>