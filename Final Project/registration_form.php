<?php
  session_start();
  require_once("dbconnect.php");
 // Include database connectivity
  /*include('header.php'); // <-- if we have a header, include it here, otherwise delete the include function*/

  if (isset($_POST['submit'])) {
      
      $errorMsg = "";
      
      $fullname = mysqli_real_escape_string($connect,$_POST['fullname']);
      $userid = mysqli_real_escape_string($connect,$_POST['user_id']);
      $email    = mysqli_real_escape_string($connect,$_POST['email']);
      $password = mysqli_real_escape_string($connect,$_POST['password']);
      $password = password_hash($password, PASSWORD_DEFAULT); // encrypted password
      $token = bin2hex(random_bytes(40)); //generates unique token
      
      
      $sql = "SELECT * FROM users WHERE email = '$email'";
      $execute = mysqli_query($connect, $sql);
        
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errorMsg = "Please insert a correct email";
      }else if(strlen($password) < 6) {
          $errorMsg  = "Please include atleast a 6 digit password";
      }else if($execute->num_rows == 1){
          $errorMsg = "This email is already registered with us";
      }else{
          $query= "INSERT INTO users(fullname,user_id,email,password,token) 
                  VALUES('$fullname','$userid','$email','$password','$token')";
          $result = mysqli_query($connect, $query);
      if ($result == true) {
         
      }else{
          $errorMsg  = "An internal error ocurred... Please try again";
      }
    }
  }


?>

