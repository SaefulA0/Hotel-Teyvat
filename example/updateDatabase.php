<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "10119113_dafarizkyfahreza_um";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE karyawan SET Nama='Ariel' WHERE Nama='Raisya'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
