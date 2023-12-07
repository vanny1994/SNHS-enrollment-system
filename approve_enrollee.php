<?php
include_once 'db_conn.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['enrolleeId'])){
    $enrolleeId = $_POST['enrolleeId'];
    
    // Update the enrollee's status to "ENROLLED"
    $sql = "UPDATE enrollee SET status = 'ENROLLED' WHERE enrolleeId = ?";
    $stmt = $db_conn->prepare($sql);
    $stmt->bind_param("i", $enrolleeId);
    $stmt->execute();
    $stmt->close();
    
    echo "Enrollment Request Approved";
}


$query = "SELECT email FROM enrollee WHERE enrolleeId = ?";
$stmt = $db_conn->prepare($query);
$stmt->bind_param("i", $enrolleeId);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$email = $row['email'];


 // send the verification email to the user
 $to = $email;

 $subject = "ENROLLMENT REQUEST NOTIFICATION";
 $message = "CONGRATULATIONS YOUR ENROLLMENT REQUEST HAS BEEN APPROVED <br><br><br><br>REMINDER: THE ORIGINAL COPY OF YOUR CREDENTIALS MUST BE SUBMITTED TO THE SCHOOL REGISTRAR UPON START OF CLASSES";


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
   
 } else {
     echo $mail->ErrorInfo;

     echo 'Failed to send email notification.';
 }






$db_conn->close();
?>
