<?php 
include("connect.php");
if(isset($_POST['submit'])){
    $department = $_POST['department'];
    $degree = $_POST['degree'];
    $programme = $_POST['programme'];
    $semester = $_POST['semester'];
    $academicyear = $_POST['academicyear'];
    $st_name = $_POST['st_name'];
    $pt_name = $_POST['pt_name'];
    $pt_occup = $_POST['pt_occup'];
    $contact = $_POST['contact'];
    $contact  =preg_replace('/[^0-9]/','',$contact);
    $contact = substr($contact,0,10);
    $email = $_POST['email'];
    $q1_rating = $_POST['q1_rating'];
    $q2_rating = $_POST['q2_rating'];
    $q3_rating = $_POST['q3_rating'];
    $q4_rating = $_POST['q4_rating'];
    $q5_rating = $_POST['q5_rating'];
    $q6_rating = $_POST['q6_rating'];
    $q7_rating = $_POST['q7_rating'];

    $inesertParentData = "INSERT INTO parentfeedback(department, degree, programme, semester, academicyear, st_name, pt_name, pt_occup, contact, email, q1_rating, q2_rating, q3_rating, q4_rating, q5_rating, q6_rating, q7_rating) VALUES ('$department', '$degree', '$programme', '$semester', '$academicyear', '$st_name', '$pt_name', '$pt_occup', '$contact', '$email', '$q1_rating', '$q2_rating', '$q3_rating', '$q4_rating', '$q5_rating', '$q6_rating', '$q7_rating')";
    
    if(mysqli_query($conn, $inesertParentData)){
      
        header("Location:success.php");
          
    }
    else{
          echo "Error :".$inesertParentData."<br>".mysqli_error($conn);
      }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Feedback</title>
    <link rel="stylesheet" href="./css/parent-feedback.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
<style>
    *{
    font-family: "Open Sans", Arial, sans-serif;
      }
</style>
</head>
<body>
    <div class="main-container">
    <!-- <div class="left-contanier">
            <ul class="left-links">
                <li><a href="index.php">Back to Home</a></li>
                <li><a href="index.php">Student Feedback</a></li>
                <li><a href="facultyfeedback.php">Teacher Feedback</a></li>
                <li><a href="alumnifeedback.php">Almuni Feedback</a></li>
                <li><a href="parentfeedback.php">Parents Feedback</a></li>
                <li><a href="employerFeedback.php">Employee Feedback</a></li>
                <li><a href="professionalfeedback.php">professional Feedback</a></li>
                <li><i class="fa-solid fa-bars"></i></li>
                <li><i class="fa-solid fa-xmark"></i></li>
            </ul>
        </div> -->
        <?php
        include("nav.php")
        ?>
        <div class="right-container">
            <div>
                <h2>Parent Feedback Form</h2>
            </div>
        </div>
        <div class="form-container">
            <form action="" method="post">
                <div class="form-inputs">
                            <div class="department">
                                 <label for="department">Select Department</label>
                                 <select name="department" id="departmentSelect" class="w-75">
                                    <option value="">*Department</option>
                                    <option value="dept_of_apl_soc_Sci" id="dept_of_apl_soc_Sci">Dept. of Applied Social Sciences</option>
                                    <option value="dept_of_basic_sci" id="dept_of_basic_sci">Dept. of Basic Sciences</option>
                                    <option value="dept_of_buss_management">Dept. of Bussiness Management</option>
                                    <option value="dept_of_cilvl_eng">Dept. of Civil Enginnering</option>
                                    <option value="dept_of_com">Dept. of Commerce</option>
                                    <option value="dept_of_csit">Dept. of CS & IT</option>
                                    <option value="dept_of_design&arts">Dept. of Design & Arts</option>
                                    <option value="dept_of_elec_eng">Dept. of Electrical & Electronics Enginnering</option>
                                    <option value="dept_of_hos_management">Dept. of Hospitality Management</option>
                                    <option value="dept_of_Humanities">Dept. of Humanities</option>
                                    <option value="dept_of_journalism_massComm">Dept. of Journalism and Mass Communication</option>
                                    <option value="dept_of_law">Dept. of Law</option>
                                    <option value="Dept_of_lib_&_info_sci">Dept. of Library & Information Science</option>
                                    <option value="dept_of_mech_engg">Dept. of Mechnical Enginnering</option>
                                    <option value="dept_of_pharmacy">Dept. of Pharmacy</option>
                                    <option value="dept_of_social_work">Dept. of Social Work</option>
                                </select>
                            </div>
                            <div class="degree" >
                                <label for="degree" > Select Degree</label>
                                <select name="degree" id="degreeSelect" class="w-75" onchange="filterOptions()" required>
                                <option value="" id="se">Select Degree</option>
                                    <option value="ug" id="ug">UG</option>
                                    <option value="pg" id="pg">PG</option>
                                    <option value="phd">PHD</option>
                                    <option value="diploma">DIPLOMA</option>
                                    <option value="research">RESEARCH</option>
                                    <option value="certificate">CERTIFICATE</option>
                                </select>
                            </div>
                            <div class="programme">
                                <label for="programme">Select Programme</label>
                            <select name="programme" id="programmeSelect"  class="w-75"  onchange="selectSemester()" required>
                                <option value="">Select Program</option>
                            </select>
                            </div>
                            <div class="semester" >
                                <label for="semester">Semester</label>
                                <select name="semester" id="selectSemester" class="w-75" required>
                                    
                                </select>
                            </div>
                            <div class="academicyear" >
                                <label for="academicyear">Academic Year</label>
                                <select name="academicyear" id="" class="w-75">
                                    <option value="">Select Year</option>
                                    <option value="23-24">Year 2023-2024</option>
                                    <option value="21-22">Year 2021-2022</option>
                                    <option value="20-21">Year 2020-2021</option>
                                    <option value="19-20">Year 2019-2020</option>
                                    <option value="18-19">Year 2018-2019</option>
                                </select>
                            </div>
                           
                </div>
                <!-- ----------Parent info ------------  -->
                <div class="parent_info">
                    <div class="st_name">
                        <label for="st_name">Student Name</label>
                        <input type="text" name="st_name" id="st_name" placeholder="Full Name" autocomplete="off" required>
                     </div>
                     <div class="pt_name">
                        <label for="pt_name">Parent Name</label>
                        <input type="text" name="pt_name" id="pt_name" placeholder="Full Name" autocomplete="off" required>
                     </div>
                     <div class="pt_occ">
                        <label for="pt_occup">Parent Occupation</label>
                        <input type="text" name="pt_occup" id="pt_occup" placeholder="Occupation" autocomplete="off" required>
                     </div>
                     <div class="contact">
                        <label for="contact">Contact No.</label>
                        <input type="phone" name="contact" id="contact" placeholder="0000000000" autocomplete="off" required>
                     </div>
                     <div class="email">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="email@gmail.com" autocomplete="off" required>
                     </div>
                </div>
                <!-- -----------Feedback questions ------------- -->
                 <div class="fb_questions">
                 <div class="que">
                        <h2>Que1:Curricular</h2>
                        <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                        <div class="rating">
                            
                            <input type="radio" id="star5_q1" name="q1_rating" value="5"><label for="star5_q1"></label>
                            <input type="radio" id="star4_q1" name="q1_rating" value="4"><label for="star4_q1"></label>
                            <input type="radio" id="star3_q1" name="q1_rating" value="3"><label for="star3_q1"></label>
                            <input type="radio" id="star2_q1" name="q1_rating" value="2"><label for="star2_q1"></label>
                            <input type="radio" id="star1_q1" name="q1_rating" value="1"><label for="star1_q1"></label>
                        </div>
                    </div>
                    <div class="que ">
                        <h2>Que2:Infrastructure</h2>
                        <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                        <div class="rating">

                            <input type="radio" id="star5_q2" name="q2_rating" value="5"><label for="star5_q2"></label>
                            <input type="radio" id="star4_q2" name="q2_rating" value="4"><label for="star4_q2"></label>
                            <input type="radio" id="star3_q2" name="q2_rating" value="3"><label for="star3_q2"></label>
                            <input type="radio" id="star2_q2" name="q2_rating" value="2"><label for="star2_q2"></label>
                            <input type="radio" id="star1_q2" name="q2_rating" value="1"><label for="star1_q2"></label>
                        </div>
                    </div>
                    <div class="que ">
                        <h2>Que3:Feestructure</h2>
                        <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                        <div class="rating">

                            <input type="radio" id="star5_q3" name="q3_rating" value="5"><label for="star5_q3"></label>
                            <input type="radio" id="star4_q3" name="q3_rating" value="4"><label for="star4_q3"></label>
                            <input type="radio" id="star3_q3" name="q3_rating" value="3"><label for="star3_q3"></label>
                            <input type="radio" id="star2_q3" name="q3_rating" value="2"><label for="star2_q3"></label>
                            <input type="radio" id="star1_q3" name="q3_rating" value="1"><label for="star1_q3"></label>
                        </div>
                    </div>
                    <div class="que ">
                        <h2>Que4: Teacher student relation</h2>
                        <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                        <div class="rating">
                            
                            <input type="radio" id="star5_q4" name="q4_rating" value="5"><label for="star5_q4"></label>
                            <input type="radio" id="star4_q4" name="q4_rating" value="4"><label for="star4_q4"></label>
                            <input type="radio" id="star3_q4" name="q4_rating" value="3"><label for="star3_q4"></label>
                            <input type="radio" id="star2_q4" name="q4_rating" value="2"><label for="star2_q4"></label>
                            <input type="radio" id="star1_q4" name="q4_rating" value="1"><label for="star1_q4"></label>
                        </div>
                    </div>
                    <div class="que ">
                        <h2>Que5:Non-Teaching staff and student relation</h2>
                        <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                        <div class="rating">

                            <input type="radio" id="star5_q5" name="q5_rating" value="5"><label for="star5_q5"></label>
                            <input type="radio" id="star4_q5" name="q5_rating" value="4"><label for="star4_q5"></label>
                            <input type="radio" id="star3_q5" name="q5_rating" value="3"><label for="star3_q5"></label>
                            <input type="radio" id="star2_q5" name="q5_rating" value="2"><label for="star2_q5"></label>
                            <input type="radio" id="star1_q5" name="q5_rating" value="1"><label for="star1_q5"></label>
                        </div>
                    </div>
                    <div class="que ">
                        <h2>Que6:Extra-curricular activity</h2>
                        <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                        <div class="rating">

                            <input type="radio" id="star5_q6" name="q6_rating" value="5"><label for="star5_q6"></label>
                            <input type="radio" id="star4_q6" name="q6_rating" value="4"><label for="star4_q6"></label>
                            <input type="radio" id="star3_q6" name="q6_rating" value="3"><label for="star3_q6"></label>
                            <input type="radio" id="star2_q6" name="q6_rating" value="2"><label for="star2_q6"></label>
                            <input type="radio" id="star1_q6" name="q6_rating" value="1"><label for="star1_q6"></label>
                        </div>
                    </div>
                    <div class="que ">
                        <h2>Que7:Financial aid(fee freeship etc.)</h2>
                        <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                        <div class="rating">

                            <input type="radio" id="star5_q7" name="q7_rating" value="5"><label for="star5_q7"></label>
                            <input type="radio" id="star4_q7" name="q7_rating" value="4"><label for="star4_q7"></label>
                            <input type="radio" id="star3_q7" name="q7_rating" value="3"><label for="star3_q7"></label>
                            <input type="radio" id="star2_q7" name="q7_rating" value="2"><label for="star2_q7"></label>
                            <input type="radio" id="star1_q7" name="q7_rating" value="1"><label for="star1_q7"></label>
                        </div>
                    </div>
                 </div>
                 <button type="submit" name="submit" id="submitbtn">Submit</button>
            </form>
        </div>
    </div>
    <script src="./js/parentfeedback.js"></script>
</body>
</html>