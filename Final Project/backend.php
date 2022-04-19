<?php
session_start();
include("header1.php");
require_once("dbconnect.php");
    
?>
<!doctype html>
<html lang="en">

        
    <head>
        <title>Group 3 T-shirt Webpage</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width initial-scale=1">
        <link rel="stylesheet" href="project1.css">    
    </head>
    
    <body class="main">
        <header id="title">
            <h1>Group 3's T-Shirt Web site</h1>
        </header>
        <article class="article1">
            <img id="women" src="images/pantherflag1.jpeg"/>
            <figcaption>Welcome here are the options of the size of shirts you can choose from. </figcaption>
        </article>
            <img id="men" border="0" alt="T-shirt" src="images/pantherflag.jpeg" width="600" height="600">
            <fieldset>
                 <form>
                <select>
                <option>Choose Size</option>
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
                <option>XL</option>
                </select>
            </form>  
            </fieldset>   <br/><br />
       <input type="submit" value="Submit" name="submit" class="btn btn-primary btn-user btn-block" href="Thankyoutshirt.php"> 
  

         <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>        
     <?php
        include('footer.php');
        ?>
        
</body>
      
</html>