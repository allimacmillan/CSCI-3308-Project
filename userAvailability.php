<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'rabber333';
$db = 'accounts';
$conn = new mysqli($host,$user,$pass,$db) or die($conn->error);

session_start();
/*defining user info from session variables */
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$email = $_SESSION['email'];
$active = $_SESSION['active'];


/*getting user's id*/
$query = "SELECT id FROM users WHERE email = '$email'"; 
$resultset = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($resultset, MYSQLI_NUM)) {
	$id = $row[0];
}
//echo $id;






?>

