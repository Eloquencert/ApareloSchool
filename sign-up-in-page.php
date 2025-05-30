<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Aparelo | Sign In/Up page</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
	<link rel="stylesheet" href="assets/css/style-sign-up-page.css">
</head>

<body>

	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="register.php" method="post">
				<h1>Create Account</h1>
				<input type="text" placeholder="login" name="login" />
				<input type="email" placeholder="email" name="email" />
				<input type="password" placeholder="password" name="password" />
				<input type="password" placeholder="repeat password" name="repeatpassword" />
				<button type="submit">Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="login.php" method="post">
				<h1>Sign in</h1>
				<input type="text" placeholder="login" name="login" />
				<input type="password" placeholder="password" name="password" />
				<button type="submit">Sign In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Enter your personal details and start journey with us</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>

	<script src="assets/js/index.js"></script>

</body>

</html>