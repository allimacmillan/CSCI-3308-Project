<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<title> Meeting Master </title>
</head>

<body>




<!DOCTYPE HTML>



<?php

echo "<h4>Meeting Master </h4>";

$connection = @mysqli_connect ('127.0.0.1', 'root','yanling8**', 'meeting'); // please fill these parameters with the actual data
if(mysqli_connect_errno())
{
 echo "<h4>Failed to connect to MySQL: </h4>".mysqli_connect_error();
}
else
{
}
$query = "Select * from users;";
$resultset = mysqli_query($connection,$query);

    // Start the session

    session_start();



    // Defines username and password. Retrieve however you like,

    $username = "user";

    $password = "password";



    // Error message

    $error = "";



    // Checks to see if the user is already logged in. If so, refirect to correct page.

    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {

        $error = "success";

        header('Location: success.php');

    } 

        

    // Checks to see if the username and password have been entered.

    // If so and are equal to the username and password defined above, log them in.

    if (isset($_POST['username']) && isset($_POST['password'])) {

        if ($_POST['username'] == $username && $_POST['password'] == $password) {

            $_SESSION['loggedIn'] = true;

            header('Location: success.php');

        } else {

            $_SESSION['loggedIn'] = false;

            $error = "Invalid username and password!";

        }

    }

?>



<html>

    <head>

        <title>Login Page</title>

    </head>

    

    <body>

        <!-- Output error message if any -->

        <?php echo $error; ?>

        

        <!-- form for login -->

        <form method="post" action="index.php">

            <label for="username">Username:</label><br/>

            <input type="text" name="username" id="username"><br/>

            <label for="password">Password:</label><br/>

            <input type="password" name="password" id="password"><br/>

            <input type="submit" value="Log In!">

        </form>

	<form enctype="multipart/form-data" action="http://127.0.0.1/UserSignUp.php">
	<p>user:&nbsp <input type="text" name="user" size="10" maxlength="11"/></p>
	<p>passward:&nbsp <input type="text" name="password" size="10" maxlength="20" /></p>
	<p>email:&nbsp <input type="text" name="email" size="10" maxlength="30" /></p>
	<input type="submit" value="Sign Up" /> &nbsp
	<input type="reset" />
	</form>

    </body>

</html>