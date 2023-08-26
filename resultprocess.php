<?php
// Database configuration
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'apt';

// Create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $year = $_POST['year'];
    $appeared = $_POST['appeared'];
    $passed = $_POST['passed'];
    $percentage = $_POST['percentage'];
    $sem = $_POST['sem'];
    $dept = $_POST['dept'];


    // Insert data into database
    $sql = "INSERT INTO results (year,appeared,passed,percentage,sem,dept) VALUES ('$year','$appeared','$passed','$percentage','$sem','$dept')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>