function showAlert() {
  console.log('Verification Code Sent Successfully. Please Check Your Email');
  alert('Verification Code Sent Successfully. Please Check Your Email');
}

document.addEventListener('DOMContentLoaded', function() {
  if (document.querySelector('[name="submit"]')) {
    document.querySelector('[name="submit"]').addEventListener('click', function() {
      setTimeout(function() {
        if ('<?php echo $mail_sent ? "true" : "false"; ?>' === 'true') {
          showAlert();
        }
      }, 100);
    });
  }
});




  const loginButton = document.querySelector('.btn-login');
  const signupButton = document.querySelector('.btn-signup');
  
  loginButton.addEventListener('click', () => {
    window.location.href = 'logIn_anotherVersion.php';
  });
  
  signupButton.addEventListener('click', () => {
    window.location.href = 'signUP_newVer.php';
  });

 