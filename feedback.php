<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
body {background: url(feedback4.jpg) no-repeat center center fixed;}
h1 {
    color: blue;
    font-family: monotype corsiva;
    font-size: 50px;
}ul {
    color:#600080;
    font-family: times new roman;
}
</style>
</head>
<body><br><br>
<h1 align="center">Feedback Form</h1>
<p><br><br>
<img src="feedback1.jpg" alt="feedback" style="float:right;width:400px;height:300px;">
<img src="feedback2.jpg" alt="feedbacks" style="float:left;width:400px;height:300px;"></p>
<form action="feedback.php" method="post" onsubmit="window.open('index.php')">
<ul style=margin-left:420px>
<li>User-friendliness of the application<br><br>
  <input type="radio" name="f1" value="Very poor"> Very poor
  <input type="radio" name="f1" value="Poor"> Poor
  <input type="radio" name="f1" value="Average"> Average
  <input type="radio" name="f1" value="Good"> Good
  <input type="radio" name="f1" value="Excellent"> Excellent
</li><br>
<li>List of requirements for the event<br><br>
  <input type="radio" name="f2" value="Very poor"> Very poor
  <input type="radio" name="f2" value="Poor"> Poor
  <input type="radio" name="f2" value="Average"> Average
  <input type="radio" name="f2" value="Good"> Good
  <input type="radio" name="f2" value="Excellent"> Excellent
</li><br>
<li>Arrangements for the event<br><br>
  <input type="radio" name="f3" value="Very poor"> Very poor
  <input type="radio" name="f3" value="Poor"> Poor
  <input type="radio" name="f3" value="Average"> Average
  <input type="radio" name="f3" value="Good"> Good
  <input type="radio" name="f3" value="Excellent"> Excellent
</li><br>
<li>Services provided by our team<br><br>
  <input type="radio" name="f4" value="Very poor"> Very poor
  <input type="radio" name="f4" value="Poor"> Poor
  <input type="radio" name="f4" value="Average"> Average
  <input type="radio" name="f4" value="Good"> Good
  <input type="radio" name="f4" value="Excellent"> Excellent
</li><br>
<li>Prices<br><br>
  <input type="radio" name="f5" value="Very poor"> Very poor
  <input type="radio" name="f5" value="Poor"> Poor
  <input type="radio" name="f5" value="Average"> Average
  <input type="radio" name="f5" value="Good"> Good
  <input type="radio" name="f5" value="Excellent"> Excellent
  </li><br>
  <li>Overall system<br><br>
  <input type="radio" name="f5" value="Very poor"> Very poor
  <input type="radio" name="f5" value="Poor"> Poor
  <input type="radio" name="f5" value="Average"> Average
  <input type="radio" name="f5" value="Good"> Good
  <input type="radio" name="f5" value="Excellent"> Excellent
  </li>
</ul>
<p style="margin-left:420px;color:#600080"><b>Comments:</b></p>
<textarea name="comments" style="width:500px;height:150px;margin-left:420px;"></textarea>
<br><br>
<p align="center"><button type="submit" name="submit" class="btn btn-primary btn-md">Submit</button></p>
</form>
<button type="button" class="btn btn-primary" onclick=location.href="index.php">HOME</button></body>
</html>

<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('register_db',$con) or die(mysql_error());

if(isset($_POST['submit'])){
$q1=$_POST['f1'];
$q2=$_POST['f2'];
$q3=$_POST['f3'];
$q4=$_POST['f4'];
$q5=$_POST['f5'];
$text = mysql_real_escape_string($_POST['comments']);

$sql="insert into feedback(q1,q2,q3,q4,q5,comments) values('$q1','$q2','$q3','$q4','$q5','$text')";
$results = mysql_query($sql);
if($results){echo "<script>alert('Thank you for your time!')</script>";}
	else {echo "<script>alert('sorry try again')</script>";}
} 
?>