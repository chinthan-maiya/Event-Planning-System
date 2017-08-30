<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style type="text/css">
		body { background: url(Event.jpg) no-repeat center center fixed;}
		a
		{
			text-align:center;
		}
</style>
</head>

<body>
<button type="button" class="btn btn-primary" onclick=location.href="index.php">HOME</button>

<h1 align="center">
		<b>PLAN IT</b>
		</h1>
		<h2 align="center">Stop Stressing, Start Planning Your Event Now!</h2> <hr>
<h1><center>List of your previous orders</h1><br><br>

<?php
$db_handle = mysql_connect("localhost","root","");
$db_found = mysql_select_db('register_db', $db_handle);
$g=$_GET["name"];
if ($db_found) {

$SQL = "SELECT * FROM order_details";
$result = mysql_query($SQL);
while ( $db_field = mysql_fetch_assoc($result) ) 
{
$x=$db_field['userID'];
if(strcmp($g,$db_field['userID'])==0)
{
	if($db_field['birthday']==1)
	{
		echo "<center><button type=button class='btn btn-primary' onclick=location.href='birthday1.php?name=$g'>Birthday</button><br>";
		echo "<br>";
	}
		
	if($db_field['wedding']==1)
	{
		echo "<center><button type=button class='btn btn-primary' onclick=location.href='wedding1.php?wame=$g'>Wedding</button><br>";
		echo "<br>";
	}
	if($db_field['conference']==1)
	{
		echo "<center><button type=button class='btn btn-primary' onclick=location.href='conference1.php?came=$g'>Conference</button><br>";
		echo "<br>";
	}
	if($db_field['product']==1)
	{
		echo "<center><button type=button class='btn btn-primary' onclick=location.href='productlaunch1.php?pame=$g'>Product Launch</button><br>";
		echo "<br>";
	}
}	


}

mysql_close($db_handle);

}
?>
