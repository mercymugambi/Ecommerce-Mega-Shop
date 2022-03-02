<?php
include('config.php');
session_start();
error_reporting(0);
if(isset($_SESSION['username'])){
    header('Location: login.php');
}
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $conf_pass = md5($_POST['conf_pass']);

    if($pass == $conf_pass){
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if(!$result ->num_rows > 0){
            $sql = "INSERT INTO users(fname, lname, username, email, pass)
                    VALUES('$fname', '$lname', '$username', '$email', '$pass')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "<script>alert('Registration Completed Successfully. Proceed to login')</script>";
                $fname = "";
                $lname = "";
                $username = "";
                $email = "";
                $_POST['pass'] = "";
                $_POST['conf_pass'] = "";
            }else{
                echo "<script>alert('Whoops! Something went wrong, Please try again.')</script>";
            }
        }else{
            echo "<script>alert('Whoops! Email Already exists.')</script>";
        }
    }else{
        echo "<script>alert('Passwords not Matched.')</script>";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Signup Form</title>

        <!--Bootstrap Link-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

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
                    <p class="login-text" style="font-size: 2rem; font-weight: 800">Register</p>
                    <div class="input-group">
                        <input type="text" name="fname" placeholder="First name" value="<?php echo $fname;?>" required>
                    </div>
                    <div class="input-group">
                        <input type="text" name="lname" placeholder="Last name" value="<?php echo $lname;?>" required>
                    </div>
                    <div class="input-group">
                        <input type="text" name="username" placeholder="Username" value="<?php echo $username;?>" required>
                    </div>
                    <div class="input-group">
                        <input type="email" name="email" placeholder="Email" value="<?php echo $email;?>" required>
                    </div>
                    
                    <div class="input-group">
                        <input type="password" name="pass" placeholder="Password" value="<?php echo $_POST['password'];?>" required>
                    </div>
                    <div class="input-group">
                        <input type="password" name="conf_pass" placeholder="confirm Password" value="<?php echo $_POST['conf_pass'];?>" required>
                    </div>

                    <div class="input-group">
                        <button name="submit" class="btn">Sign Up</button>
                    </div>
                    <p class="login-register-text">Already have an account?<a href="login.php">Login Here</a>.</p>
                    
                </form>
            
        </div>
    </body>
</html>