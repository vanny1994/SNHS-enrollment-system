<?php
include_once 'db_conn.php';

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}



?>
<!DOCTYPE html>
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
        <link href="css/dashboard.css" rel="stylesheet"/>
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

    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            



            <div class="navTitle text-center mx-auto">
                <h3 style="font-family: Georgia, 'Times New Roman', Times, serif; font-weight: 600; font-size: 2.1rem; color:#D3D3D3;">
                    SULAT NATIONAL HIGH SCHOOL ENROLLMENT SYSTEM
                </h3>
            </div>   

            <form class="form-inline my-2 my-md-0">
  <div class="dropdown">
    <button class="btn btn-success dropdown-toggle" type="button" id="navbarDropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-user"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-left" style="left: auto; right: 0;" aria-labelledby="navbarDropdown1">
      <a class="dropdown-item" id="logout-button" href="logout.php">Log Out</a>
    </div>
  </div>
</form>



        </nav>

<!-- Side Navigation -->
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav bg-success" id="sidenavAccordion">
            <div class="sb-sidenav-menu bg">
                <div class="nav">
                    <div class="navbar-brand d-flex">

                        <img
                            src="img/sulatLogo.jpg"
                            alt=""
                            style="max-width: 50%;  border-radius: 48px;">

                    </div>

                    <div class="sb-sidenav-menu-heading text-center">
                        <span class="sb-nav-link-text" style="color:#D3D3D3;:">DEPARTMENT</span></div>
                    <a
                        class="nav-link collapsed"
                        href="#"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseLayouts"
                        aria-expanded="false"
                        aria-controls="collapseLayouts"
                        style="transition: box-shadow 0.3s ease-in-out;">
                        <div class="sb-nav-link-icon">
                            <i class="fa-sharp fa-solid fa-school-flag" style="color:#D3D3D3;:"></i>
                        </div>
                        <span class="sb-nav-link-text" style="color:#D3D3D3;:">Junior High</span>
                        <div class="sb-sidenav-collapse-arrow">
                            <i class="fas fa-angle-down" style="color:#D3D3D3;:"></i>
                        </div>
                    </a>

                    <div
                        class="collapse"
                        id="collapseLayouts"
                        aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="#" style="color:#D3D3D3;:" id="load-grade-7">Grade 7</a>
                            <a class="nav-link" href="#" style="color:#D3D3D3;:" id="load-grade-8">Grade 8</a>
                            <a class="nav-link" href="#" style="color:#D3D3D3;:" id="load-grade-9">Grade 9</a>
                            <a class="nav-link" href="#" style="color:#D3D3D3;:" id="load-grade-10">Grade 10</a>
                        </nav>
                    </div>

                    <a
                        class="nav-link collapsed"
                        href="#"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsePages"
                        aria-expanded="false"
                        aria-controls="collapsePages">
                        <div class="sb-nav-link-icon">
                            <i class="fa-sharp fa-solid fa-school-flag" style="color:#D3D3D3;:"></i>

                        </div>
                        <span class="sb-nav-link-text" style="color:#D3D3D3;:">Senior High</span>
                        <div class="sb-sidenav-collapse-arrow">
                            <i class="fas fa-angle-down" style="color:#D3D3D3;:"></i>
                        </div>
                    </a>
                    <!-- TVL -->
                    <div
                        class="collapse"
                        id="collapsePages"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a
                                class="nav-link collapsed"
                                href="#"
                                data-bs-toggle="collapse"
                                data-bs-target="#pagesCollapseTVL"
                                aria-expanded="false"
                                aria-controls="pagesCollapseTVL"
                                style="color:#D3D3D3;:">
                                TVL
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div
                                class="collapse"
                                id="pagesCollapseTVL"
                                aria-labelledby="headingOne"
                                data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a
                                        class="nav-link collapsed"
                                        href="#"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#pagesCollapseICT"
                                        aria-expanded="false"
                                        aria-controls="pagesCollapseICT"
                                        style="color:#D3D3D3;:">
                                        ICT
                                        <div class="sb-sidenav-collapse-arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                    </a>
                                    <div
                                        class="collapse"
                                        id="pagesCollapseICT"
                                        aria-labelledby="headingOne"
                                        data-bs-parent="#pagesCollapseTVL">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" id="load-ICT-grade11" href="#" style="color:#D3D3D3;:">Grade 11</a>
                                            <a class="nav-link" id="load-ICT-grade12" href="#" style="color:#D3D3D3;:">Grade 12</a>
                                        </nav>
                                    </div>
                                    <a
                                        class="nav-link collapsed"
                                        href="#"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#pagesCollapseHE"
                                        aria-expanded="false"
                                        aria-controls="pagesCollapseHE"
                                        style="color:#D3D3D3;:">
                                        HE
                                        <div class="sb-sidenav-collapse-arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                    </a>
                                    <div
                                        class="collapse"
                                        id="pagesCollapseHE"
                                        aria-labelledby="headingOne"
                                        data-bs-parent="#pagesCollapseTVL">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" id="load-HE-grade11" href="#" style="color:#D3D3D3;:">Grade 11</a>
                                            <a class="nav-link" id="load-HE-grade12" href="#" style="color:#D3D3D3;:">Grade 12</a>
                                        </nav>
                                    </div>
                                    <a
                                        class="nav-link collapsed"
                                        href="#"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#pagesCollapseEIM"
                                        aria-expanded="false"
                                        aria-controls="pagesCollapseEIM"
                                        style="color:#D3D3D3;:">
                                        EIM
                                        <div class="sb-sidenav-collapse-arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                    </a>
                                    <div
                                        class="collapse"
                                        id="pagesCollapseEIM"
                                        aria-labelledby="headingOne"
                                        data-bs-parent="#pagesCollapseTVL">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" id="load-EIM-grade11" href="#" style="color:#D3D3D3;:">Grade 11</a>
                                            <a class="nav-link" id="load-EIM-grade12" href="#" style="color:#D3D3D3;:">Grade 12</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <!--Academic -->

                    <div
                        class="collapse"
                        id="collapsePages"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a
                                class="nav-link collapsed"
                                href="#"
                                data-bs-toggle="collapse"
                                data-bs-target="#pagesCollapseAcademic"
                                aria-expanded="false"
                                aria-controls="pagesCollapseAcademic"
                                style="color:#D3D3D3;:">
                                ACADEMIC
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div
                                class="collapse"
                                id="pagesCollapseAcademic"
                                aria-labelledby="headingOne"
                                data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a
                                        class="nav-link collapsed"
                                        href="#"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#pagesCollapseHUMSS"
                                        aria-expanded="false"
                                        aria-controls="pagesCollapseHUMSS"
                                        style="color:#D3D3D3;:">
                                        HUMSS
                                        <div class="sb-sidenav-collapse-arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                    </a>
                                    <div
                                        class="collapse"
                                        id="pagesCollapseHUMSS"
                                        aria-labelledby="headingOne"
                                        data-bs-parent="#pagesCollapseAcademic">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#" id="load-HUMSS-grade11" style="color:#D3D3D3;:">Grade 11</a>
                                            <a class="nav-link" href="#" id="load-HUMSS-grade12" style="color:#D3D3D3;:">Grade 12</a>
                                        </nav>
                                    </div>
                                    <a
                                        class="nav-link collapsed"
                                        href="#"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#pagesCollapseABM"
                                        aria-expanded="false"
                                        aria-controls="pagesCollapseABM"
                                        style="color:#D3D3D3;:">
                                        ABM
                                        <div class="sb-sidenav-collapse-arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                    </a>
                                    <div
                                        class="collapse"
                                        id="pagesCollapseABM"
                                        aria-labelledby="headingOne"
                                        data-bs-parent="#pagesCollapseAcademic">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#" id="load-ABM-grade11" style="color:#D3D3D3;:">Grade 11</a>
                                            <a class="nav-link" href="#" id="load-ABM-grade12" style="color:#D3D3D3;:">Grade 12</a>
                                        </nav>
                                    </div>

                                </nav>
                            </div>
                        </nav>
                    </div>
                    <!-- academic end -->
                    

                  
                </div>
                  <!-- add student -->
                      <div>
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="EnrollmentForm.php"  style="color:#D3D3D3; padding-left:18px;"> <i class="fa-solid fa-user-plus" style="padding-right:5px;"></i>Enroll Student</a>
                            
                        </nav>
                    </div>

            </div>
           
           
        </nav>
       

    </div>
    <!--side nav ending -->
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">

                <ol class="breadcrumb mb-4">
                    <!-- empty div-->

                </ol>

                <!-- boxes -->
                <div class="row student d-flex justify-content-center">
                    <div class="col-sm-3">
                        <div
                            class="card text-white bg-primary mb-3"
                            style="border-radius: 25px;
                                 box-shadow: inset 2px 2px 2px 0px rgba(255,255,255,.5),
                                    7px 7px 20px 0px rgba(0,0,0,.1),
                                    4px 4px 5px 0px rgba(0,0,0,.1);">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fa fa-users fa-3x"></i>
                                    </div>

                                    <!--Total Enrolle Applicants -->
                                    <div class="col-sm-8">
                                        <div class="float-sm-right">&nbsp;<span style="font-size: 30px"></span></div>
                                        <div class="clearfix"></div>
                                        <div class="float-sm-right">Enrollment Request</div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item-primary list-group-item list-group-item-action">
                                <a href="#" id="load-table-for-enrollee-list" style="text-decoration: none;">

                                    <div class="row">
                                        <div class="col-sm-8" style="color:#5E565A; font-weight:bold;">
                                            <p class="">
                                                View All Request</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <span style="color:#5E565A; font-weight:bold;"></span>

                                        </div>
                                    </div>

                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div
                            class="card text-white bg-info mb-3"
                            style="border-radius: 25px;
                                     box-shadow: inset 2px 2px 2px 0px rgba(255,255,255,.5),
                                        7px 7px 20px 0px rgba(0,0,0,.1),
                                        4px 4px 5px 0px rgba(0,0,0,.1);">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fa fa-users fa-3x"></i>
                                    </div>

                                    <!--Total Transfer || Returnee -->
                                    <div class="col-sm-8">
                                        <div class="float-sm-right">&nbsp;<span style="font-size: 30px"></span></div>
                                        <div class="clearfix"></div>
                                        <div class="float-sm-right">Transferee/Returnee</div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item-primary list-group-item list-group-item-action">
                                <a href="#" id="load-table-for-transferee-list" style="text-decoration: none;">
                                    <div class="row">
                                        <div class="col-sm-8" style="color:#5E565A; font-weight:bold;">
                                            <p class="">
                                                View All Request</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <span style="color:#5E565A; font-weight:bold;"></span>

                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--boxes ends here -->
            </div>

                     <!-- ALL Pending Enrollee -->
            <div class="container-fluid px-4">
                <!--table should be placed here -->
                <div id="table-container1"></div>
                <script>
                    $(document).ready(function () {
                        // Attach click event to button all enrollee request
                        $('#load-table-for-enrollee-list').on('click', function () {
                            // Send AJAX request to table.php
                            $.ajax({
                                url: 'totalEnrolleeList_table.php',
                                type: 'GET',
                                success: function (response) {
                                    // Display table content in div
                                    $('#table-container1').html(response);
                                    // Show table container
                                    $('#table-container1').show();
                                    // Hide other table container
                                    $('#table-container2').hide();
                                    $('#table-container-for-grade7').hide();
                                    $('#table-container-for-grade8').hide();
                                    $('#table-container-for-grade9').hide();
                                    $('#table-container-for-grade10').hide();
                                    $('#table-container-for-HUMSS-grade11').hide();
                                    $('#table-container-for-HUMSS-grade12').hide();
                                     $('#table-container-for-ABM-grade11').hide();
                                    $('#table-container-for-ABM-grade12').hide();
                                    $('#table-container-for-ICT-grade11').hide();
                                    $('#table-container-for-ICT-grade12').hide();
                                    $('#table-container-for-HE-grade11').hide();
                                    $('#table-container-for-HE-grade12').hide();
                                    $('#table-container-for-EIM-grade11').hide();
                                    $('#table-container-for-EIM-grade12').hide();
                                }
                            });
                        });
                    });
                </script>
            </div>
                             <!-- ALL pending Transferee-->
            <div class="container-fluid px-4">
                <!--table should be placed here -->
                <div id="table-container2"></div>
                <script>
                    $(document).ready(function () {
                        // Attach click event to button all transferee request
                        $('#load-table-for-transferee-list').on('click', function () {
                            // Send AJAX request to table.php
                            $.ajax({
                                url: 'transferee_returnee_table.php',
                                type: 'GET',
                                success: function (response) {
                                    // Display table content in div
                                    $('#table-container2').html(response);
                                    $('#table-container2').show();
                                    // Hide other table container
                                    $('#table-container1').hide();
                                    $('#table-container-for-grade7').hide();
                                    $('#table-container-for-grade8').hide();
                                    $('#table-container-for-grade9').hide();
                                    $('#table-container-for-grade10').hide();
                                    $('#table-container-for-HUMSS-grade11').hide();
                                    $('#table-container-for-HUMSS-grade12').hide();
                                    $('#table-container-for-ABM-grade11').hide();
                                    $('#table-container-for-ABM-grade12').hide();
                                    $('#table-container-for-ICT-grade11').hide();
                                    $('#table-container-for-ICT-grade12').hide();
                                    $('#table-container-for-HE-grade11').hide();
                                    $('#table-container-for-HE-grade12').hide();
                                    $('#table-container-for-EIM-grade11').hide();
                                    $('#table-container-for-EIM-grade12').hide();

                                }
                            });
                        });
                    });
                </script>
            </div>
                             <!-- GRADE 7 -->
            <div class="container-fluid px-4">
                <!--table should be placed here -->
                <div id="table-container-for-grade7"></div>

                <script>
                    // script for loading all grade7 list
                     $(document).ready(function () {
                        // Attach click event to button
                        $('#load-grade-7').on('click', function () {
                            // Send AJAX request to table.php
                            $.ajax({
                                url: 'load-table-list-for-grade7.php',
                                type: 'GET',
                                success: function (response) {
                                    // Display table content in div
                                    $('#table-container-for-grade7').html(response);
                                    $('#table-container-for-grade7').show();
                                    // Hide other table container
                                    $('#table-container1').hide();
                                    $('#table-container2').hide();
                                    $('#table-container-for-grade8').hide();
                                    $('#table-container-for-grade9').hide();
                                    $('#table-container-for-grade10').hide();
                                    $('#table-container-for-HUMSS-grade11').hide();
                                    $('#table-container-for-HUMSS-grade12').hide();
                                    $('#table-container-for-ABM-grade11').hide();
                                    $('#table-container-for-ABM-grade12').hide();
                                    $('#table-container-for-ICT-grade11').hide();
                                    $('#table-container-for-ICT-grade12').hide();
                                    $('#table-container-for-HE-grade11').hide();
                                    $('#table-container-for-HE-grade12').hide();
                                    $('#table-container-for-EIM-grade11').hide();
                                    $('#table-container-for-EIM-grade12').hide();
                                    

                                }
                            });
                        });
                    });
                </script>
            </div>
                        <!-- GRADE 8 -->
            <div class="container-fluid px-4">
                <!--table should be placed here -->
                <div id="table-container-for-grade8"></div>

                <script>
                    // script for loading all grade8 list
                     $(document).ready(function () {
                        // Attach click event to button
                        $('#load-grade-8').on('click', function () {
                            // Send AJAX request to table.php
                            $.ajax({
                                url: 'load-table-list-for-grade8.php',
                                type: 'GET',
                                success: function (response) {
                                    // Display table content in div
                                    $('#table-container-for-grade8').html(response);
                                    $('#table-container-for-grade8').show();
                                    // Hide other table container
                                    $('#table-container1').hide();
                                    $('#table-container2').hide();
                                    $('#table-container-for-grade7').hide();
                                    $('#table-container-for-grade9').hide();
                                    $('#table-container-for-grade10').hide();
                                    $('#table-container-for-HUMSS-grade11').hide();
                                    $('#table-container-for-HUMSS-grade12').hide();
                                    $('#table-container-for-ABM-grade11').hide();
                                    $('#table-container-for-ABM-grade12').hide();
                                    $('#table-container-for-ICT-grade11').hide();
                                    $('#table-container-for-ICT-grade12').hide();
                                    $('#table-container-for-HE-grade11').hide();
                                    $('#table-container-for-HE-grade12').hide();
                                    $('#table-container-for-EIM-grade11').hide();
                                    $('#table-container-for-EIM-grade12').hide();

                                }
                            });
                        });
                    });
                </script>
            </div>
                         <!-- GRADE 9 -->
            <div class="container-fluid px-4">
                <!--table should be placed here -->
                <div id="table-container-for-grade9"></div>

                <script>
                    // script for loading all grade9 list
                     $(document).ready(function () {
                        // Attach click event to button
                        $('#load-grade-9').on('click', function () {
                            // Send AJAX request to table.php
                            $.ajax({
                                url: 'load-table-list-for-grade9.php',
                                type: 'GET',
                                success: function (response) {
                                    // Display table content in div
                                    $('#table-container-for-grade9').html(response);
                                    $('#table-container-for-grade9').show();
                                    // Hide other table container
                                    $('#table-container1').hide();
                                    $('#table-container2').hide();
                                    $('#table-container-for-grade7').hide();
                                    $('#table-container-for-grade8').hide();
                                    $('#table-container-for-grade10').hide();
                                    $('#table-container-for-HUMSS-grade11').hide();
                                    $('#table-container-for-HUMSS-grade12').hide();
                                    $('#table-container-for-ABM-grade11').hide();
                                    $('#table-container-for-ABM-grade12').hide();
                                    $('#table-container-for-ICT-grade11').hide();
                                    $('#table-container-for-ICT-grade12').hide();
                                    $('#table-container-for-HE-grade11').hide();
                                    $('#table-container-for-HE-grade12').hide();
                                    $('#table-container-for-EIM-grade11').hide();
                                    $('#table-container-for-EIM-grade12').hide();

                                }
                            });
                        });
                    });
                </script>
            </div>
                         <!-- GRADE 10 -->
            <div class="container-fluid px-4">
                <!--table should be placed here -->
                <div id="table-container-for-grade10"></div>

                <script>
                    // script for loading all grade10 list
                     $(document).ready(function () {
                        // Attach click event to button
                        $('#load-grade-10').on('click', function () {
                            // Send AJAX request to table.php
                            $.ajax({
                                url: 'load-table-list-for-grade10.php',
                                type: 'GET',
                                success: function (response) {
                                    // Display table content in div
                                    $('#table-container-for-grade10').html(response);
                                    $('#table-container-for-grade10').show();
                                    // Hide other table container
                                    $('#table-container1').hide();
                                    $('#table-container2').hide();
                                    $('#table-container-for-grade7').hide();
                                    $('#table-container-for-grade8').hide();
                                    $('#table-container-for-grade9').hide();
                                    $('#table-container-for-HUMSS-grade11').hide();
                                    $('#table-container-for-HUMSS-grade12').hide();
                                    $('#table-container-for-ABM-grade11').hide();
                                    $('#table-container-for-ABM-grade12').hide();
                                    $('#table-container-for-ICT-grade11').hide();
                                    $('#table-container-for-ICT-grade12').hide();
                                    $('#table-container-for-HE-grade11').hide();
                                    $('#table-container-for-HE-grade12').hide();
                                    $('#table-container-for-EIM-grade11').hide();
                                    $('#table-container-for-EIM-grade12').hide();

                                }
                            });
                        });
                    });
                </script>
            </div>
                         <!-- HUMSS GRADE 11 -->
            <div class="container-fluid px-4">
                <!--table should be placed here -->
                <div id="table-container-for-HUMSS-grade11"></div>

                <script>
                    // script for loading all  HUMSS Grade 11 list
                     $(document).ready(function () {
                        // Attach click event to button
                        $('#load-HUMSS-grade11').on('click', function () {
                            // Send AJAX request to table.php
                            $.ajax({
                                url: 'load-table-list-for-HUMSS-grade11.php',
                                type: 'GET',
                                success: function (response) {
                                    // Display table content in div
                                    $('#table-container-for-HUMSS-grade11').html(response);
                                    $('#table-container-for-HUMSS-grade11').show();
                                    // Hide other table container
                                    $('#table-container1').hide();
                                    $('#table-container2').hide();
                                    $('#table-container-for-grade7').hide();
                                    $('#table-container-for-grade8').hide();
                                    $('#table-container-for-grade9').hide();
                                    $('#table-container-for-grade10').hide();
                                    $('#table-container-for-HUMSS-grade12').hide();
                                    $('#table-container-for-ABM-grade11').hide();
                                    $('#table-container-for-ABM-grade12').hide();
                                    $('#table-container-for-ICT-grade11').hide();
                                    $('#table-container-for-ICT-grade12').hide();
                                    $('#table-container-for-HE-grade11').hide();
                                    $('#table-container-for-HE-grade12').hide();
                                    $('#table-container-for-EIM-grade11').hide();
                                    $('#table-container-for-EIM-grade12').hide();
                                   

                                }
                            });
                        });
                    });
                </script>
            </div>

                         <!-- HUMSS Grade 12 -->
            <div class="container-fluid px-4">
                <!--table should be placed here -->
                <div id="table-container-for-HUMSS-grade12"></div>

                <script>
                    // script for loading all  HUMSS Grade 12 list
                     $(document).ready(function () {
                        // Attach click event to button
                        $('#load-HUMSS-grade12').on('click', function () {
                            // Send AJAX request to table.php
                            $.ajax({
                                url: 'load-table-list-for-HUMSS-grade12.php',
                                type: 'GET',
                                success: function (response) {
                                    // Display table content in div
                                    $('#table-container-for-HUMSS-grade12').html(response);
                                    $('#table-container-for-HUMSS-grade12').show();
                                    // Hide other table container
                                    $('#table-container1').hide();
                                    $('#table-container2').hide();
                                    $('#table-container-for-grade7').hide();
                                    $('#table-container-for-grade8').hide();
                                    $('#table-container-for-grade9').hide();
                                    $('#table-container-for-grade10').hide();
                                    $('#table-container-for-HUMSS-grade11').hide();
                                    $('#table-container-for-ABM-grade11').hide();
                                    $('#table-container-for-ABM-grade12').hide();
                                    $('#table-container-for-ICT-grade11').hide();
                                    $('#table-container-for-ICT-grade12').hide();
                                    $('#table-container-for-HE-grade11').hide();
                                    $('#table-container-for-HE-grade12').hide();
                                    $('#table-container-for-EIM-grade11').hide();
                                    $('#table-container-for-EIM-grade12').hide();
                                   

                                }
                            });
                        });
                    });
                </script>
            </div>


                             <!-- ABM GRADE 11 -->
            <div class="container-fluid px-4">
                <!--table should be placed here -->
                <div id="table-container-for-ABM-grade11"></div>

                <script>
                    // script for loading all  ABM Grade 11 list
                     $(document).ready(function () {
                        // Attach click event to button
                        $('#load-ABM-grade11').on('click', function () {
                            // Send AJAX request to table.php
                            $.ajax({
                                url: 'load-table-list-for-ABM-grade11.php',
                                type: 'GET',
                                success: function (response) {
                                    // Display table content in div
                                    $('#table-container-for-ABM-grade11').html(response);
                                    $('#table-container-for-ABM-grade11').show();
                                    // Hide other table container
                                    $('#table-container1').hide();
                                    $('#table-container2').hide();
                                    $('#table-container-for-grade7').hide();
                                    $('#table-container-for-grade8').hide();
                                    $('#table-container-for-grade9').hide();
                                    $('#table-container-for-grade10').hide();
                                    $('#table-container-for-HUMSS-grade11').hide();
                                    $('#table-container-for-HUMSS-grade12').hide();
                                    $('#table-container-for-ABM-grade12').hide();
                                    $('#table-container-for-ICT-grade11').hide();
                                    $('#table-container-for-ICT-grade12').hide();
                                    $('#table-container-for-HE-grade11').hide();
                                    $('#table-container-for-HE-grade12').hide();
                                    $('#table-container-for-EIM-grade11').hide();
                                    $('#table-container-for-EIM-grade12').hide();
                                   

                                }
                            });
                        });
                    });
                </script>
            </div>

        </main>
                         <!-- ABM GRADE 12 -->
                         <div class="container-fluid px-4">
                <!--table should be placed here -->
                <div id="table-container-for-ABM-grade12"></div>

                <script>
                    // script for loading all  ABM Grade 12 list
                     $(document).ready(function () {
                        // Attach click event to button
                        $('#load-ABM-grade12').on('click', function () {
                            // Send AJAX request to table.php
                            $.ajax({
                                url: 'load-table-list-for-ABM-grade12.php',
                                type: 'GET',
                                success: function (response) {
                                    // Display table content in div
                                    $('#table-container-for-ABM-grade12').html(response);
                                    $('#table-container-for-ABM-grade12').show();
                                    // Hide other table container
                                    $('#table-container1').hide();
                                    $('#table-container2').hide();
                                    $('#table-container-for-grade7').hide();
                                    $('#table-container-for-grade8').hide();
                                    $('#table-container-for-grade9').hide();
                                    $('#table-container-for-grade10').hide();
                                    $('#table-container-for-HUMSS-grade11').hide();
                                    $('#table-container-for-HUMSS-grade12').hide();
                                    $('#table-container-for-ABM-grade11').hide();
                                    $('#table-container-for-ICT-grade11').hide();
                                    $('#table-container-for-ICT-grade12').hide();
                                    $('#table-container-for-HE-grade11').hide();
                                    $('#table-container-for-HE-grade12').hide();
                                    $('#table-container-for-EIM-grade11').hide();
                                    $('#table-container-for-EIM-grade12').hide();
                                    

                                   

                                }
                            });
                        });
                    });
                </script>
            </div>

               <!-- ICT GRADE 11 -->
               <div class="container-fluid px-4">
                <!--table should be placed here -->
                <div id="table-container-for-ICT-grade11"></div>

                <script>
                    // script for loading all  ICT Grade 11 list
                     $(document).ready(function () {
                        // Attach click event to button
                        $('#load-ICT-grade11').on('click', function () {
                            // Send AJAX request to table.php
                            $.ajax({
                                url: 'load-table-list-for-ICT-grade11.php',
                                type: 'GET',
                                success: function (response) {
                                    // Display table content in div
                                    $('#table-container-for-ICT-grade11').html(response);
                                    $('#table-container-for-ICT-grade11').show();
                                    // Hide other table container
                                    $('#table-container1').hide();
                                    $('#table-container2').hide();
                                    $('#table-container-for-grade7').hide();
                                    $('#table-container-for-grade8').hide();
                                    $('#table-container-for-grade9').hide();
                                    $('#table-container-for-grade10').hide();
                                    $('#table-container-for-HUMSS-grade11').hide();
                                    $('#table-container-for-HUMSS-grade12').hide();
                                    $('#table-container-for-ABM-grade11').hide();
                                    $('#table-container-for-ABM-grade12').hide();
                                    $('#table-container-for-ICT-grade12').hide();
                                    $('#table-container-for-HE-grade11').hide();
                                    $('#table-container-for-HE-grade12').hide();
                                    $('#table-container-for-EIM-grade11').hide();
                                    $('#table-container-for-EIM-grade12').hide();
                                   

                                }
                            });
                        });
                    });
                </script>
            </div>

              <!-- ICT GRADE 12 -->
              <div class="container-fluid px-4">
                <!--table should be placed here -->
                <div id="table-container-for-ICT-grade12"></div>

                <script>
                    // script for loading all  ICT  Grade 12 list
                     $(document).ready(function () {
                        // Attach click event to button
                        $('#load-ICT-grade12').on('click', function () {
                            // Send AJAX request to table.php
                            $.ajax({
                                url: 'load-table-list-for-ICT-grade12.php',
                                type: 'GET',
                                success: function (response) {
                                    // Display table content in div
                                    $('#table-container-for-ICT-grade12').html(response);
                                    $('#table-container-for-ICT-grade12').show();
                                    // Hide other table container
                                    $('#table-container1').hide();
                                    $('#table-container2').hide();
                                    $('#table-container-for-grade7').hide();
                                    $('#table-container-for-grade8').hide();
                                    $('#table-container-for-grade9').hide();
                                    $('#table-container-for-grade10').hide();
                                    $('#table-container-for-HUMSS-grade11').hide();
                                    $('#table-container-for-HUMSS-grade12').hide();
                                    $('#table-container-for-ABM-grade11').hide();
                                    $('#table-container-for-ABM-grade12').hide();
                                    $('#table-container-for-ICT-grade11').hide();
                                    $('#table-container-for-HE-grade11').hide();
                                    $('#table-container-for-HE-grade12').hide();
                                    $('#table-container-for-EIM-grade11').hide();
                                    $('#table-container-for-EIM-grade12').hide();
                                    
                                   

                                }
                            });
                        });
                    });
                </script>
            </div>



              <!-- HE GRADE 11 -->
              <div class="container-fluid px-4">
                <!--table should be placed here -->
                <div id="table-container-for-HE-grade11"></div>

                <script>
                    // script for loading all  HE Grade 11 list
                     $(document).ready(function () {
                        // Attach click event to button
                        $('#load-HE-grade11').on('click', function () {
                            // Send AJAX request to table.php
                            $.ajax({
                                url: 'load-table-list-for-HE-grade11.php',
                                type: 'GET',
                                success: function (response) {
                                    // Display table content in div
                                    $('#table-container-for-HE-grade11').html(response);
                                    $('#table-container-for-HE-grade11').show();
                                    // Hide other table container
                                    $('#table-container1').hide();
                                    $('#table-container2').hide();
                                    $('#table-container-for-grade7').hide();
                                    $('#table-container-for-grade8').hide();
                                    $('#table-container-for-grade9').hide();
                                    $('#table-container-for-grade10').hide();
                                    $('#table-container-for-HUMSS-grade11').hide();
                                    $('#table-container-for-HUMSS-grade12').hide();
                                    $('#table-container-for-ABM-grade11').hide();
                                    $('#table-container-for-ABM-grade12').hide();
                                    $('#table-container-for-ICT-grade11').hide();
                                    $('#table-container-for-ICT-grade12').hide();
                                    $('#table-container-for-HE-grade12').hide();
                                    $('#table-container-for-EIM-grade11').hide();
                                    $('#table-container-for-EIM-grade12').hide();
                                    
                        
                                }
                            });
                        });
                    });
                </script>
            </div>


             <!-- HE GRADE 12 -->
             <div class="container-fluid px-4">
                <!--table should be placed here -->
                <div id="table-container-for-HE-grade12"></div>

                <script>
                    // script for loading all  HE Grade 12 list
                     $(document).ready(function () {
                        // Attach click event to button
                        $('#load-HE-grade12').on('click', function () {
                            // Send AJAX request to table.php
                            $.ajax({
                                url: 'load-table-list-for-HE-grade12.php',
                                type: 'GET',
                                success: function (response) {
                                    // Display table content in div
                                    $('#table-container-for-HE-grade12').html(response);
                                    $('#table-container-for-HE-grade12').show();
                                    // Hide other table container
                                    $('#table-container1').hide();
                                    $('#table-container2').hide();
                                    $('#table-container-for-grade7').hide();
                                    $('#table-container-for-grade8').hide();
                                    $('#table-container-for-grade9').hide();
                                    $('#table-container-for-grade10').hide();
                                    $('#table-container-for-HUMSS-grade11').hide();
                                    $('#table-container-for-HUMSS-grade12').hide();
                                    $('#table-container-for-ABM-grade11').hide();
                                    $('#table-container-for-ABM-grade12').hide();
                                    $('#table-container-for-ICT-grade11').hide();
                                    $('#table-container-for-ICT-grade12').hide();
                                    $('#table-container-for-HE-grade11').hide();
                                    $('#table-container-for-EIM-grade11').hide();
                                    $('#table-container-for-EIM-grade12').hide();
                                    
                        
                                }
                            });
                        });
                    });
                </script>
            </div>



            
             <!-- EIM GRADE 11 -->
             <div class="container-fluid px-4">
                <!--table should be placed here -->
                <div id="table-container-for-EIM-grade11"></div>

                <script>
                    // script for loading all  EIM Grade 11 list
                     $(document).ready(function () {
                        // Attach click event to button
                        $('#load-EIM-grade11').on('click', function () {
                            // Send AJAX request to table.php
                            $.ajax({
                                url: 'load-table-list-for-EIM-grade11.php',
                                type: 'GET',
                                success: function (response) {
                                    // Display table content in div
                                    $('#table-container-for-EIM-grade11').html(response);
                                    $('#table-container-for-EIM-grade11').show();
                                    // Hide other table container
                                    $('#table-container1').hide();
                                    $('#table-container2').hide();
                                    $('#table-container-for-grade7').hide();
                                    $('#table-container-for-grade8').hide();
                                    $('#table-container-for-grade9').hide();
                                    $('#table-container-for-grade10').hide();
                                    $('#table-container-for-HUMSS-grade11').hide();
                                    $('#table-container-for-HUMSS-grade12').hide();
                                    $('#table-container-for-ABM-grade11').hide();
                                    $('#table-container-for-ABM-grade12').hide();
                                    $('#table-container-for-ICT-grade11').hide();
                                    $('#table-container-for-ICT-grade12').hide();
                                    $('#table-container-for-HE-grade11').hide();
                                    $('#table-container-for-HE-grade12').hide();
                                    $('#table-container-for-EIM-grade12').hide();
                                    
                        
                                }
                            });
                        });
                    });
                </script>
            </div>

            
             <!-- EIM GRADE 12 -->
             <div class="container-fluid px-4">
                <!--table should be placed here -->
                <div id="table-container-for-EIM-grade12"></div>

                <script>
                    // script for loading all  EIM  Grade 12 list
                     $(document).ready(function () {
                        // Attach click event to button
                        $('#load-EIM-grade12').on('click', function () {
                            // Send AJAX request to table.php
                            $.ajax({
                                url: 'load-table-list-for-EIM-grade12.php',
                                type: 'GET',
                                success: function (response) {
                                    // Display table content in div
                                    $('#table-container-for-EIM-grade12').html(response);
                                    $('#table-container-for-EIM-grade12').show();
                                    // Hide other table container
                                    $('#table-container1').hide();
                                    $('#table-container2').hide();
                                    $('#table-container-for-grade7').hide();
                                    $('#table-container-for-grade8').hide();
                                    $('#table-container-for-grade9').hide();
                                    $('#table-container-for-grade10').hide();
                                    $('#table-container-for-HUMSS-grade11').hide();
                                    $('#table-container-for-HUMSS-grade12').hide();
                                    $('#table-container-for-ABM-grade11').hide();
                                    $('#table-container-for-ABM-grade12').hide();
                                    $('#table-container-for-ICT-grade11').hide();
                                    $('#table-container-for-ICT-grade12').hide();
                                    $('#table-container-for-HE-grade11').hide();
                                    $('#table-container-for-EIM-grade11').hide();
                                    
                        
                                }
                            });
                        });
                    });
                </script>
            </div>
          
          




        <!--footer -->
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-2 ">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="text-dark small">Developed By SirB0B0 &bull; &commat;2023</div>
                </div>
            </footer>
        </div>
    </div>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

</body>

</html>