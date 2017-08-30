<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
body
{
	
	background: url(r.jpg) no-repeat center center fixed; 
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
p{
margin-left :400px;}
h2
{
font-family:monotype corsiva;
margin-left:400px;
}

</style>
<script type="text/javascript">
function validate()
{
	var a=new Array(7);
	var y=document.forms["ed"]["att"].value;
	var c1=document.getElementById("one").checked;
	var c2=document.getElementById("two").checked;
	var c3=document.getElementById("three").checked;
	var c4=document.getElementById("four").checked;
	var c5=document.getElementById("five").checked;
	var c6=document.getElementById("six").checked;
	var c7=document.getElementById("seven").checked;
	a[0]=c1;a[1]=c2;a[2]=c3;a[3]=c4;a[4]=c5;a[5]=c6;a[6]=c7;
	var x=0;
	var b=new Array(8);
	b[0]=2000;b[1]=30*y;b[2]=2000;b[3]=100*y;b[4]=3000;b[5]=5000;b[6]=10000;
	for(var i=0;i<7;i++)
	{
		x=x+a[i]*b[i];
	}
	window.alert("Estimate amount="+x);
}
</script>
</head>
<body>
<h1 align="center" >
PRODUCT LAUNCH
</h1>

<h2><b>Select your requirements<b></h2>
<form id="bday" method="post" name="ed">
<p style="margin-left:200px"><b>City:
<select>
  <option hidden="true"></option>
  <option value="volvo">Surathkal</option>
  <option value="saab">Udupi</option>
  <option value="opel">Mangalore</option>
  <option value="audi">Manipal</option>
</select>
Venue:</b> <input type="text" name="loc">
Date:
  <input type="date" name="date">
  Select a time:
  <input type="time" name="usr_time">
  No. of attendees:
  <input type="text" name="att">
<p><input type="checkbox" id="one"name="r1" value="1">Decorations</p>
<p><input type="checkbox" id="two"name="r2" value="1">Chairs and tables</p>
<p><input type="checkbox" id="three"name="r3" value="1">Posters and banners</p>
<p><input type="checkbox" id="four"name="r4" value="1">Gift items</p>
<p><input type="checkbox" id="five"name="r5"value="1">Photographer</p>
<p><input type="checkbox" id="six"name="r6" value="1">Mic and sound system</p>
<p><input type="checkbox" id="seven"name="r7" value="1">Accommodation for celebrities</p>
<br>
<br>
<p><button type="button" class="btn btn-primary" onclick="return validate()">Get estimate</button>        <button type="submit"  name="submit" class="btn btn-primary">Submit</button></p>
</form>
<button type="button" class="btn btn-primary" onclick=location.href="index.php">HOME</button>
</body>
</html>
<?php
 $con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('register_db',$con) or die(mysql_error());  

if(isset($_POST['submit']))
{
	$user=$_GET["pame"];
	$loc=$_POST["loc"];
	$date=$_POST["date"];
	$usr_time=$_POST["usr_time"];
	$att=$_POST["att"];
	$r1=$_POST['r1'];
	$r2=$_POST['r2'];
	$r3=$_POST['r3'];
	$r4=$_POST['r4'];
	$r5=$_POST['r5'];
	$r6=$_POST['r6'];
	$SQ = "DELETE FROM product WHERE userID='$user'";
	$result = mysql_query($SQ);
	$s="insert into product(userID,venue,date,time,attendees,decorations,chairs,posters,gifts,photographer,mic,accommodation) values('$user','$loc','$date','$usr_time','$att','$r1','$r2','$r3','$r4','$r5','$r6','$r7')";	
	$results1=mysql_query($s);
	if($results1)
	{
		echo "<script>alert('Requirements have been recorded')</script>";
	}
}

?>