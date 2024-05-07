<?php 
include("connect.php");
if($_SERVER['REQUEST_METHOD']==="POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $erpid = $_POST['erpid'];
    // $date = $_POST['date'];
    $q1_rating = $_POST['q1_rating'];
    $q2_rating = $_POST['q2_rating'];
    $q3_rating = $_POST['q3_rating'];
    $q4_rating = $_POST['q4_rating'];
    $q5_rating = $_POST['q5_rating'];
    $q6_rating = $_POST['q6_rating'];
    $q7_rating = $_POST['q7_rating'];
    $insert_data = "INSERT INTO facultyfeedbackform ( name, email, erpid, q1_rating, q2_rating, q3_rating, q4_rating, q5_rating, q6_rating, q7_rating) VALUES ('$name','$email','$erpid', '$q1_rating', '$q2_rating', '$q3_rating','$q4_rating','$q5_rating','$q6_rating', '$q7_rating')";
    if(mysqli_query($conn, $insert_data)){
      
      echo"Location:success.php";
        
           
    
    
    }else{
        echo "Error :".$insert_data."<br>".mysqli_error($conn);
    }
}
?>