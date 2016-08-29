<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP LOGIN FORM</title>
	<!-- Style -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="main.css">
	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="header">
		<a href="../../index.php">
			Home
		</a>
	</div>
	
	<h1>
		Login
	</h1>
	or <a href="../../Registration/View/index.php">
		Registrate
	</a>


		<form class="form" method="post" action="../Functionality/login.php">
		    <input type="text" name ='username' placeholder="Username">
	 		<input type="password" name ='password' placeholder="Password">
			<input type="submit">
	</form>
</body>
</html>
