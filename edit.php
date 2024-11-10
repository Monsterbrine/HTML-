<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>

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

<body>

    <div class="nav">
        <div class="logo">
            <img src="./materials/images/logo2.png" alt="logo2" >
        </div>
        <div class="right-links">
            <a href="./main.php" class="home-link">Return to Home</a> 
            <a href="logout.php"><input type="submit" class="btn" value="Log Out" required></a>
        </div>
    </div>

    <div class="container">
            <form action="" method="post">
                <?php 
                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $pass = $_POST['password']

                    $id = $_SESSION['id'];

                    $edit_query = mysqli_query($con,"UPDATE users SET Username='$username', Email='$email', Age='$age' WHERE Id=$id ") or die("error occurred");

                    if($edit_query){
                        echo "<div class='message'>
                        <p>Profile Updated!</p>
                    </div> <br>";
                echo "<a href='main.php'><button class='btn'>Go Home</button>";
        
                    }
                }else{

                    $id = $_SESSION['id'];
                    $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id ");

                    while($result = mysqli_fetch_assoc($query)){
                        $res_Uname = $result['username'];
                        $res_Email = $result['email'];
                        $res_Pass = $result['password'];
                    }

                ?>
                <div class="field input">
                    <h1 class="form__title">Edit Account</h1>
			        <div class="form__input-group">
				        <input class="form__input " type="text" name="username" id="username" value="<?php echo $res_Uname; ?>"required autofocus placeholder="Change Username">
			        <div class="form__input-error-message form__input--error"></div>
			    </div>
			        <div class="form__input-group">
			            <input class="form__input" name="email" type="email" id ="Email" value="<?php echo $res_Email; ?>" required autofocus placeholder="Change Email">
			        </div>
			    <div class="form__input-group">
				    <input class="form__input " type="password" id="Password" required autofocus placeholder="Change Password" >
				    <div class="form__input-error-message form__input--error"></div>
			    </div>
			    <button class="form__button" type="submit">Create</button>    
            </form>
            <?php } ?>
    </div>
</body>
</html>