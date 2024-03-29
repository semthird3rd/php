
<?php
// Setting a cookie named "user" with the value "John Doe"
// The cookie expires after 86400 seconds (1 day)
setcookie("user", "John Doe", time() + 86400, "/"); // 86400 = 1 day

// Check if the "user" cookie is set
if(!isset($_COOKIE["user"])) {
    echo "The cookie 'user' is not set.";
} else {
    // Cookie is set; display its value
    echo "User cookie is set!<br>";
    echo "Value is: " . $_COOKIE["user"];
}
?>

