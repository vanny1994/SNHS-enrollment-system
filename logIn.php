<?php
session_start();
$_SESSION['loggedin'] = true;



require_once 'db_conn.php';


if (isset($_POST['login'])) {
 
  $email = $_POST['email'];
  $password = $_POST['password'];

  $input_arr = array();

  if (empty($email)) {
    $input_arr['input_email_error'] = "Email is required!";
  }

  if (empty($password)) {
    $input_arr['input_pass_error'] = "Password is required!";
  }
    
  if(count($input_arr) == 0) {
    // Encrypted password
    $query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '".sha1(md5($password))."';";
    // No encryption of password version
    // $query = "SELECT * FROM useraccounts WHERE email = '$email' AND password = '$password';";
    $result = mysqli_query($db_conn, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['email'] = $email;

      if($row['status'] == 'verified' && $row['userType'] == 'user'){
        $_SESSION['user_id'] = $row['user_id'];
       
        $_SESSION['email'] = $row['email']; // Set the email value in the session
        ob_start();
      
        header('Location: dashboard2.php');
        ob_end_flush();
        exit();
      } elseif($row['status'] == 'verified' && $row['userType'] == 'admin') {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['email'] = $row['email']; // Set the email value in the session

        
        ob_start();
        header('Location: dashboard.php');
        ob_end_flush();
        exit();
      } else {
        $not_verified = "Your email is not yet verified! Please check your email for verification instructions.";
      }
    } else {
      $wrongpass = "Email or password is incorrect!";
    }
  }
}
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

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- AJAX library -->
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Bootstrap library -->
<script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Log In</title>
  </head>

  
    <body>
        <div class="wrapper">
            <div class="logo">
                <img src="img/SulatLogo.jpg" alt=""/> <br> <br>
            </div>

            <form class="p-3 mt-3" action="logIn.php" method="post">
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input
                        type="text"
                        class="form-control"
                        name="email"
                        placeholder="Email"
                        id="email"
                        required="required"/>
                    <?php echo isset($input_arr['input_email_error'])? '<label>'.$input_arr['input_email_error'].'</label>':''; ?>

                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input
                        type="password"
                        name="password"
                        id="pwd"
                        placeholder="Password"
                        required="required"/>
                    <label>
                        <?php echo isset($input_arr['input_pass_error'])? '<label>'.$input_arr['input_pass_error'].'</label>':''; ?>
                        <?php echo isset($wrongpass)? '<label>'.$wrongpass.'</label>':''; ?>
                    </label>
                </div>
                <div class="submit text-center">
                    <input type="submit" class="btn" name="login" value="Log In"/><br> <br> <br> 
                </div>
            </form>

            <div class="text-center fs-6">
                <a href="ResetPassword.php">Forgot password?</a> <br>
            </div>



            <a href="SignUp.php">Sign up</a>
        </div>
    </div>

</body>
</html>