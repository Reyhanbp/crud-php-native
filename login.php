<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="body">
	<div action="" class="login">
		<h1>Login</h1>
		<form method="post" action="login_request.php">
			<div class="username">
				<label for="username">
					<i class="fas fa-user"></i>Username :
				</label>
				<input type="text" name="username" placeholder="Username" required>
			</div>	
			<div class="password">
				<label for="password">
					<i class="fas fa-lock"></i>Password :
				</label>
				<input type="password" name="password" placeholder="Password" required>
			</div>
			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>