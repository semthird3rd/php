<html>
<head>
	<title>Form Data Handling</title>
</head>
<body>
	<h2>Form data submitted via GET method:</h2>
	<?php
	if (isset($_GET['name'])) {
		echo "Name: " . $_GET['name'] . "<br>";
	}
	if (isset($_GET['email'])) {
		echo "Email: " . $_GET['email'] . "<br>";
	}
	?>

	<br><br>

	<h2>Form data submitted via POST method:</h2>
	<?php
	if (isset($_POST['username'])) {
		echo "Username: " . $_POST['username'] . "<br>";
	}
	if (isset($_POST['password'])) {
		echo "Password: " . $_POST['password'] . "<br>";
	}
	?>
</body>
</html>
