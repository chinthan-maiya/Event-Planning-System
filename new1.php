<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style type="text/css">
		body { background: url(feedback4.jpg) no-repeat center center fixed;}
		a
		{
			text-align:center;
		}
</style>
</head>

<body>
<br>
<button type="button" class="btn btn-primary" onclick=location.href="index.php">HOME</button>

<h1 align="center">
		PLAN IT
		</h1>
		<h2 align="center">Stop Stressing, Start Planning Your Event Now!</h2> <hr>
<h1><center>Details of your previous orders</h1><br><br>
</html>
<?php
$db_handle = mysql_connect("localhost","root","");
$db_found = mysql_select_db('register_db', $db_handle);

if ($db_found) {

$SQL = "SELECT * FROM order_details";
$result = mysql_query($SQL);

while ( $db_field = mysql_fetch_assoc($result) ) 
{
$x=$db_field['userID'];
if(strcmp($_GET["name"],$db_field['userID'])==0)
{
	if($db_field['birthday']==1)
	{
		$SQ = "SELECT * FROM bday";
		$res=mysql_query($SQ);
		echo "BIRTHDAY<br>";
		while($a=mysql_fetch_assoc($res))
		{
			if($a['userID']==$db_field['userID'])
			{
				echo "Venue:";
				echo $a['venue'];
			echo "<ul>";
			if($a['cake']=='1')
				echo "<li> cake ";
			if($a['balloons']=='1')
				echo "<li>balloons ";
			if($a['chocolates']=='1')
				echo "<li>chocolates ";
			if($a['music']=='1')
				echo "<li>music ";
			if($a['chairs_tables']=='1')
				echo "<li>chairs and tables ";
			if($a['cups_plates']=='1')
				echo "<li>cups and plates ";
			if($a['photographer']=='1')
				echo "<li>photographer";
			echo "</ul>";
			}
		}
	}
		
	if($db_field['wedding']==1)
	{
		$RQ = "SELECT * FROM wed";
		$res1=mysql_query($RQ);
		echo "WEDDING<br>";
		while($b=mysql_fetch_assoc($res1))
		{
			if($b['userID']==$db_field['userID'])
			{
				echo "Venue:";
				echo $b['venue'];
				echo "<ul>";
			if($b['flowers_decorations']=='1')
				echo " <li>flowers and decorations<br> ";
			if($b['chairs_tables']=='1')
				echo "<li>chairs and tables<br> ";
			if($b['band_set']=='1')
				echo "<li>band set<br> ";
			if($b['gift_items']=='1')
				echo "<li>gift items<br> ";
			if($b['purohit']=='1')
				echo "<li>purohit<br> ";
			if($b['photographer']=='1')
				echo "<li>photographer<br>";
			echo "</ul>";
			}
		}
	}
	if($db_field['conference']==1)
	{
		$TQ = "SELECT * FROM conference";
		$res2=mysql_query($TQ);
		echo "CONFERENCE<br>";
		while($c=mysql_fetch_assoc($res2))
		{
			if($c['userID']==$db_field['userID'])
			{
				echo "Venue:";
				echo $c['venue'];
			echo "<ul>";
			if($c['decorations']=='1')
				echo "<li>decorations ";
			if($c['chairs_tables']=='1')
				echo "<li>chairs and tables ";
			if($c['bags']=='1')
				echo "<li>bags ";
			if($c['gift_items']=='1')
				echo "<li>gift items ";
			if($c['mic']=='1')
				echo "<li>mic ";
			if($c['photographer']=='1')
				echo "<li>photographer";
			echo "</ul>";
			}
		}
	}
	if($db_field['product']==1)
	{
		$PQ = "SELECT * FROM product";
		$res1=mysql_query($PQ);
		echo "PRODUCT LAUNCH<br>";
		while($b=mysql_fetch_assoc($res1))
		{
			if($b['userID']==$db_field['userID'])
			{
				echo "Venue:";
				echo $b['venue'];
			echo "<ul>";
			if($b['decorations']=='1')
				echo "<li>decorations ";
			if($b['chairs']=='1')
				echo "<li>chairs ";
			if($b['posters']=='1')
				echo "<li>posters ";
			if($b['gifts']=='1')
				echo "<li>gifts ";
			if($b['mic']=='1')
				echo "<li>mic and sound system";
			if($b['photographer']=='1')
				echo "<li>photographer";
			if($b['accommodation']=='1')
				echo "<li>accommodation";
			echo "</ul>";
			}
		}
	}
}	


}

mysql_close($db_handle);

}
?>
