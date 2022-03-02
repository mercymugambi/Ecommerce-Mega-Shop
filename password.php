<?php
if(isset($_GET['code'])) {
    $code = $_GET['code'];

    $conn = new mySqli('localhost', 'root', '', 'megashop');
    if($conn->connect_error) {
        die('Could not connect to the database');
    }

    $verifyQuery = $conn->query("SELECT * FROM users WHERE code = '$code' ");

    if($verifyQuery->num_rows == 0) {
        header("Location: login.php");
        exit();
    }

    if(isset($_POST['submit'])) {
        $newpassword = md5($_POST['newpassword']);
        $confirm_pass = md5($_POST['confirm_pass']);
        if($newpassword == $confirm_pass){
            $changeQuery = $conn->query("UPDATE users SET pass = '$newpassword' WHERE  code = '$code'");
            if($changeQuery) {
                echo '<script>alert("Password changed successfully")</script>';
            }
        }else{
            echo '<script>alert("Passwords do not match")</script>';
        }  
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reset Password</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--Bootstrap Link-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Popins', sans-serif;
            }
            body{
                width: 100%;
                min-height: 100vh;
                background-image: url("dimite.jpg"), linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5));
                background-position: center;
                background-size: cover;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .container{
                width: 400px;
                min-height: 400px;
                background: #fff;
                border-radius: 5px;
                box-shadow: 0 0 5px rgba(0,0,0,.3);
                padding: 40px 30px;
            }
            .container .login-text{
                color: #111;
                font-weight: 500px;
                font-size: 1.1rem;
                text-align: center;
                margin-bottom: 25px;
                display: block;
                text-transform: capitalize;
            }
            .container .login-social{
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(50%, 1fr));
                margin-bottom: 25px;
            }
            .container .login-email .input-group{
                width: 100%;
                height: 50px;
                margin-bottom: 25px;
            }
            .container .login-email .input-group input{
                width: 100%;
                height: 100%;
                border: 2px solid #e7e7e7;
                padding: 15px 20px;
                font-size: 1rem;
                border-radius: 30px;
                background: transparent;
                outline: none;
                transition: .3s;
            }
            .container .login-email .input-group input:focus, .container .input-group input:valid{
                border-color: #a29bfa;
            }
            .container .login-email .input-group .btn{
                display: block;
                width: 100%;
                padding: 15px 20px;
                text-align: center;
                border: none;
                background: #a29bfe;
                outline: none;
                border-radius: 30px;
                font-size: 1.2rem;
                color: #fff;
                cursor: pointer;
                transition: .3s;
            }

            
        </style>
    </head>
    <body>
        <div class="container">
            <form action="" method="POST" class="login-email">
                <p class="login-text" style="font-size: 2rem; font-weight: 800">Reset Password</p>
                <div class="input-group">
                    <input type="password" name="newpassword" placeholder="New Password"  required>
                </div>
                
                <div class="input-group">
                    <input type="password" name="confirm_pass" placeholder="Confirm New Password"  required>
                </div>

                <div class="input-group">
                    <button name="submit" class="btn">Reset</button>
                </div>

                <p>Go back to Login page <a href="login.php"><i class="fa fa-arrow-right "></i></a></p>
                
            </form>
            
        </div>
    </body>
</html>


