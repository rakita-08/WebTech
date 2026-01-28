<?php
    $seasons = array ("summer","winter","sring","fall");
    foreach($seasons as $s){
        echo $s . "<br>";
    }
    $salary = array(
        "sean"=>"45000.02",
        "evan"=>"30000.98",
        "gim"=>"34500.01"
    );
    foreach($salary as $s => $a){
        echo "Name: " . $s . "," . "Salary: " . $a . "<br>";
    }

?>