<?php
include("connect.php");
if(isset($_POST['submit'])){
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $contact =  $_POST['contact'];
    $department = $_POST['department'];
    $degree = $_POST['degree'];
    $programme = $_POST['programme'];
    $semester = $_POST['semester']; 
    $q1_rating = $_POST['q1_rating'];
    $q2_rating = $_POST['q2_rating'];
    $q3_rating = $_POST['q3_rating'];
    $q4_rating = $_POST['q4_rating'];
    $q5_rating = $_POST['q5_rating'];
    $insertAluminiData = "INSERT INTO alumnifeedback(name, email, contact, department, degree, programme, semester, q1_rating, q2_rating, q3_rating, q4_rating, q5_rating) VALUES ('$name', '$email', '$contact', '$department', '$degree', '$programme', '$semester', '$q1_rating', '$q2_rating', '$q3_rating', '$q4_rating', '$q5_rating')";
    if(mysqli_query($conn, $insertAluminiData)){
        header("Location:success.php");
    }  
    else{
        echo"Error:" .$insertAlumniData."<br>".mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Feedback</title>
    <link rel="stylesheet" href="./css/alumnifeedback.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <h2>Alumni Feedback Form</h2>
            </div>
        </div>
        <div class="form-container">
            <form action="" method="post">
            <div class="alumni-info">
                    <div class="name">
                        <label for="name">Full Name*</label>
                        <input type="text" name="name" id="name" placeholder="Name" autocomplete="off" required>
                    </div>
                    <div class="email">
                        <label for="email">Email*</label>
                        <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" required>
                    </div>
                    <div class="contact">
                        <label for="contact">Contact*</label>
                        <input type="text" name="contact" id="contact" placeholder="0000000000" autocomplete="off" required>
                    </div>
                </div>
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
                                <label for="batch">Batch</label>
                                <select name="batch" id="batch" class="w-75">
                                    <option value="">Select Year</option>
                                    <option value="year2">2021-25</option>
                                    <option value="year2">2020-24</option>
                                    <option value="year3">2019-23</option>
                                    <option value="year4">2018-22</option>                                 
                                </select>
                            </div>
                           
                </div>
                <hr>
                <div class="fb_question">
                    <div class="que">
                        <h2>Que1: Course content</h2>
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
                        <h2>Que2: Avaliblity of reading material(Library/Interne/Others)</h2>
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
                        <h2>Que3: Use of Innovative teaching methods(Group discussion, field exercies, role play & others)</h2>
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
                        <h2>Que4: Learning value(in terms of knoweledge, concepts, manual skills, analytical abilities, and in broadening one's perspective)</h2>
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
                        <h2>Que5: Overall Rating </h2>
                        <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                        <div class="rating">

                            <input type="radio" id="star5_q5" name="q5_rating" value="5"><label for="star5_q5"></label>
                            <input type="radio" id="star4_q5" name="q5_rating" value="4"><label for="star4_q5"></label>
                            <input type="radio" id="star3_q5" name="q5_rating" value="3"><label for="star3_q5"></label>
                            <input type="radio" id="star2_q5" name="q5_rating" value="2"><label for="star2_q5"></label>
                            <input type="radio" id="star1_q5" name="q5_rating" value="1"><label for="star1_q5"></label>
                        </div>
                    </div>
                </div>
                <button type="submit" name="submit" id="submitbtn">Submit</button>
            </form>
        </div>
    </div>
    <script src="./js/alumnifeedback.js"></script>
</body>
</html>
