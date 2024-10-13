<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./materials/images/logo1.png" type="image/icon type">
    <link rel="stylesheet" href="./materials/main.css">
    <title>Change Profile</title>
</head>
<style>
    .nav{
	display: flex;
    top: 35%;
    left: 43%;
    position: absolute;
    justify-content: center;
    }

</style>

<body>

    <div class="header">
        <div class="logo">
            <img src="./materials/images/logo2.png" alt="logo2" style="top: 17px; position: absolute;">
        </div>
        <div class="right-links">
            <a href="./home.php" class="home-link">Return to Home</a> 
            <a href="logout.php"><input type="submit" class="btn" value="Log Out" required></a>
        </div>
    </div>

    <div class="nav">
        <div class="container">

            <div class="box form-box">
                <form action="" method="post">
                    <div class="field input">
                    <h1 class="form__title">Edit Account</h1>
			    <div class="form__input-group">
			    	<input class="form__input " type="text" id="name" required autofocus placeholder="Change Username">
			    	<div class="form__input-error-message form__input--error"></div>
			    </div>
			    <div class="form__input-group">
			    	<input class="form__input" type="email" id ="Email" required autofocus placeholder="Change Email">
			    </div>
			    <div class="form__input-group">
				    <input class="form__input " type="password" id="Password" required autofocus placeholder="Change Password" >
				    <div class="form__input-error-message form__input--error"></div>
			    </div>
			    <button class="form__button" type="submit">Create</button>    
                </form>
            </div>
        </div>
    </div>
</body>
</html>