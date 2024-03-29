<?php

$servername = "localhost";
$username = "root";
$password = '';
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// INSERT operation
$insertName = "John Doe";
$insertSql = "INSERT INTO users (name) VALUES ('$insertName')";
if ($conn->query($insertSql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $insertSql . "<br>" . $conn->error . "<br>";
}

// UPDATE operation
$updateName = "Jane Doe";
$updateId = 1; // Assuming the ID of the record you wish to update is 1
$updateSql = "UPDATE users SET name = '$updateName' WHERE id = $updateId";
if ($conn->query($updateSql) === TRUE) {
    echo "Record updated successfully<br>";
} else {
    echo "Error: " . $updateSql . "<br>" . $conn->error . "<br>";
}

// DELETE operation
$deleteId = 2; // Assuming the ID of the record you wish to delete is 2
$deleteSql = "DELETE FROM users WHERE id = $deleteId";
if ($conn->query($deleteSql) === TRUE) {
    echo "Record deleted successfully<br>";
} else {
    echo "Error: " . $deleteSql . "<br>" . $conn->error . "<br>";
}

$conn->close();
?>


