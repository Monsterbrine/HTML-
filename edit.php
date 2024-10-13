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
    .box{
        background: #fdfdfd;
        display: flex;
        flex-direction: column;
        padding: 25px 25px;
        border-radius: 20px;
        box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
                0 32px 64px -48px rgba(0,0,0,0.5);
    }
    .form__input{
	    display: block;
	    width: 100%;
	    padding: 0.75rem;
	    box-sizing: border-box;
	    border-radius: var(--border-radius);
	    border: 1px solid lightgrey;
	    outline: none;
	    background: rgb(240, 240, 240);
	    transition: background 0.2s, border-color 0.2s;
    }
    .nav{
    background:white;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    line-height:60px;
    z-index:100;
    }
</style>

<body>

    <div class="nav">
        <div class="logo">
            <img src="./materials/images/logo2.png" alt="logo2" style="top: 17px; position: absolute;">
        </div>
        <div class="right-links">
            <a href="./home.php" class="home-link">Return to Home</a> 
            <a href="logout.php"><input type="submit" class="btn" value="Log Out" required></a>
        </div>
    </div>

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
</body>
</html>