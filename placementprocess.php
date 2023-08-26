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



    $name = $_POST['name'];
    $number = $_POST['number'];
    $salary= $_POST['salary'];
    $dept=$_POST['dept'];
    
    // Insert data into database
    $sql = "INSERT INTO placements (year,companyname,number,salary,dept) VALUES ('$year','$name','$number', '$salary','$dept')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
