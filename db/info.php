<?php
phpinfo();
	// Creating dabase connection
	$dbhost = 'localhost';
	$dbname = 'mydatabase';
	$dbuser = 'root';
	$dbpass = 'ed';
	$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	//Testing connection
	if(mysqli_connect_errno()){
		die("Connection failed" .mysqli_connect_error()."(".mysqli_connect_errno().")");
	};
	$query = 'select*from subjects';
	$result = mysqli_query($connection,$query);
	if(!$result){
		die("Database is failed");
	}
?>
<ul>
<?php
	while($subjects = mysqli_fetch_assoc($result) ){
?>
<a href = "/">
	<?php
		echo $subjects['menu'].$subjects['id'].'<hr/>';
	?>
</a>

<?php
	}
?>
</ul>
	
