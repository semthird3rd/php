<html>
<body>
<?php

// Set a cookie
setcookie("username", "John Doe", time() + (86400 * 30), "/");

// Retrieve a cookie
if(isset($_COOKIE["username"])) {
  echo "Welcome " . $_COOKIE["username"] . "!<br>";
} else {
  echo "No cookie found.<br>";
}

// Delete a cookie
setcookie("username", "", time() - 3600, "/");

?>

</body>
</html>
