
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP LOGIN FORM</title>
	<!-- Style -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="nav">
		<div class="home">
			<a href="/">
				Home
			</a>
		</div>
		<div class="navlogin">
			<a href="Login/login.php">
				Login
			</a>
		</div>
		<div class="navregistr">
			<a href="../Registr/regist.php">
				Registrate
			</a>
		</div>
	</div>
	<form method="post" action="../db/validation.php">
		<div class="main">
			<div class="int">
				<h1>
					Email
				</h1>
				<input type="text" name ='email' placeholder="Email">
			</div>
			<div class="int">
				<h1>
					Password
				</h1>
				<input type="password" name ='password' placeholder="Password">
			</div>
			<div class="int submit">
				<input type="submit">
			</div>
		</div>
	</form>
	<?php
	echo $_POST['email'];
	?>
</body>
</html>