<?php

$servername = "localhost";
$username = "root";
$password = '';
$dbname = "school";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$gender = $conn->real_escape_string($_POST['gender']);
$course = $conn->real_escape_string($_POST['course']);
$hobbies = isset($_POST['hobbies']) ? $conn->real_escape_string(implode(', ', $_POST['hobbies'])) : '';

$sql = "INSERT INTO students (name, email, gender, course, hobbies) VALUES ('$name', '$email', '$gender', '$course', '$hobbies')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
