<?php

session_start();
require_once 'db_conn.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // check if the password and confirm password match
    if ($password != $confirm_password) {
        echo 'Passwords do not match';
    } else {
        // generate a random verification code
        $new_verification_code = mt_rand(100000, 999999);

        // encrypt the new password using SHA1 and MD5
        $new_encrypted_password = SHA1(MD5($password));

        // check if the email exists in the user table
        $stmt = $db_conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            // update the user's password and verification token
            $stmt = $db_conn->prepare("UPDATE users SET password = ?, verificationToken = ?, status = 'not verified' WHERE email = ?");
            $stmt->bind_param("sss", $new_encrypted_password, $new_verification_code, $email);
            $stmt->execute();
            $affected_rows = $stmt->affected_rows;
        

            // check if the update was successful
            if ($affected_rows == 1) {
                // send the verification email to the user
                $to = $email;

                $subject = "Email Verification";
                $message = "Your verification code is $new_verification_code";

                require 'PHPMailer/src/PHPMailer.php';
                require 'PHPMailer/src/Exception.php';
                require 'PHPMailer/src/SMTP.php';

                $mail = new PHPMailer(true);

                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'sulathighschool@gmail.com'; // Your Email Address
                $mail->Password = 'dglxxojubfsgnibq';// Your Gmail app generated Password
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
                $mail->setFrom('sulathighschool@gmail.com');
                $mail->addAddress($to);
                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body = $message;

                $mail_sent = false;

                if($mail->send()) {
                    $mail_sent = true;
                    // redirect to the verification page
                    header('Location: VerifyResetPassword.php');
                    exit();
                } else {
                    echo $mail->ErrorInfo;
                    echo 'Failed to send the verification email.';
                }
            } else {
                echo 'Update failed.';
            }
        } else {
            echo 'Email not found.';
        }
    }
}

$db_conn->close();

?>




<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/jpg" href="img/SulatLogo.jpg" />
    <link rel="stylesheet" href="css/student_logIn.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      crossorigin="anonymous"
    />

    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Reset Password</title>
  </head>

  

  <body>
        <div class="wrapper">

            <h2 class="text-uppercase text-center mb-5">Reset Password</h2>

            <form class="p-3 mt-3" action="Resetpassword.php" method="post">
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        placeholder="Email"
                        id="email"
                        required>

                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password"
                        name="password"
                        id="passwordd"
                        placeholder="New password"
                        required>

                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input
                        type="password"
                        name="confirm_password"
                        id="confirm_password"
                        placeholder="Confirm Password"
                        required>

                </div>
                <div class="submit text-center">
                    <input type="submit" class="btn" name="submit" value="Reset">
                </div>
             

            </div>

        </form>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        
       

    </body>