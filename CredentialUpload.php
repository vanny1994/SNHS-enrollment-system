
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/jpg" href="img/SulatLogo.jpg"/>
        <link rel="stylesheet" href="css/FA/all.min.css">
        <link rel="stylesheet" href="css/FA/bootstrap.min.css">
        <link rel="stylesheet" href="css/FA/fontawesome.min.css">
        <link rel="stylesheet" href="css/EnrollmentForm.css">
        <link rel="stylesheet" href="css/dashboard2.css"/>

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            crossorigin="anonymous"/>

       

        <script
            src="https://use.fontawesome.com/releases/v6.1.0/js/all.js"
            crossorigin="anonymous"></script>

        <!-- Required MDB JavaScript files -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
            

       <!-- jQuery library -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- AJAX library -->
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


        <title>Upload Credentials</title>
       

    </head>
    <body>
        
   

    <!-- Modal for credentials upload -->
    <div
        class="modal fade"
        id="staticBackdrop"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        tabindex="-1"
        aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="fa-solid fa-bell" style="padding-right:5px;"></i>
                    <h5 class="modal-title" id="staticBackdropLabel">Reminder</h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 style="font-size: 16px">For incoming students in
                        <span style="color: blue">
                            Grade 7, Transferee or Returnee,</span>
                        a copy of your credentials Form 9, PSA Birth Certificate and Certificate of Good
                        Moral is needed to process your enrollment.
                        <span style="font-style:italic;">See Credentials Section</span>
                    </h5>

                </div>
                <div class="modal-footer">

                    <button type="button" id="gotIt" class="btn btn-primary">Got It</button>
                   
                </div>
            </div>
        </div>
    </div>
   








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
                            <a class="nav-link" href="dashboard2.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="EnrollmentForm.php">Enrollment Form</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="CredentialUpload.php">Credentials</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-flex flex-row ms-auto me-3">
                        <!-- -->
                        <li class="nav-item me-3 me-lg-0 dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-mdb-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fas fa-plus"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider"/>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                        <!-- -->

                        <!-- -->
                        <li class="nav-item me-3 me-lg-0 dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown1"
                                role="button"
                                data-mdb-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown1">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider"/>
                                </li>
                                <li>
                                    <a class="dropdown-item" id="logout-button" href="logout.php">Log-Out</a>
                                </li>
                            </ul>
                        </li>

                        <!-- -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->



        <style>
.wrapper {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border: 1px solid #ccc;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  padding: 20px;
  background-color: #fff;
  max-width: 500px;
  width: 100%;
  border-radius: 15px;
}

.wrapper h2 {
  margin-top: 0;
  font-size: 24px;
}

.wrapper form {
  margin-bottom: 0;
}


</style>

<div class="wrapper d-flex justify-content-center align-items-center">
  <div class="forms">
    <form action="studentCredentials.php" method="POST">
      <h2>File Upload</h2>
      <div class="mb-3">
        <label for="form9" class="form-label">Form 9:</label>
        <input class="form-control form-control-sm" id="form9" name="form9" type="file">
      </div>
      <div class="mb-3">
        <label for="PSA_live_birth" class="form-label">PSA Birth Certificate:</label>
        <input class="form-control form-control-sm" id="PSA_Birth_Cert" name="PSA_Birth_Cert" type="file">
      </div>
      <div class="mb-3">
        <label for="certificate_of_good_moral" class="form-label">Certificate Of Good Moral:</label>
        <input class="form-control form-control-sm" id="Certificate_of_good_moral" name="Certificate_of_good_moral" type="file">
      </div>

      <div style="height: 80px; display: flex; justify-content: flex-end; align-items: center;">
      <input type="submit" class="btn btn-primary" id="Upload" value="Upload">
    </div>

    </form>
  </div>
</div>
<script>

$(document).ready(function() {
  $('#staticBackdrop').modal('show');
});

</script>


    </body>