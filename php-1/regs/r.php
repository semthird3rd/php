<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $subscribe = isset($_POST['subscribe']) ? "Yes" : "No";
    $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : "Not specified";
    $city = htmlspecialchars($_POST['city']);
    
    // Display the data
    echo "<h2>Registration Information</h2>";
    echo "First Name: " . $firstName . "<br>";
    echo "Last Name: " . $lastName . "<br>";
    echo "Subscribe to newsletter: " . $subscribe . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "city: " . $city . "<br>";
} else {
    echo "Form is not submitted.";
}
?>
