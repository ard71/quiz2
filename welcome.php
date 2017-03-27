<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Welcome</title>
</head>
<body>
	<?php
		if (isset($_COOKIE['cookie'])){
			$cookie = $_COOKIE['cookie'];
			echo "Hi, " .$cookie_first. ", you recently signed up with
			the email address: " .$cookie_email.", Thank you!"
		}
		else{
			echo "<h1>Sign up for PuppyPix?</h1>";
			echo "<form action="register.php" method="post">
					<p>First Name: <input type="text" name="first"></p>
					<p>Last Name: <input type="text" name="last"></p>
					<p>E-mail: <input type="email" name="email"></p>
					<p><input type="submit"></p>
				  </form>";
		}
	?>
</body>
</html>