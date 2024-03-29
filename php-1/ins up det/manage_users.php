<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert operation
if(isset($_POST['insert'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Update operation
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Delete operation
if(isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!-- HTML form for Insert -->
<h2>Insert User</h2>
<form method="post">
    Name: <input type="text" name="name" required>
    Email: <input type="email" name="email" required>
    <input type="submit" name="insert" value="Insert">
</form>

<!-- HTML form for Update -->
<h2>Update User</h2>
<form method="post">
    ID: <input type="number" name="id" required>
    New Name: <input type="text" name="name" required>
    New Email: <input type="email" name="email" required>
    <input type="submit" name="update" value="Update">
</form>

<!-- HTML form for Delete -->
<h2>Delete User</h2>
<form method="post">
    ID: <input type="number" name="id" required>
    <input type="submit" name="delete" value="Delete">
</form>
