<?php
	// session_start();

	define('ROOT', dirname(__FILE__));
	require_once __DIR__.'/vendor/autoload.php';
//	$router = new Router();
//	$router->run();

	echo phpinfo();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Styles -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<base href="main.css">
	<link rel="stylesheet" href="/main.css">
	<!-- Fonts-->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,700,900,600' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 header">
				<a href="index.php">
					Home
				</a>
			</div>
			<div class="col-md-4">
				<ul class="navbar">
					<li>
						<a href="../../Login/View/index.php" class="1">
							Login
						</a>
					</li>
					<li>
						or
					</li>
				</li>
				<li>
					<a href="../../Registration/View/index.php" class="2">
						Registrate
					</a>
				</ul>
			</div>
			<div class="col-md-8">
				<div class="main">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur ullam inventore est error animi ipsa magnam accusantium, esse. Iste temporibus natus recusandae sit accusantium ipsam voluptatem exercitationem tempora quo minus!
				</div>
			</div>
			<div class="col-md-12">
				content
			</div>
		</div>
	</div>
</body>
</html>
