<?php 
	session_start();
?>
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

	<div class="nav">
        <div class="logo">
            <img src="./materials/images/logo2.png" alt="logo2" >
        </div>
    </div>
		

</div>
	<div class="container">
		<div>
			<?php 
             
				include("./materials/php/config.php");
				if(isset($_POST['submit'])){
				$email = mysqli_real_escape_string($con,$_POST['email']);
				$password = mysqli_real_escape_string($con,$_POST['password']);

				$result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
				$row = mysqli_fetch_assoc($result);

				if(is_array($row) && !empty($row)){
					$_SESSION['valid'] = $row['email'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['id'] = $row['id'];
				}else{
					echo "<div class='container'>
						<p>Wrong Username or Password</p>
						</div> <br>";
					echo "<a href='../index.php'><button class='form_button'>Go Back</button>";
			
				}
				if(isset($_SESSION['valid'])){
					header("Location: main.php");
				}
				}else{

			
			?>
			<form class="form " action="" id="Login" method="post">
				<h1 class="form__title">Login</h1>
				
				<div class="form__message form__message--error"></div>
				<div class="form__input-group">
					<input class="form__input " type="text" id="name" name="name" required autofocus placeholder="Insert Username">
					
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
	
			<?php } ?>
		 </div>
		<div>
			<?php 
			
			include("./materials/php/config.php");
			if(isset($_POST['submit'])){
				$username = $_POST['username'];
				$email = $_POST['email'];
				$password = $_POST['password'];

			//verifying the unique email

			$verify_query = mysqli_query($con,"SELECT email FROM users WHERE email='$email'");

			if(mysqli_num_rows($verify_query) !=0 ){
				echo "<div class='container'>
						<p>This email is used, Try another One Please!</p>
					</div> <br>";
				echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
			}
			else{

				mysqli_query($con,"INSERT INTO users(username,email,password) VALUES('$username','$email','$password')") or die("Erroe Occured");

				echo "<div class='container'>
						<p>Registration successfully!</p>
					</div> <br>";
				echo "<a href='../index.php'><button class='form_button'>Login Now</button>";
			

			}

			}else{
			
			?>
		
			<form class="form form--hidden" id="Create" method="post">
			
				<h1 class="form__title">Create Account</h1>
				<div class="form__input-group">
					<input class="form__input " name="name" type="text" id="username" required autofocus placeholder="Insert Username">
					<div class="form__input-error-message form__input--error"></div>
				</div>
				<div class="form__input-group">
					<input class="form__input" name="email" type="email" id ="email" required autofocus placeholder="Insert Email">
				</div>
				<div class="form__input-group">
					<input class="form__input" name="password" type="password" id="password" required autofocus placeholder="Insert Password" >
					<div class="form__input-error-message form__input--error"></div>
				</div>
				<button class="form__button" type="submit">Create</button>
				<p class="form__text">
					<a id="linkLogin" href="./" class="form__link">Already have a account? Login</a>
				</p>
			</form>
			<?php } ?>
		</div>
	</div>
	<script src="./materials/main.js"></script>
</body>
</html>