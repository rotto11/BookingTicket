<?php 

include("call_login.php") 
?>
<html lang="en">
<head>
	<title>Login</title>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<script type="text/javascript">
	function validate()	{
		var EmailId=document.getElementById("email");
		var atpos = EmailId.value.indexOf("@");
    	var dotpos = EmailId.value.lastIndexOf(".");
		var pw=document.getElementById("pw");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=EmailId.value.length) 
		{
        	alert("Enter valid email-ID");
			EmailId.focus();
        	return false;
   		}
   		if(pw.value.length< 8)
		{
			alert("Password consists of atleast 8 characters");
			pw.focus();
			return false;
		}
		return true;
	}
</script>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/logobus.png" alt="IMG">
				</div>

				<form id="login" action="register.php" onsubmit="return validate()" method="post" name="login"">
					<span class="login100-form-title">
						Member Login
					</span>

					<div id="loginarea">
	<form id="login" action="login.php" onsubmit="return validate()" method="post" name="login">
	<div id="logintext"></div><br/><br/>
	<table>
		<tr><td><div class="data">E-Mail ID:</div></td><td>&nbsp; &nbsp; &nbsp;
<input type="text" id="email" size="30" maxlength="30" name="email" placeholder="Enter your E-Mail ID"/></td></tr>
		<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
		<tr><td><div class="data">Password:</div></td><td>&nbsp; &nbsp; &nbsp;
<input type="password" id="pw" size="30" maxlength="30" name="pw" placeholder="Enter your Password"/></td></tr>
		<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	</table>
	
	
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
						
					<INPUT TYPE="Submit" value="Submit"  name="submit" id="submit" class="button" onclick="window.location.href='index.php'">
						
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="register.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>