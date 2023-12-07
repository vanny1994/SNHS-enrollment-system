<?php

session_start();
require_once 'db_conn.php';

if (isset($_POST['submit'])) {
    $new_verification_code = $_POST['verification_code'] ?? '';

     // check if the verification code matches the one in the database
     $stmt = $db_conn->prepare("SELECT * FROM users WHERE verificationToken = ?");
     $stmt->bind_param("s", $new_verification_code);
     $stmt->execute();

     $result = $stmt->get_result();
     $user = $result->fetch_assoc();

     
    if ($user) {
        // activate the user's account
        $stmt = $db_conn->prepare("UPDATE users SET status = 'verified' WHERE verificationToken = ?");

        $stmt->bind_param("s", $new_verification_code);
        $stmt->execute();

        // redirect to the login page
        header('Location: logIn.php');
        exit();
    } else {
        echo 'Invalid verification code.';
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
    <title>Log In</title>
  </head>



<body>
        <div class="wrapper">

        <h2 class="text-uppercase text-center mb-5">Password Reset Verification</h2>
        
                  <p>Please enter the verification code sent to your email.</p>

                  <form class="p-3 mt-3" action="VerifyResetPassword.php" method="post">

                      <label for="verification_code">Verification code:</label>

                      <div class="form-field d-flex align-items-center">
                          <input
                              type="text"
                              class="form-control"
                              name="verification_code"
                              id="verification_code"
                              required="required">
                      </div>
                      <div class="submit text-center">
                          <input
                              type="submit"
                              class="btn"
                              name="submit"
                              value="Verify">
                      </div>
                  </form>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
    </body>