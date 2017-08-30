<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
h1
{
	color: black;
	font-size: 80px;
	
	letter-spacing:1px;
	text-shadow: 2px 2px 2px #CCCCCC;
	
}
body
{
	background: url(Event.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;	
  font-family: 'Tangerine',serif;
}
body:after{
    position:fixed;
    content:"";
    top:0;
    left:0;
    right:0;
    bottom:0;
    background:rgba(0,0,255,0.1);
    z-index:-1;
}
a:link {
    color: red;
}
a:visited {
    color: green;
}
a:hover {
    color: hotpink;
	}
a:active {
    color: blue;
}body:after{
    position:fixed;
    content:"";
    top:0;
    left:0;
    right:0;
    bottom:0;
    background:rgba(0,0,255,0.1);
    z-index:-1;
}
a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 20px 25px;
    text-align: center;	
    text-decoration: none;
    display: inline-block;
}
p.one{width: 300px;
    padding: 25px;
    border: 25px solid navy;
    margin: 25px;}


</style>
</head>
<body>
<h1 align="center">
		PLAN IT
		</h1>
		<h2 align="center">Stop Stressing, Start Planning Your Event Now!</h2> <hr>
<h2><b>Choose an Event</b></h2>
<p class="one" align="center">
<br><br><a href="conference.php?fame=<?php echo $_GET["name"] ?>">Conference</a><br><br><a href="wedding.php?lame=<?php echo $_GET["name"] ?>">Marriage ceremony</a><br><br><a href="birthday.php?name=<?php echo $_GET["name"] ?>">Birthday party</a><br><br><a href="productlaunch.php?pame=<?php echo $_GET["name"] ?>">Product Launch Event </a><br><br></p>
<br>
<button type="button" class="btn btn-primary" onclick=location.href="index.php">HOME</button>

</body>
</html>
