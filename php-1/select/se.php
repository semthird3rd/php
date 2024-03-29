<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "school";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select all students
$sql = "SELECT id, name, email, gender, course FROM students";
$result = $conn->query($sql);

// Check if there are records found
if ($result->num_rows > 0) {
    // Start of the HTML table
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Course</th>
            </tr>";
    
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["name"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["gender"]."</td>
                <td>".$row["course"]."</td>
              </tr>";
    }
    // End of the HTML table
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
