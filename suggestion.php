<?php
include 'db.php';
if(isset($_POST['submit']))
{

    $suggestions= $_POST['suggestion'];
    $email= $_POST['email'];

    mysql_query("INSERT INTO user(suggestion,email) VALUES('$suggestions','$email')");

    header('location:index.html');

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

    <title>suggestions </title>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


<link rel="stylesheet" type="text/css" href="style3.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>



 </head>



<body>
<div class="container">
<h1>Please post your Comments and Suggestions here </h1>
</br>
<h4>Pease provide valid Email address </h4>
 <form class="form-signin" method="post">
        <input type="text" name="suggestion" id="inputEmail" class="form-control" placeholder="your meassage here" required autofocus>

     <input type="email" name="email" id="inputEmail" class="form-control" placeholder="your valid Email address here" required autofocus>
   
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" id="button">POST</button>

</form>


</div>



</body>
</html>

