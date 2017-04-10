<html>
<head>
</head>
<body>
<?php
	include "index.php"; 
	$user = $_REQUEST["user"];
	$password = $_REQUEST["password"];
	$email = $_REQUEST["email"];
	$conn = new mysqli('127.0.0.1', 'root','yanling8**', 'meeting');
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}	
	$sql = "insert into `users` (`user`, `password`, `email`) 
	values ('$user','$password','$email')";
	if ($conn->query($sql) === TRUE) {}
	$conn->close();
?>
</body>
<script>
	window.location.href="http://127.0.01/index.php";
</script>
</html>
