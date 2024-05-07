<?php
$conn = new mysqli('localhost', 'root','','student-feedbackform');
if(!$conn){
    die(mysqli_error($conn));
}
// $conn = new mysqli('localhost', '@csmu','csmu#12345','student-feedbackform');
// if(!$conn){
//     die(mysqli_error($conn));
// }

?>