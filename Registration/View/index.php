<?php
	session_start();
?>
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
	<?php
	?>
	<h1 id = 'reg' >
		Registration
	</h1>
	or
	<a href="../../Login/View/index.php">
		Login
	</a>
	<div class="container">
	<form class="form" method="post" action="../Functionality/useradd.php">
		<br>
		<p>With this username you can login</p>
		<input type="text" name =' username' placeholder="Username">
		<input type="text" name ='name' placeholder="Your name">
		<input type="password" name ='password' placeholder="Password">
		<input type="text" name ='email' placeholder="Email">

		<select class="form-control" name="sity">
		    <option>Yerevan</option>
			<option>Moscow</option>
			<option>London is the capital of great britain</option>
		</select>

		<div class="checkbox">
			<label for="a1">Female</label>
			<input type="radio" value="1" name="a" id="a1">
			<label for="a2">Male</label>
			<input type="radio" value="2" name="a" id="a2">
	    </div>

	    <input type="submit" class="btn btn-default submit">
	    
	</form>
	</div>
</body>
</html>