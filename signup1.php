<?php

include 'db.php';

if(isset($_POST['submit']))
{
  $username = $_POST['username'];
  $confirm= $_POST['p'];
  $password = $_POST['password'];
  $result = mysql_query("select * from user where username = '$username'");
  $row = mysql_fetch_array($result);

  if(($username=="")||($password=="")||($confirm=="")){

    echo "all fields are mandatory";
  
}
elseif ($confirm!=$password) {
  echo "PASSWORD DOESNT MATCH PLZ TRY AGAIN";
}

elseif($row['username']==$username)

  
{
      echo "USER ALREADY EXSITS PLEASE LOGIN WITH THIS INFO OR CREATE A NEW ACCOUNT";
}




else
{





  mysql_query("INSERT INTO user(username,password)VALUES('$username','$password')");
  header('location:signin1.php');


} 
}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signup</title>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="style1.css">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Please sign up</h2>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword" class="sr-only"> CONFIRM Password</label>
        <input type="password" name="p" id="inputPassword" class="form-control" placeholder=" confirm Password" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign up</button>
      </form>

    </div> <!-- /container -->




  </body>
</html>
