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
    $name = $_POST['name'];

    $qualification = $_POST['qualification'];

    
    // Upload image
    $image = $_FILES['image']['name'];
    $target = "images/" . basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $dept=$_POST['dept'];

    // Insert data into database
    $sql = "INSERT INTO head (name, qualification,image,dept) VALUES ('$name', '$qualification','$image','$dept')";    
    if ($conn->query($sql) ===TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>