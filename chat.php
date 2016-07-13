<?php
include 'db.php';
 $nickname= $_COOKIE['cookie'];
if(!$nickname){

 header('location:index.html');
}



  if(isset($_POST['submit'])){

   
    $messages= $_POST['message'];
   
    $insert="INSERT INTO chat (text,nickname) VALUES ('$messages','$nickname')";
    $run= mysql_query($insert);



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

    <title>chatApp </title>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


<link rel="stylesheet" type="text/css" href="style2.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>









  <script type="text/javascript">
    function ajax(){
    var req = new XMLHttpRequest();

    req.onreadystatechange = function () {
      if(req.readyState==4 && req.status==200){
        document.getElementById('chatarea').innerHTML= req.responseText;
      }

      
    }



req.open('GET','req.php',true);
req.send();


}
setInterval(function(){ajax()},1000);
</script>


<style>
  @media screen and (max-width:478px){

body{
position:absolute;
line-height: 1.4;
}
#hide{
  display: none;
}
#r h2{
  display: none;
}
#chatarea{
  height:300px;
  margin-top:-12px;
}
.masthead-brand{
  font-size:150%;
}
.masthead-nav > li > a{
  font-size: 100%;
}
#footer{
  margin-top: -30px;
}

</style>


  </head>



<body onload="ajax();">






 <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Welcome To The Online Global Chat</h3>
              <nav>
                <ul class="nav masthead-nav" id="nav">
                  <li class="active"><a href="index.html">HOME</a></li>
                  
                  <li><a href="suggestion.php">Suggestions</a></li>

                </ul>
              </nav>
            </div>
          </div>
      <div class="container">
      <div class="row">

      <div class="col-md-6" id="r">
      <h2>Chat Here</h2>


      
        <div id="chatarea">
            


        </div><p></p>
 <form class="form-signin" method="post">
        <input type="text" name="message" id="inputEmail" class="form-control" placeholder="your meassage here" required autofocus>

       
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" id="button">SEND</button>

</form>

      </div>

<div class="col-md-6" id="hide">
<h2> Latest News</h2>

      <div class="feedgrabbr_widget" id="fgid_a90245ac8dd703c3cd8f6898e"></div>
      <script> if (typeof(fg_widgets)==="undefined") fg_widgets = new Array();fg_widgets.push("fgid_a90245ac8dd703c3cd8f6898e");</script>
      <script src="http://www.feedgrabbr.com/widget/fgwidget.js"></script>


</div>

      </div>
      </div>
<div class="container-fluid" id="footer">
    <h4> &copy; MANISH MISHRA-2016</h4>
</div>



   

  



</body>
</html>



