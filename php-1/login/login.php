<?php

$servername = "localhost";
$username = "root"; 
$password = ''; 
$dbname = "user_system";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $conn->real_escape_string($_POST['username']);
$password = md5($_POST['password']); 

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "Login successful!";
} else {
   
    echo "Invalid username or password";
}

$conn->close();
?>


