<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect value of input field
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    if (empty($name) || empty($email)) {
        echo "Name and email are required.";
    } else {
        echo "<h1>Submitted Information</h1>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
    }
} else {
    // Not a POST request, redirect back to form
    header("Location: form.html");
}
?>
