<html>
<head>
	<title>Form Data Handling</title>
</head>
<body>
	<form method="GET" action="handle_form_data.php">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name">
		<br><br>
		<label for="email">Email:</label>
		<input type="email" name="email" id="email">
		<br><br>
		<input type="submit" value="Submit (GET)">
	</form>
	<br>
	<form method="POST" action="handle_form_data.php">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username">
		<br><br>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password">
		<br><br>
		<input type="submit" value="Submit (POST)">
	</form>
</body>
</html>
