<?php
include("connect.php");
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $email  = $_POST['email'];
    $sql = "SELECT * FROM studentemails WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    //check if the email is present or not in the table
    if(mysqli_num_rows($result) > 0){
         // if the email exits in the data base reteive the data to next table
         $enrollmentno =$_POST['enrollmentno'];
         $department =$_POST['department'];
         $degree=$_POST['degree'];
         $programme =$_POST['programme'];
         $academicyear =$_POST['academicyear'];
         $semester =$_POST ['semester']; 
         $insert_query = "INSERT INTO studentfeedbackform( enrollmentno, email, department, degree, programme, academicyear, semester) VALUES('$enrollmentno', '$email', '$department', '$degree', '$programme', '$academicyear', '$semester' )";
         if(mysqli_query($conn, $insert_query)){
            header("Location:studentfeedbackform.php");
         }else{
            echo "Error :".$insert_query."<br>".mysqli_error($conn);
         }
    }else{
        $email_exists = false;
        echo "<script>alert('Email does not exist')</script>";
    }
}
if(isset($_POST['submit'])){
    $subject = $_POST['subject'];
 
    $subject_q1_rating = $_POST['subject_q1_rating']; 
    $subject_q2_rating = $_POST['subject_q2_rating']; 
    $subject_q3_rating = $_POST['subject_q3_rating']; 
    $subject_q4_rating = $_POST['subject_q4_rating']; 
    $subject_q5_rating = $_POST['subject_q5_rating']; 
 
 
 
    $insertSubjectData = "INSERT INTO studentfeedbackform (subject, subject_q1_rating, subject_q2_rating, subject_q3_rating, subject_q4_rating,  subject_q5_rating) VALUES ('$subject','$subject_q1_rating', '$subject_q2_rating', '$subject_q3_rating', '$subject_q4_rating', '$subject_q5_rating')";
    if(mysqli_query($conn,$insertSubjectData)){
      echo"Select your next subject and Teacher";
    }   else{
     echo "Error :".$insertSubjectData."<br>".mysqli_error($conn);
 }
 
 
 $teacher = $_POST['teacher'];
 $teacher_q1_rating = $_POST['teacher_q1_rating'];
 $teacher_q2_rating = $_POST['teacher_q2_rating'];
 $teacher_q3_rating = $_POST['teacher_q3_rating'];
 $teacher_q4_rating = $_POST['teacher_q4_rating'];
 $teacher_q5_rating = $_POST['teacher_q5_rating'];
 $insertTeacherData = "INSERT INTO studentfeedbackform (teacher, teacher_q1_rating, teacher_q2_rating, teacher_q3_rating, teacher_q4_rating,  teacher_q5_rating) VALUES ('$teacher','$teacher_q1_rating', '$teacher_q2_rating', '$teacher_q3_rating', '$teacher_q4_rating', '$teacher_q5_rating')";
 if(!mysqli_query($conn,$insertTeacherData)){
     echo "Error :".$insertTeacherData."<br>".mysqli_error($conn);
 }   
 }
?>