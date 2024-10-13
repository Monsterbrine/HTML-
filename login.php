<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="./materials/images/logo1.png" type="image/icon type">
	<link rel="stylesheet" href="./materials/main.css">
</head>
<body>
	<div class="nav" style="">

		<div class="logo">
			<img src="./materials/images/logo2.png" alt="logo2" style="top: 17px; position: absolute;">
		</div>
		<div class="right-links">
			<a href="#" class="home-link">Change Profile</a>
			<a href="logout.php"><input type="submit" class="btn" value="Log Out" required></a>
		</div>
		
	</div>

</div>
	<div class="container" style="">

		<form class="form " action="" id="Login" method="post">
			<h1 class="form__title">Login</h1>
			
			<div class="form__message form__message--error"></div>
			<div class="form__input-group">
				<input class="form__input " type="text" id="name" name="name" required autofocus placeholder="Insert Username">
				<div class="form__input-error-message form__input--error"></div>
			</div>
			<div class="form__input-group">
				<input class="form__input " type="password" id="password" name="password" required autofocus placeholder="Insert Password">
				<div class="form__input-error-message form__input--error"></div>
			</div>
			<input type="submit" class="form__button" name="submit" value="Login" required>
			<p class="form__text">
				<a id="linkCreateAcc" href="#" class="form__link"> Forgot your password?</a>
			</p>
			<p class="form__text">
				<a id="linkCreate" href="./" class="form__link"> Don't have a account? Create account</a>
			</p>
		</form>
	
		<form class="form form--hidden" id="Create" method="post">
		
			<h1 class="form__title">Create Account</h1>
			<div class="form__input-group">
				<input class="form__input " type="text" id="name" required autofocus placeholder="Insert Username">
				<div class="form__input-error-message form__input--error"></div>
			</div>
			<div class="form__input-group">
				<input class="form__input" type="email" id ="Email" required autofocus placeholder="Insert Email">
			</div>
			<div class="form__input-group">
				<input class="form__input " type="password" id="Password" required autofocus placeholder="Insert Password" >
				<div class="form__input-error-message form__input--error"></div>
			</div>
			<button class="form__button" type="submit">Create</button>
			<p class="form__text">
				<a id="linkLogin" href="./" class="form__link">Already have a account? Login</a>
			</p>
		</form>
	</div>
	<script src="./materials/main.js"></script>
</body>
</html>