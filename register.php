<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Register</title>
</head>
<body>
	<?php
		$cookie_first = $_GET["first"];
		$cookie_last = $_Get["last"];
		$cookie_email = $_GET["email"];
		setcookie($cookie_first, $cookie_last, $cookie_email, time() + (86400*30), "/");
	?>
</body>
</html>