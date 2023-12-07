<?php
require_once 'db_conn.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // check if the password and confirm password match
    if ($password != $confirm_password) {
        echo 'Passwords do not match';
    } else {
        // check if the email already exists in the database
        $stmt = $db_conn->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        if ($count > 0) {

            echo "<script>alert('Email already in use Try another email')</script>";
        } else {
            // generate a random verification code
            $verification_code = mt_rand(100000, 999999);

            // encrypt the password using SHA1 and MD5
            $encrypted_password = SHA1(MD5($password));

            // insert the user data into the database
            $stmt = $db_conn->prepare("INSERT INTO users (email, password, verificationToken)
                                        VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $email, $encrypted_password, $verification_code);
            $stmt->execute();

            // send the verification email to the user
            $to = $email;

            $subject = "Email Verification";
            $message = "Your verification code is $verification_code";


            require 'PHPMailer/src/PHPMailer.php';
            require 'PHPMailer/src/Exception.php';
            require 'PHPMailer/src/SMTP.php';


            $mail = new PHPMailer(true);

            $mail -> isSMTP();
            $mail -> Host = 'smtp.gmail.com';
            $mail -> SMTPAuth = true;
            $mail->Username = 'sulathighschool@gmail.com'; // Your Email Address
            $mail->Password = 'dglxxojubfsgnibq'; // Your Gmail app generated Password
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->SetFrom('sulathighschool@gmail.com');
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->AddAddress($to);

            $mail -> isHTML(true);

            $mail_sent = false;


            if($mail->Send()) {
                $mail_sent = true;
                // redirect to the login  
                header('Location: AccountVerification.php');
                exit();
            } else {
                echo $mail->ErrorInfo;

                echo 'Failed to send the verification email.';
            }
        }
    }
}

$db_conn->close();



?>


<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="icon" type="image/jpg" href="img/SulatLogo.jpg"/>
        <link rel="stylesheet" href="css/student_logIn.css"/>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            crossorigin="anonymous"/>

        <link
            href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            rel="stylesheet"
            id="bootstrap-css"/>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>

              <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- AJAX library -->
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Bootstrap library -->
<script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <title>Sign Up</title>
    </head>

    
    <body>
        <div class="wrapper">

            <h2 class="text-uppercase text-center mb-5">Create an account</h2>

            <form class="p-3 mt-3" action="SignUp.php" method="post">
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        placeholder="email"
                        id="email"
                        required>

                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password"
                        name="password"
                        id="passwordd"
                        placeholder="password"
                        required>

                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input
                        type="password"
                        name="confirm_password"
                        id="confirm_password"
                        placeholder="confirm password"
                        required>

                </div>
                <div class="submit text-center">
                    <input type="submit" class="btn" name="submit" value="Sign Up">
                </div>
             

                <p class="text-center text-muted mt-5 mb-0">Already have an account?
                </p>
 
                <div class="text-center fs-6">
                    <a href="logIn.php">Log In Here</a>
                </div>

            </div>

        </form>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        
       

    </body>