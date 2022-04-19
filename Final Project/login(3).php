<?php
include 'header.php';
include'registration_form.php';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>  
  body, html 
{
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  
  background-image: url("https://cdrivas.uwmsois.com/Final_Project/images/uwm.jpeg");
  
  
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  
  height: 100%; 
  
  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


.bg-text {
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0, 0.4); 
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}

h2 {width:800px; margin:0 auto; color:lightblue;}  

input {text-align:center;}
</style>
</head>



<body>
<!--<div class="container">-->
<div class="bg-image"></div>
<div class="bg-text">
<h2>Please register before you continue...</h2>
<br>
        <form action="" method="POST">
          <div class="form-group">
             <input type="text" class="form-control" name="fullname" placeholder="Full Name" required="">
          </div>
          <div class="form-group">
             <input type="text" class="form-control" name="user_id" placeholder="Userid" required="">
          </div>
          <div class="form-group">
             <input type="email" class="form-control" name="email" placeholder="Email" required="">
          </div>
          <div class="form-group">
             <input type="password" class="form-control" name="password" placeholder="Password" required="">
          </div>
          
          <p>If you have an account <a href="Panel.php">login</a></p> <!--replace login.php with correct login.php page-->


          <form action="sendemail.php" method="post">
    <input type="submit" value="Register" 
         name="Register" id="frm1_submit" />
</form>

          <button type="button" onclick="alert('Please use your browsers back button!')">Return</button>

        </form>
</div>
                      <?php

    if (! empty($registrationResponse["status"])) {}

        ?>

                    <?php

        if ($registrationResponse["status"] == "error") {

            ?>

                                   <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>

                    <?php

        } else if ($registrationResponse["status"] == "success") {}

            ?>

    <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>

</body>
     <?php
    include('footer.php');
    ?>
</html>