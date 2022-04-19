<?php
require_once("dbconnect.php");
$to      = $email; // Send email to our user
$subject = 'Signup | Verification'; // Give the email a subject 
$message = '
  
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
  
------------------------
Username: '.$fullname.'
Password: '.$password.'
------------------------
  
Please click this link to activate your account:
http://www.cdrivas.uwmsois.com/Final_Project/verifyemail.php?email='.$email.'&token='.$token.'
  
'; // Our message above including the link
                      
$headers = 'From:noreply@ejfeliz.uwmsois.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email

?>


