<?php
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect('localhost', 'root', '', 'farmer');
// Check if the connection was successful
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Get the post records
$txtName = $_POST['name'];
$txtSize = $_POST['size'];
$txtRole = $_POST['role'];

// Database insert SQL code
$sql = "INSERT INTO `pro` (`Id`, `Name`, `Size`, `Role`) VALUES ('0', '$txtName', '$txtSize', '$txtRole')";

// Insert into the database
$rs = mysqli_query($conn, $sql);

if ($rs) {
    echo "Product record inserted successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);