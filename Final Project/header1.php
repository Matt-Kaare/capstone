<?php
session_start();
require_once("dbconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
* {box-sizing: border-box;}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
    </style>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>

<!--<link href="css/sticky-footer-navbar.css" rel="stylesheet">-->
</head>
<body>
   <div class="header">
    <a href="#default" class="logo"></a>
    <div class="header-right">
        <a href="project.php">Home Page</a> 
        <!--<a href="registration_form.php">Register Account</a> | -->
        <a href="viewusers.php">View Users</a> 
        <a class="active" href="login(3).php">Log Out</a>
    </div>
</body>
</html> 

