<?php
session_start();
$valid_username = "admin";
$valid_password = "password";
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {   
    $username = $_POST['username'];
    $password = $_POST['password'];
  if ($username === $valid_username && $password === $valid_password) 
    {
        
        $_SESSION['user'] = $username;
        $message = "Login successful!";
        
    } 
    else 
    {
        $message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Login</h2>
    <?php
    if ($message !== "") {
        echo "<p>$message</p>";
    }
    ?>
    <form method="post" action="">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <input type="submit" value="Login">
        </div>
    </form>
</body>
</html>
