<?php
include"connect.php";
$email = $_POST['email'];
$query = "SELECT * FROM studentemails WHERE email = '$email'";
   $checkEmail = $conn->query($query);
   if($checkEmail->num_rows > 0){
    header("Location: index.php");
    exit();
   }
   else{
   echo "<script>alert('email not found')</script>";
  }
?>