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

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>

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

       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enrollment Form</title>

        <script>
            function toggleLRNInput(element) {
                const lrnInput = document.getElementById('LRN');
                const noLRNCheckbox = document.getElementById('flexCheckDefault1');
                const withLRNCheckbox = document.getElementById('flexCheckDefault2');

                if (element.checked && element.value === 'WithLRN') {
                    lrnInput.disabled = false;
                    noLRNCheckbox.checked = false;
                } else if (element.checked && element.value === 'NoLRN') {
                    lrnInput.disabled = true;
                    withLRNCheckbox.checked = false;
                } else if (!element.checked && element.value === 'WithLRN') {
                    withLRNCheckbox.checked = false;
                } else if (!element.checked && element.value === 'NoLRN') {
                    ipcInput.disabled = true;
                    withLRNCheckbox.checked = false;
                }
            }
        </script>

    </head>

    <body >
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <i>
                        <img src="img/sulatLogo.jpg" alt=""></i>
                </a>
                <!--NavBar Cotent-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <div class="navTitle text-center ms-auto">
                        <h3
                            style="font-family: Georgia, 'Times New Roman', Times, serif; font-weight: 600; font-size: 2.1rem; color:#D3D3D3;">
                            SULAT NATIONAL HIGH SCHOOL ENROLLMENT SYSTEM
                        </h3>
                    </div>
                    <!-- Do not delete this-->
                    <ul class="navbar-nav d-flex flex-row ms-auto me-3">

                      
                    </ul>
                      <!-- -->
                </div>
            </div>
        </nav>
        <!-- Navbar -->
        <div style="margin: 0 150px; background-color: white;">
            <div class="container mt-3 mb-4">
                <div class="col-12 img-fluid" style="padding-top: 30px ;">

                    <h3 class="fw-bold text-center">
                        <img src="img/depedLogo.png" style="width: 5%">
                        MODIFED BASIC EDUCATION ENROLLMENT FORM
                    </h3>
                    <p class="text-center">THIS FORM IS NOT FOR SALE</p>

                </div>
                <br>
                <form class="row g-3" action="EnrollmentForm_Script.php" method="post">
                    <!--Row 1-->
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="schoolyear" class="form-label">
                                <span style="display: inline-block; width: 110px;">School Year:</span>
                            </label>
                            <select
                                name="school_year"
                                id="schoolyear"
                                class="form-select"
                                required="required">
                                <option selected="selected">...</option>
                                <option value="2022-2023">2022-2023</option>
                                <option value="2023-2024">2023-2024</option>
                                <option value="2023-2025">2024-2025</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <p style="font-style: italic;">Check the appropriate box only</p>
                            <div class="row d-flex align-items-center">

                                <div class="col-md-6 flex-column align-items-center">

                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value="NoLRN"
                                            id="flexCheckDefault1"
                                            onclick="toggleLRNInput(this)">
                                        <label class="form-check-label" for="flexCheckDefault1">NO LRN</label>
                                    </div>
                                </div>

                                <div class="col-md-6 flex-column align-items-center">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value="WithLRN"
                                            id="flexCheckDefault2"
                                            onclick="toggleLRNInput(this)">
                                        <label class="form-check-label" for="flexCheckDefault2">WITH LRN</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Row 2 -->

                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="schoolyear" class="form-label">
                                <span style="display: inline-block; width: 110px;">Grade Level:</span>
                            </label>
                            <select
                                name="grade_level"
                                id="grade_level"
                                class="form-select"
                                required="required">
                                <option value="">...</option>
                                <option value="7">Grade 7</option>
                                <option value="8">Grade 8</option>
                                <option value="9">Grade 9</option>
                                <option value="10">Grade 10</option>
                                <option value="11">Grade 11</option>
                                <option value="12">Grade 12</option>
                            </select>

                        </div>

                        <div class="col-md-6">

                            <div class="row d-flex align-items-center">
                                <div class="col-md-6 flex-column align-items-center">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value=""
                                            id="flexCheckDefault1"
                                            onclick="toggleSchoolInputs(this)">
                                        <label class="form-check-label" for="flexCheckDefault1">Returning (Balik-Aral)/Transferee</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Row 3-->
                    <div class="col-md-6 d-flex align-items-center" style="width:90%">
                        <h5
                            class="flex-grow-1"
                            style="font-weight: bold; font-size: 15px; padding-left: 5px;">
                            INSTRUCTIONS:
                        </h5>
                        <p class="flex-grow-1" style="font-style: italic; font-size: 15px;">

                            Print legibly all information required in CAPITAL letters.</p>

                    </div>

                    <!--Student InforMation-->

                    <h5 id="student_info">STUDENT INFORMATION</h5>

                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <label class="form-label" for="form6Example1">PSA Birth Certificate No. (if available upon registration)</label>
                            <input
                                type="text"
                                id="PSA_BC_NO"
                                name="PSA_Birth_Cert_Num"
                                class="form-control"/>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <label class="form-label" for="form6Example1">Learner Reference No. (LRN)</label>
                            <input
                                type="text"
                                id="LRN"
                                name="LRN"
                                class="form-control"
                                disabled="disabled"/>
                        </div>
                    </div>

                    <div class="form-outline mb-4">

                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label" for="lastName">LAST NAME</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="lastName" name="lastName" class="form-control"/>
                                <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label" for="firstName">FIRST NAME</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="firstName" name="firstName" class="form-control"/><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label" for="middleName">MIDDLE NAME</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="middleName" name="middleName" class="form-control"/>
                                <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label" for="extensionName">EXTENSION NAME
                                    <p>e.g. Jr,. III (if applicable)</p>
                                </label>
                            </div>
                            <div class="col-md-9">
                                <input
                                    type="text"
                                    id="extensionName"
                                    name="extensionName"
                                    class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" name="dateOfBirth">
                        </div>

                        <div class="col-md-4 text-center">
                            <label for="sex" class="form-label">Sex</label>
                            <br>
                            <input type="radio" class="form-check-input" name="sex" value="Male">Male
                            <input type="radio" class="form-check-input" name="sex" value="Female">Female
                        </div>

                        <div class="col-md-4">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" class="form-control" name="age" min="10" max="99">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <br>
                            <label class="form-label" for="form6Example1">
                                <!--dont forget mahimo kapa script onclick hin yes nga check box saka la pwede
                                maka input dito han if yes please specify -->
                                <br>Belonging to any Indigenous Peoples (IP) Community/Indigenous Cultural
                                    Community?
                            </label>
                            <input
                                type="checkbox"
                                class="form-check-input"
                                name="No"
                                value="No"
                                onclick="toggleIPCInput(this)">No
                            <input
                                type="checkbox"
                                class="form-check-input"
                                name="Yes"
                                value="Yes"
                                onclick="toggleIPCInput(this)">Yes
                        </div>

                        <div class="col-md-6 d-flex align-items-center">
                            <label class="form-label" for="form6Example1"><br>
                                If Yes, please specify
                            </label>
                            <input
                                type="text"
                                id="IPC"
                                name="indigenous_People_Community"
                                class="form-control"
                                disabled="disabled"/>
                        </div>
                    </div>
                    <!-- script for togle avtivating the IPC input box -->
                    <script>
                        function toggleIPCInput(element) {
                            const ipcInput = document.getElementById('IPC');

                            if (element.value === 'Yes') {
                                ipcInput.disabled = false;
                                element
                                    .parentNode
                                    .querySelector('input[value="No"]')
                                    .checked = false;
                            } else if (element.value === 'No') {
                                ipcInput.disabled = true;
                                element
                                    .parentNode
                                    .querySelector('input[value="Yes"]')
                                    .checked = false;
                            }
                        }
                    </script>

                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <label class="form-label" for="form6Example1"><br>Mother Tongue</label>
                            <input type="text" id="motherTongue" name="motherTongue" class="form-control"/>
                        </div>
                    </div>
                    <!-- Address-->
                    <h5 id="studentAddress">ADDRESS</h5>
                    <div class="row" id="address">
                        <div class="col-md-6 mb-4">

                            <div class="form-outline">
                                <label class="form-label" for="houseNum_street">House Number and Street</label>
                                <input
                                    type="text"
                                    id="houseNum_street"
                                    name="houseNum_street"
                                    class="form-control form-control-lg"/>
                            </div>

                        </div>
                        <div class="col-md-6 mb-4">

                            <div class="form-outline">
                                <label class="form-label" for="brgy">Barangay</label>
                                <input type="text" id="brgy" name="brgy" class="form-control form-control-lg"/>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="municip" class="form-label">Municipality</label>
                        <input
                            type="text"
                            id="brgy"
                            name="municipality"
                            class="form-control form-control-lg"/>
                    </div>
                    <div class="col-md-4">
                        <label for="province" class="form-label">Province</label>
                        <input
                            type="text"
                            id="brgy"
                            name="province"
                            class="form-control form-control-lg"/>

                    </div>
                    <div class="col-md-4">
                        <label for="brgy" class="form-label">Zip Code</label>
                        <input
                            type="text"
                            id="zipCode"
                            name="zipCode"
                            class="form-control form-control-lg"/>
                    </div>

                    <!-- Parents Guardians info -->
                    <h5 id="parents_info">PARENT’S/GUARDIAN’S INFORMATION</h5>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="fatherName">Father's Name</label>
                            <input
                                type="text"
                                id="fatherName"
                                name="fatherName"
                                placeholder="Last Name, First Name, Middle Name"
                                class="form-control form-control-lg"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="motherName">Mother's Name</label>
                            <input
                                type="text"
                                id="motherName"
                                name="motherName"
                                placeholder="Last Name, First Name, Middle Name"
                                class="form-control form-control-lg"/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="guardianName">Guardians's Name</label>
                            <input
                                type="text"
                                id="brgy"
                                name="guardianName"
                                placeholder="Last Name, First Name, Middle Name"
                                class="form-control form-control-lg"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="tpNum">Telephone No.</label>
                                <input
                                    type="text"
                                    id="tpNum"
                                    name="telephoneNumber"
                                    class="form-control form-control-lg"/>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="cpNum">Cellphone No.</label>
                                <input
                                    type="text"
                                    id="cpNum"
                                    name="cellphoneNumber"
                                    class="form-control form-control-lg"/>
                            </div>
                        </div>
                    </div>
                    <!-- for retunee and transferee -->
                    <h5 id="forRL">For Returning Learners (Balik-Aral) and Those Who Shall Transfer/Move In</h5>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="lastGradeLevel_Completed">Last Grade Level Completed</label>
                                <select
                                    name="lastSchoolYear_Completed"
                                    id="lastSchoolYear_Completed"
                                    class="form-control form-control-lg"
                                    disabled="disabled">
                                    <option value="">...</option>
                                    <!-- new curricullum -->
                                    <option value="GRADE 7">Grade 7</option>
                                    <option value="GRADE 8">Grade 8</option>
                                    <option value="GRADE 9">Grade 9</option>
                                    <option value="GRADE 10">Grade 10</option>
                                    <option value="GRADE 11">Grade 11</option>

                                    <!-- old curriculum -->
                                    <option value="1st Year">1st Year</option>
                                    <option value="2nd Year">2nd Year</option>
                                    <option value="3rd Year">3rd Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="lastSchoolYearCompleted">Last School Year Completed</label>

                                <input
                                    type="text"
                                    id="lastSchoolYear_Completed"
                                    name="lastSchoolYear_Completed"
                                    class="form-control form-control-lg"
                                    disabled="disabled"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="schoolName">School Name</label>
                                <input
                                    type="text"
                                    id="schoolName"
                                    name="schoolName"
                                    class="form-control form-control-lg"
                                    disabled="disabled"/>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="schoolID">School ID</label>
                                <input
                                    type="text"
                                    id="school_ID"
                                    name="school_ID"
                                    class="form-control form-control-lg"
                                    disabled="disabled"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="schoolAddress">School Address</label>
                                <input
                                    type="text"
                                    id="schoolAddress"
                                    name="schoolAddress"
                                    class="form-control form-control-lg"
                                    disabled="disabled"/>
                            </div>
                        </div>
                    </div>
                    <!-- js function for enabling the above input boxes -->

                    <script>
                        function toggleSchoolInputs(checkbox) {
                            const inputs = document.querySelectorAll(
                                '#lastGradeLevel_Completed, #lastSchoolYear_Completed, #schoolName, #school_ID,' +
                                ' #schoolAddress'
                            );

                            if (checkbox.checked) {
                                inputs.forEach(input => input.disabled = false);
                            } else {
                                inputs.forEach(input => input.disabled = true);
                            }
                        }
                    </script>

                    <h5 id="forRL">For Learners in Senior High School</h5>
                    <div class="row">

                        <div class="col">
                            <label class="form-label me-3" for="form6Example1">Semester</label>
                        </div>

                        <div class="col">
                            <input type="checkbox" class="form-check-input" name="No" value="No">
                            <label class="form-check-label" for="form6Example2">1st Sem</label>
                        </div>

                        <div class="col">
                            <input type="checkbox" class="form-check-input" name="Yes" value="Yes">
                            <label class="form-check-label" for="form6Example3">2nd Sem</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="track" class="form-label">
                                <span style="display: inline-block; width: 110px;">Track</span>
                            </label>
                            <select
                                name="track"
                                id="track"
                                class="form-select"
                                required="required"
                                disabled="disabled">
                                <option value="">...</option>
                                <option value="ACADEMIC">Academic</option>
                                <option value="TVL">Technical-Vocational-Livelihood (TVL)</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="strand" class="form-label">
                                <span style="display: inline-block; width: 150px;">Strand (if any)</span>
                            </label>
                            <select
                                name="strand"
                                id="strand"
                                class="form-select"
                                required="required"
                                disabled="disabled">
                                <option value="">...</option>
                                <!-- Academic -->
                                <option value="HUMSS">Humanities and Social Sciences (HUMSS)</option>
                                <option value="ABM">Accountancy, Business and Management (ABM)</option>
                                <!-- TVL -->
                                <option value="ICT">Information, Communication and Technology (ICT)</option>
                                <option value="HE">Home Economics (HE)</option>
                                <option value="EIM">Industrial Arts - Electrical Installation and Maintenance (EIM)</option>
                            </select>
                            <script>
                                const gradeLevelSelect = document.getElementById("grade_level");
                                const trackSelect = document.getElementById("track");
                                const strandSelect = document.getElementById("strand");

                                gradeLevelSelect.addEventListener("change", function () {
                                    if (this.value === "Grade11" || this.value === "Grade12") {
                                        trackSelect.disabled = false;
                                    } else {
                                        trackSelect.disabled = true;
                                        strandSelect.disabled = true;
                                    }
                                });

                                trackSelect.addEventListener("change", function () {
                                    if (this.value === "ACADEMIC") {
                                        strandSelect.innerHTML = `
                                        <option value="">Please select</option>
                                        <option value="HUMSS">Humanities and Social Sciences (HUMSS)</option>
                                        <option value="ABM">Accountancy, Business and Management (ABM)</option> `;
                                    } else if (this.value === "TVL") {
                                        strandSelect.innerHTML = `<option value="">Please select</option>
                                        <option value="ICT">Information, Communication and Technology (ICT)</option>
                                        <option value="HE">Home Economics (HE)</option>
                                        <option value="EIM">Industrial Arts - Electrical Installation and Maintenance (EIM)</option>`;
                                    } else {
                                        strandSelect.innerHTML = `<option value="">Please select</option>`;
                                    }

                                    strandSelect.disabled = false;
                                });
                            </script>

                        </div>
                    </div>

                   

                    <div class="row">
                        <div class="col-auto">
                            <br><br>
                            <p>
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    name="No"
                                    value="No"
                                    id="form-check-no">
                                I hereby certify that the above information given are true and correct to the
                                best of my knowledge and I allow the Department of Education to use my child’s
                                details to create and/or update his/her learner profile in the Learner
                                Information System. The information herein shall be treated as confidential in
                                compliance with the Data Privacy Act of 2012.</p>
                            <br><br>

                        </div>

                        <input class="btn btn-primary" id="submit" type="submit" value="Submit">

                    </form>

                </div>
            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-1.8.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>