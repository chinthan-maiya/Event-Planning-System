<?php
	require_once('load.php');
	$logged = $j->checkLogin();
	
	if ( $logged == false ) {
		//Build our redirect
		$url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		$redirect = str_replace('index.php', 'login.php', $url);
		
		//Redirect to the home page
		header("Location: $redirect?msg=login");
		exit;
	} else {
		//Grab our authorization cookie array
		$cookie = $_COOKIE['joombologauth'];
		
		//Set our user and authID variables
		$user = $cookie['user'];
		$authID = $cookie['authID'];
		
		//Query the database for the selected user
		$table = 'reg_table';
		$sql = "SELECT * FROM $table WHERE user_login = '" . $user . "'";
		$results = $jdb->select($sql);

		//Kill the script if the submitted username doesn't exit
		if (!$results) {
			die('Sorry, that username does not exist!');
		}

		//Fetch our results into an associative array
		$results = mysql_fetch_assoc( $results );
?>
<html>
	<head>
		<title>Members Area</title>
		<style type="text/css">
			h1
			{
			color: black;
			font-size: 60px;
			letter-spacing:1px;
			text-shadow: 2px 2px 2px #CCCCCC;
			}
			body { background: url(Event.jpg) no-repeat center center fixed;}
			p.one
			{	width: 300px;
				padding: 25px;
				border: 10px solid navy;
				margin: 25px;
			}
			a:link, a:visited 
			{
				background-color: #f44336;
				color: white;
				padding: 14px 25px;
				text-align: center;	
				text-decoration: none;
				display: inline-block;
			}
		</style>
	</head>

	<body>
		<h1 align="center">
		PLAN IT
		</h1>
		<h2 align="center">Stop Stressing, Start Planning Your Event Now!</h2> <hr>
		<div style="width: 300px; background: #fff; border: 1px solid #e4e4e4; padding: 20px; margin: 10px auto;">
			<h3>Members Area</h3>
			<p><b>User Info</b></p>
			<table>
				<tr>
					<td>Name: </td>
					<td><?php echo $results['user_name']; ?></td>
				</tr>
				
				<tr>
					<td>Username: </td>
					<td><?php echo $results['user_login']; ?></td>
				</tr>
				
				<tr>
					<td>Email: </td>
					<td><?php echo $results['user_email']; ?></td>
				</tr>
				
				<tr>
					<td>Registered: </td>
					<td><?php echo date('l, F jS, Y', $results['user_registered']); ?></td>
				</tr>
			</table>
			
			<p><a href="login.php?action=logout">Logout</a></p>
			
			
		</div>
		<p class="one" align="center">
<a href="new1.php?name=<?php echo $results['user_name'] ?>">view order status</a><br><br><a href="edit.php?name=<?php echo $results['user_name'] ?>">edit order</a><br><br><a href="new event2.php?name=<?php echo $results['user_name'] ?>">plan a new event</a><br><br><a href="feedback.php">feedback</a><br>
	
	</body>
</html>
<?php } ?>