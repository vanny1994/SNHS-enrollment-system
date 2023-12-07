<?php
  require_once 'db_conn.php';
  session_start();
  
  if (isset($_SESSION['email'])) {
    // Retrieve the user_id from the database based on the email address
    $query = "SELECT email FROM users WHERE email = ?";
    $stmt = $db_conn->prepare($query);
    $stmt->bind_param("s", $_SESSION['email']);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
   
    $email = $row['email'];
   
    
    
} else {
    // handle error here
}



   

  

  // Get data from the form using post to send to studentdetails table
  $school_year = strtoupper($_POST['school_year'] ?? '');
  $grade_level = strtoupper($_POST['grade_level'] ?? '');
  $PSA_Birth_Cert_Num = strtoupper($_POST['PSA_Birth_Cert_Num'] ?? '');
  $LRN = strtoupper($_POST['LRN'] ?? '');
  $firstName = strtoupper($_POST['firstName'] ?? '');
  $middleName = strtoupper($_POST['middleName'] ?? '');
  $lastName = strtoupper($_POST['lastName'] ?? '');
  $extensionName = strtoupper($_POST['extensionName'] ?? '');
  $dateOfBirth = strtoupper($_POST['dateOfBirth'] ?? '');
  $sex = strtoupper($_POST['sex'] ?? '');
  $age = $_POST['age'] ?? '';
  $indigenous_People_Community = strtoupper($_POST['indigenous_People_Community'] ?? '');
  $motherTongue = strtoupper($_POST['motherTongue'] ?? '');
  $houseNum_street = strtoupper($_POST['houseNum_street'] ?? '');
  $brgy = strtoupper($_POST['brgy'] ?? '');
  $municipality = strtoupper($_POST['municipality'] ?? '');
  $province = strtoupper($_POST['province'] ?? '');
  $zipCode = strtoupper($_POST['zipCode'] ?? '');
  
  
  $fatherName = strtoupper($_POST['fatherName'] ?? '');
  $motherName = strtoupper($_POST['motherName'] ?? '');
  $guardianName = strtoupper($_POST['guardianName'] ?? '');
  $telephoneNumber = strtoupper($_POST['telephoneNumber'] ?? '');
  $cpNumber = strtoupper($_POST['cellphoneNumber'] ?? '');


  $track= strtoupper($_POST['track'] ?? '');
  $strand = strtoupper($_POST['strand'] ?? '');

 //inputs for transferee and returneee
 $lastGradeLevel_Completed = strtoupper($_POST['lastGradeLevel_Completed'] ?? '');
 $lastSchoolYear_Completed = strtoupper($_POST['lastSchoolYear_Completed'] ?? '');
 $schoolName = strtoupper($_POST['schoolName'] ?? '');
 $school_ID = strtoupper($_POST['school_ID'] ?? '');
 $schoolAddress = strtoupper($_POST['schoolAddress'] ?? '');




 if ( empty($lastGradeLevel_Completed ) && empty($lastSchoolYear_Completed) && empty($schoolName) && empty( $school_ID) && empty($schoolAddress)){

  $stmt1 = $db_conn->prepare("INSERT INTO enrollee ( email, school_year, grade_level, track, strand, PSA_Birth_Cert_Num, LRN, firstName, middleName, lastName, extensionName, dateOfBirth, sex, age, indigenous_people_Community, motherTongue, houseNum_street, brgy, municipality, province, zipCode, fatherName, motherName, guardianName, telephoneNumber, cellphoneNumber)
  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

  $stmt1->bind_param("ssssssssssssssssssssssssss", $email , $school_year, $grade_level, $track, $strand, $PSA_Birth_Cert_Num, $LRN, $firstName, $middleName, $lastName, $extensionName, $dateOfBirth, $sex, 
  $age, $indigenous_People_Community, $motherTongue, $houseNum_street, $brgy, 
  $municipality, $province, $zipCode, $fatherName, $motherName, $guardianName, $telephoneNumber, $cpNumber);

 } else{
 
  $stmt2 = $db_conn->prepare("INSERT INTO transferee_returnee  ( email, school_year, grade_level, track, strand, PSA_Birth_Cert_Num, LRN, firstName, middleName, lastName, extensionName, dateOfBirth, sex, age, indigenous_people_Community, motherTongue, houseNum_street, brgy, municipality, province, zipCode, fatherName, motherName, guardianName, telephoneNumber, cellphoneNumber, lastGradeLevel_Completed, lastSchoolYear_Completed, schoolName, school_ID, schoolAddress )
  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  
  $stmt2->bind_param("sssssssssssssssssssssssssssssss",$email, $school_year, $grade_level, $track, $strand, $PSA_Birth_Cert_Num, $LRN, 
  $firstName, $middleName, $lastName, $extensionName, $dateOfBirth, $sex, $age, $indigenous_People_Community,
  $motherTongue, $houseNum_street, $brgy, $municipality, $province, $zipCode, $fatherName, $motherName, $guardianName, $telephoneNumber, $cpNumber,
  $lastGradeLevel_Completed, $lastSchoolYear_Completed, $schoolName, $school_ID, $schoolAddress );


 }

// Execute statements
if ((isset($stmt1) && $stmt1->execute()) || (isset($stmt2) && $stmt2->execute())){
    
   echo '<script>alert("dfjsdkghfkgjhfdgi")</script>';


    // Redirect the user to the success page
   header('Location: dashboard2.php');
   

   exit();
 
  } else {
    echo "Error: " . (isset($stmt) ? $stmt->error : $stmt2->error);
  }
  
?>