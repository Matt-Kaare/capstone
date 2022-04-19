<?php

session_start();

require_once("dbconnect.php");

if(isset($_GET['token'])){

$token=$_GET['token'];

$updatequery="UPDATE users SET status='active' WHERE token='$token' ";

 $query=mysqli_query($connect,$updatequery);

if($query){
    
$_SESSION['status']="Account is Activated Successfully!";
$_SESSION['status_code']="success";
header('Location:Panel.php');
}
else{
$_SESSION['status']="Account not Activated!";
$_SESSION['status_code']="error";
header('Location:Panel.php');
}

}
?>