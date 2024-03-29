<html>
<body>
<?php
session_start();

// Set session variables
$_SESSION["username"] = "JohnDoe";
$_SESSION["email"] = "johndoe@example.com";

// Retrieve session variables
$username = $_SESSION["username"];
$email = $_SESSION["email"];

echo "Username: " . $username . "<br>";
echo "Email: " . $email . "<br>";

// Delete session variables
unset($_SESSION["username"]);
unset($_SESSION["email"]);
?>


</body>
</html>
