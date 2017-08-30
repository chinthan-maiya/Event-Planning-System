<?php
	require_once('load.php');
	$j->register('login.php');
?>

<html>
	<head>
		<title>Registration Form</title>
		<style type="text/css">
			h1
			{
				color: #666666;
				font-size: 50px;
				letter-spacing:1px;
				text-shadow: 2px 2px 2px #CCCCCC;
			}
			body{ background:url(wall1.jpg) no-repeat center center fixed;}
		</style>
		<script type="text/javascript">
function validation_for_signup()
{

                var check_email = /^[\w\.]+@[a-zA-Z_]+?\.[a-zA-Z\.]{2,6}$/;
                var check_username = /^[a-zA-Z0-9_]{3,16}$/;
                var check_name = /^[a-zA-Z]{3,16}$/;
                                if(document.signup.username.value=="")
                                {
                                                alert("please enter username");
                                                document.signup.username.focus();
                                                return false;
                                }
                                else if(check_username.test(document.signup.username.value) == false)
                                {
                                                alert('Invalid  username');
                                                document.signup.username.focus();
                                                return false;
                                }
                                if(document.signup.email.value=="")
                                {
                                                alert("please enter email");
                                                document.signup.email.focus();
                                                return false;
                                }
                                else if(check_email.test(document.signup.email.value) == false)
                                {
                                                alert('Invalid  email');
                                                document.signup.email.focus();
                                                return false;
                                }
                                if(document.signup.password.value=='')
                                {
                                                alert("Please enter Password.");
                                                document.signup.password.focus();
                                                return false;
                                }
                                else if(document.signup.password.value.length<6)
                                {
                                                alert("Password is too short.");
                                                document.signup.password.focus();
                                                return false;
                                }
                    
                               
                                if(document.signup.name.value=="")
                                {
                                                alert("please enter name");
                                                document.signup.name.focus();
                                                return false;
                                }
                                else if(check_name.test(document.signup.name.value) == false)
                                {
                                                alert('Invalid  name');
                                                document.signup.name.focus();
                                                return false;
                                }
                
    
                      
}
</script>
</head>

	<body>
		<br><h1 align="center">
		PLAN IT
		</h1><hr>
		<h2 style=color:#99ccff>Join Us</h2>
		<h4 style=color:#99ccff>Stop Stressing - Start planning your event now!</h4><br>
	
	
		<div style="width: 500px; /*background: #6699ff;*/ border: 1px solid #e4e4e4; padding: 20px; margin: 10px auto;">
			<h3 style=color:white>Register</h3>
			
			<form name="signup"action="<?php echo $_SERVER['PHP_SELF']; ?>"onSubmit="return validation_for_signup()" method="post">
				<table>
					<tr>
						<td style=color:white><b>Name:</b></td>
						<td><input type="text" name="name" /></td>
					</tr>
					<tr>
						<td style=color:white><b>Username:</b></td>
						<td><input type="text" name="username" /></td>
					</tr>
				
					<tr>
						<td style=color:white><b>Password:</b></td>
						<td><input type="password" name="password" /></td>
					</tr>
					<tr>
						<td style=color:white><b>Email:</b></td>
						<td><input type="text" name="email" /></td>
					</tr>
					<input type="hidden" name="date" value="<?php echo time(); ?>" />
					<tr>
						<td></td>
						<td><input type="submit" value="Register" /></td>
					</tr>
				</table>
			</form>
			<p style=color:white><b>Already a member? </b><a href="login.php">Log in here</a></p>
		</div>
		
	</body>
</html>