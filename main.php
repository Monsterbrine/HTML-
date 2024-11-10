<?php 
   session_start();

   include("./materials/php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./materials/images/logo1.png" type="image/icon type">
    <link rel="stylesheet" href="./materials/main.css">
    <title>Home</title>
</head>
<body>

    <div class="nav">
        <div class="logo">
            <img src="./materials/images/logo2.png" alt="logo2" >
        </div>
        <div class="right-links">
            <?php 
                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['username'];
                    $res_Email = $result['email'];
                    $res_id = $result['id'];
                }
                
                echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>
            <a href="logout.php"><input type="submit" class="btn" value="Log Out" required></a>
        </div>
    </div>


    <main>

        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
                </div>
                <div class="box">
                <p>Your email is <b><?php echo $res_Email ?></b>.</p>
                </div>
            </div>
        </div>

    </main>
    
</body>
</html>