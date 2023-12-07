<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/registrationForm.css">
        <link rel="icon" type="image/jpg" href="img/SulatLogo.jpg">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous">
        <title>Registration</title>
    </head>
    <body>
        <section class="gradient-custom">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div
                            class="card shadow-2-strong card-registration"
                            style="border-radius: 15px;">

                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="reg">Registration Form</h3>
                                <h5 id="student_info">
                                    STUDENT INFORMATION
                                </h5>
                                <form method="post" action="registrationForm.php">

                                    <!-- Student Info -->
                                  

                                        <!--Student Contact Number -->
                                        <div class="row">
                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input
                                                        type="text"
                                                        id="cellphoneNumber"
                                                        name="cellphoneNumber"
                                                        class="form-control form-control-lg"/>
                                                    <label class="form-label" for="cellphoneNumber">Cellphone Number</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input
                                                        type="email"
                                                        id="email"
                                                        name="email"
                                                        class="form-control form-control-lg"/>
                                                    <label class="form-label" for="email">E-mail Address</label>
                                                </div>

                                            </div>
                                        </div>

                                        <!--Student Address -->
                                        <!-- <div class="form-outline mb-4"> <textarea class="form-control" id="address"
                                        name="address" rows="4"></textarea> <label class="form-label" for="as"> HOME
                                        ADDRESS<p>(House Number and Street, Barangay, City/Municipality, Province,
                                        Country, Zip Code</p> </label> </div> -->
                                        <div class="row" id="address">
                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input
                                                        type="text"
                                                        id="houseNum_street"
                                                        name="houseNum_street"
                                                        class="form-control form-control-lg"/>
                                                    <label class="form-label" for="houseNum_street">House Number and Street</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input type="text" id="brgy" name="brgy" class="form-control form-control-lg"/>
                                                    <label class="form-label" for="brgy">Barangay</label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row" id="address">
                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input
                                                        type="text"
                                                        id="city_town"
                                                        name="city_town"
                                                        class="form-control form-control-lg"/>
                                                    <label class="form-label" for="city_town">Municipality</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input
                                                        type="text"
                                                        id="province"
                                                        name="province"
                                                        class="form-control form-control-lg"/>
                                                    <label class="form-label" for="province">Province</label>
                                                </div>
                                               

                                            </div>
                                            <div class="col-md-6 mb-4"> 
                                            <div class="form-outline">
                                                    <input
                                                        type="number"
                                                        id="zipCode"
                                                        name="zipCode"
                                                        class="form-control form-control-lg"/>
                                                    <label class="form-label" for="brgy">Zip Code</label>
                                                </div>
                                            </div>
                                           
                                        </div>

                                        <!-- Parents Guardians info -->
                                        <h5 id="parents_info">PARENT’S/GUARDIAN’S INFORMATION</h5>

                                        <input type="text" id="fatherName" name="fatherName" class="form-control"/>
                                        <label class="form-label" for="fatherName">FATHER'S NAME
                                            <p>(Last Name, First Name, Middle Name)</p>
                                        </label>

                                        <input type="text" id="motherName" name="motherName" class="form-control"/>
                                        <label class="form-label" for="motherName">MOTHERS NAME
                                            <p>(Last Name, First Name, Middle Name)</p>
                                        </label>

                                        <input type="text" id="guardianName" name="guardianName" class="form-control"/>
                                        <label class="form-label" for="guardianName">GUARDIAN'S NAME
                                            <p>(Last Name, First Name, Middle Name)</p>
                                        </label>

                                        <!--Guardians COntact info -->
                                        <div class="row">
                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input
                                                        type="text"
                                                        id="telephoneNumber"
                                                        name="telephoneNumber"
                                                        class="form-control form-control-lg"/>
                                                    <label class="form-label" for="telephoneNumber">Telephone Number</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input
                                                        type="text"
                                                        id="cpNumber"
                                                        name="cpNumber"
                                                        class="form-control form-control-lg"/>
                                                    <label class="form-label" for="cpNumber">Cellphone Number</label>
                                                </div>

                                            </div>
                                            <!-- Returning Students-->

                                            <div class="row">
                                                <h5 id="returning_info">For Returning Learners (Balik-Aral) and Those Who Shall Transfer/Move In</h5>

                                                <div class="col-md-6 mb-4">

                                                    <div class="form-outline">
                                                        <input
                                                            type="text"
                                                            id="last_grade_level_completed"
                                                            class="form-control form-control-lg"/>
                                                        <label class="form-label" for="telephone_num">Last Grade Level Completed</label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 mb-4">

                                                    <div class="form-outline">
                                                        <input
                                                            type="text"
                                                            id="last_school_year_completed"
                                                            class="form-control form-control-lg"/>
                                                        <label class="form-label" for="cellphone_num">Last School Year Completed</label>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-outline">
                                                <input type="text" id="school_name" class="form-control form-control-lg"/>
                                                <label class="form-label" for="telephone_num">School Name</label>

                                                <input type="text" id="school_id" class="form-control form-control-lg"/>
                                                <label class="form-label" for="telephone_num">School ID</label>

                                                <input type="text" id="school_address" class="form-control form-control-lg"/>
                                                <label class="form-label" for="telephone_num">School Addresss</label>
                                            </div>

                                            <!--for Senior High Learners-->

                                            <h5 id="returning_info">For Learners In Senior High</h5>

                                            <div class="row">
                                                <div class="col-md-6 mb-4">

                                                    <div class="form-outline">
                                                        <label for="">Semester:
                                                        </label>
                                                        <input type="checkbox" id="1st_sem" name="1st_sem" value="1">
                                                        <label for="vehicle1">
                                                            1st</label>

                                                    </div>

                                                </div>
                                                <div class="col-md-6 mb-4">

                                                    <div class="form-outline">

                                                        <input type="checkbox" id="2nd_sem" name="2nd_sem" value="2">
                                                        <label for="vehicle2">
                                                            2nd</label><br>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-4">

                                                        <div class="form-outline">

                                                            <label class="form-label" for="track">Track</label>
                                                            <select name="dropdown">
                                                                <option value="Computer Architecture" selected="selected">Computer Architecture</option>
                                                                <option value="Java">Java</option>
                                                                <option value="Discrete Mathematics">Discrete Mathematics</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 mb-4">

                                                        <div class="form-outline">
                                                            <label class="form-label" for="strand">Strand</label>
                                                            <select name="dropdown">
                                                                <option value="Computer Architecture" selected="selected">Computer Architecture</option>
                                                                <option value="Java">Java</option>
                                                                <option value="Discrete Mathematics">Discrete Mathematics</option>
                                                            </select>

                                                        </div>

                                                    </div>

                                                </div>

                                                <p id="par">I hereby certify that the above information given are true and
                                                    correct to the best of my knowledge and I allow the Department of Education to
                                                    use my child’s details to create and/or update his/her learner profile in the
                                                    Learner Information System. The information herein shall be treated as
                                                    confidential in compliance with the Data Privacy Act of 2012.</p>
                                            </div>

                                            <input
                                                class="btn btn-primary"
                                                id="submit"
                                                type="submit"
                                                value="Submit"
                                                onclick="submitForm()">

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <script src="sample.js"></script>
                <script
                    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
                    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
                    crossorigin="anonymous"></script>
                <script
                    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
                    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
                    crossorigin="anonymous"></script>

            </body>
        </html>

    <?php
        
// Connection variables
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "sulat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get data from the form using post to send to studentdetails table
$firstName = $_POST['firstName'] ?? '';
$middleName = $_POST['middleName'] ?? '';
$lastName = $_POST['lastName'] ?? '';
$extensionName = $_POST['extensionName'] ?? '';
$dateOfBirth = $_POST['dateOfBirth'] ?? '';
$gender = $_POST['gender'] ?? '';
$cellphoneNumber = $_POST['cellphoneNumber'] ?? '';
$email = $_POST['email'] ?? '';
$houseNum_street = $_POST['houseNum_street'] ?? '';
$brgy = $_POST['brgy'] ?? '';
$city_town = $_POST['city_town'] ?? '';
$province = $_POST['province'] ?? '';
$zipCode = $_POST['zipCode'] ?? '';

// Get data from the form using post to send to guardianinfo table
$fatherName = $_POST['fatherName'] ?? '';
$motherName = $_POST['motherName'] ?? '';
$guardianName = $_POST['guardianName'] ?? '';
$telephoneNumber = $_POST['telephoneNumber'] ?? '';
$cpNumber = $_POST['cpNumber'] ?? '';


$stmt = $db_conn->prepare("INSERT INTO studentdetails (firstName, middleName, lastName, extensionName, dateOfBirth, gender, cellphoneNumber, email, houseNum_street, brgy, city_town, province, zipCode)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssssss", $firstName, $middleName, $lastName, $extensionName, $dateOfBirth, $gender, $cellphoneNumber, $email, $houseNum_street, $brgy, $city_town, $province, $zipCode);

// Execute the first statement
if ($stmt->execute()) {
  // Get the inserted primary key enrolleId to guardianinfo table as foreign key.
  $enrolleeId = $conn->insert_id;

  // Prepare the SQL statement for guardian information
  $stmt2 = $db_conn->prepare("INSERT INTO guardianinfo (enrolleeId, fatherName, motherName, guardianName, telephoneNumber, cpNumber)
  VALUES (?, ?, ?, ?, ?, ?)");

  $stmt2->bind_param("isssss", $enrolleeId, $fatherName, $motherName, $guardianName,  $telephoneNumber, $cpNumber);

  // Execute the second statement
  if ($stmt2->execute()) {
    // Pop up message
    //create a script to pop up message success
    echo 'call script here';
  } else {
    echo "Error: " . $stmt2->error;
  }
} else {
  echo "Error: " . $stmt->error;
}


$stmt->close();
$stmt2->close();
$db_conn->close();



?>