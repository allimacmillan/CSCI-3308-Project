<html>
<head>
  <title>Sign up for Link</title>
</head>

<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="signUp.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="User Name" name="username" required /> <br/> <br/> <br/>
      <input type="email" placeholder= "Email" name="email" required /> <br/> <br/> <br/>
      <input type="password" placeholder="Password" name="password"autocomplete="new-password" required /> <br/> <br/> <br/>
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required /> <br/> <br/> <br/>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>


<?php
  session_start(); 
    include_once("connect_to_db.php");



?>    
