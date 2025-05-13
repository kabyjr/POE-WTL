<?php
// Creating an associative array
$student_marks = array(
    "Alice" => 85,
    "Bob" => 78,
    "Charlie" => 92
);

// Displaying the associative array
foreach ($student_marks as $name => $marks) {
    echo "$name scored $marks marks.<br>";
}
?>