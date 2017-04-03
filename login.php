<?php
  session_start(); 
  if ($_POST['login']) {
    include_once("connect_to_db.php");
    $username = strip_tags(($_POST['username']);    //removing tags in strings, making sure there is no SQL injection
    $password = strip_tags(($_POST['password']);    //prevention method
    
    $username = stripslashes($username);
    $password = stripslashes($password);

    $username = mysqli_real_escape_string($username);
    $username = mysqli_real_escape_string($username);
?>


<html>
<head>
  <title>Login</title>
</head>
<body>
  <h1 style="font-family: Impact;">Login</h1>
  <form action="login.php" method="post">
    <input placeholder="Username" name = "username" type="text" autofocus>
    <input placeholder="Password" name="password" type="password">
    <input name="login" type="submit" value="Login">
  </form>
</body>
</html>
