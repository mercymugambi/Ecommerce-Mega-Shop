<?php
include('config.php');
session_start();
error_reporting(0);

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'youremail@gmail.com';                     // SMTP username
    $mail->Password   = '******';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('youremail@gmail.com', 'Adam Rashid');
    $mail->addAddress($email);     // Add a recipient

    $code = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'),0,10);

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Password Reset';
    $mail->Body    = 'To reset your password click <a href="http://localhost/monclass/password.php?code='.$code.'">here </a>';

    $conn = new mySqli('localhost', 'root', '', 'megashop');

    if($conn->connect_error) {
        die('Could not connect to the database.');
    }

    $verifyQuery = $conn->query("SELECT * FROM users WHERE email = '$email'");

    if($verifyQuery->num_rows) {
        $codeQuery = $conn->query("UPDATE users SET code = '$code' WHERE email = '$email'");
            
        $mail->send();
        echo '<script>alert("Message has been sent, check your email")</script>';
    }else{
        echo '<script>alert("Kindly use a valid email")</script>';
    }
    

} catch (Exception $e) {
    echo '<script>alert("Message could not be sent. Enter a Valid Email)</script>';
}    

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Form</title>

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
                    <input type="email" name="email" placeholder="Enter Email to change your password" value="<?php echo $email;?>" required>
                </div>

                <div class="input-group">
                    <button name="submit" class="btn">Reset Password</button>
                </div>
                <p class="login-register-text">A reset password link will be sent to your email address.</p> 
                <p class="login-register-text">Check your spam folder if not in your inbox.</p>
                <p class="login-register-text"><a href="login.php">Login Here</a>.</p>
                
            </form>
            
        </div>
    </body>
</html>


