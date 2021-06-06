<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

	<div class="charles">
		<ul class="nav">
			<li><a href="index.php">Home</a></li>
			<li class="active"><a href="index.php">login</a></li>
			<li><a href="Registration.php">Sign Up</a></li>
			<li><a href="google.com">Contact us</a></li>
	
	
		</ul>
	</div>
	<div class="loginbox">
		<h1>Login Here</h1>
		
		<form method="POST" action="login_auth.php">
			<p>Email</p>
			<input type="email" name="email" placeholder=" Enter Email">
			<p>Password</p>
			<input type="Password" name="password" placeholder=" Enter Password">
			<input type="submit" name="submit" value="Login">

			<a href="Registration.php">Create account</a>
		</form>
	</div>


</body>

</head>


</html>