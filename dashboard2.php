<?php

require_once 'db_conn.php';
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}


$email = $_SESSION['email'];



?>

<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Dashboard</title>
        <link href="css/styles.css" rel="stylesheet"/>
        <link href="css/dashboard2.css" rel="stylesheet"/>
        <link rel="icon" type="image/jpg" href="img/SulatLogo.jpg">
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
            rel="stylesheet"/>
        <script
            src="https://use.fontawesome.com/releases/v6.1.0/js/all.js"
            crossorigin="anonymous"></script>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- AJAX library -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Bootstrap library -->
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <title>Dashboard</title>
    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <i>
                        <img src="img/sulatLogo.jpg" alt=""></i>
                </a>
                <!--NavBar Cotent-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <div class="navTitle text-center mx-auto">
                                <h3
                                    style="font-family: Georgia, 'Times New Roman', Times, serif; font-weight: 600; font-size: 2.1rem; color:#D3D3D3;">
                                    SULAT NATIONAL HIGH SCHOOL ENROLLMENT SYSTEM
                                </h3>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-flex flex-row ms-auto me-3">

                        <!-- -->
                        <form class="form-inline my-2 my-md-0">
                            <div class="dropdown">
                                <button
                                    class="btn btn-success dropdown-toggle"
                                    type="button"
                                    id="navbarDropdown1"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fas fa-user"></i>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-left"
                                    style="left: auto; right: 0;"
                                    aria-labelledby="navbarDropdown1">
                                    <a class="dropdown-item" id="logout-button" href="logout.php">Log Out</a>
                                </div>
                            </div>
                        </form>

                        <!-- -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <div class="content-wrapper mt-5">
            <div class="container">
                <h4 class="text-center">
                    <br>
                    <br>
                    Hello,
                    <?php echo $email; ?>!</h4>
                <!-- Other content here -->

            </div>

        </div>

        

       <?php
        /*
            
            $query = "SELECT email FROM enrollee WHERE email=?";
            $stmt = $db_conn->prepare($query);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result==0){

            }
            $row = $result->fetch_assoc();
           
        
        */
        ?> 

        <div class="content-wrapper mt-5">
            <div class="container">
                <h4 class="text-center"><br>
                    <br>
                    To All Enrollees</h4>
                <!-- Other content here -->
                <p class="text-center">This system only allows one form submission per account
                    <br>
                    make sure that all the information you will provide is all true and correct.</p>
            </div>

        </div>

        <div class="content-wrapper mt-5">
            <div class="container text-center">
                <br><br>
                <button
                    type="button"
                    class="btn btn-success"
                    onclick="redirectToEnrollmentForm()">Proceed</button>
            </div>
        </div>

        <script>
            function redirectToEnrollmentForm() {
                window.location.href = "EnrollmentForm.php";
            }
        </script>

    </div>
</div>
</div>
</body>