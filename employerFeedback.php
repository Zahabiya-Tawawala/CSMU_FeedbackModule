<?php
include("connect.php");
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile =$_POST['mobile'];
    $designation =$_POST['designation'];
    $organization =$_POST['organization'];

    //for questions
    $q1_rating = $_POST['q1_rating'];
    $q2_rating = $_POST['q2_rating'];
    $q3_rating = $_POST['q3_rating'];
    $q4_rating = $_POST['q4_rating'];
    $q5_rating = $_POST['q5_rating'];
    $q6_rating = $_POST['q6_rating'];
    $q7_rating = $_POST['q7_rating'];
    $q8_rating = $_POST['q8_rating'];
    $q9_rating = $_POST['q9_rating'];
    $q10_rating = $_POST['q10_rating'];
    $q11_rating = $_POST['q11_rating'];

    $data = "INSERT INTO employerfeedback(name, email, mobile, designation, organization, q1_rating, q2_rating, q3_rating, q4_rating, q5_rating, q6_rating, q7_rating, q8_rating, q9_rating, q10_rating, q11_rating) VALUES ('$name', '$email', '$mobile', '$designation', '$organization', '$q1_rating', '$q2_rating', '$q3_rating', '$q4_rating','$q5_rating', '$q6_rating', '$q7_rating', '$q8_rating' , '$q9_rating', '$q10_rating', '$q11_rating')";
    if(mysqli_query($conn, $data)){
      
        header("Location:success.php");
          
    }
    else{
          echo "Error :".$data."<br>".mysqli_error($conn);
      }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Feedback</title>
    <link rel="stylesheet" href="./css/employerfeeback1.css">

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
                <h2>Employer Feedback Form</h2>
            </div>
        </div>

        <!-------Feedback form------->
        <div class="form-container">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <div class="form-inputs">
                    <div class="name">
                        <label for="name">Employer Name</label>
                        <input type="text" name="name" id="name" placeholder="Name" autocomplete="off" required>
                    </div>
                    <div class="email">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" required>
                    </div>
                    <div class="mobile">
                        <label for="mobile">Mobile</label>
                        <input type="phone" name="mobile" placeholder="Mobile" id="mobile" autocomplete="off" required>
                    </div>
                    <div class="designation">
                        <label for="designation">Designation</label>
                        <input type="text" name="designation" id="designation" placeholder="Designation" autocomplete="off" required>
                    </div>
                    <div class="organization">
                        <label for="organization">Name of the organization</label>
                        <input type="text" name="organization" id="organization" placeholder="Name of Organization" autocomplete="off" required>
                    </div>
                </div>
                <hr>
                
                <div class="guide">
                    <p class="mt-4">"Please Rate the course taugth during your tenure in the university"</p>
                </div>
                
                <div class="fb_questions">

                    <div class="que ">
                        <h2>Que1 :Syllabus is suitable to the course.</h2>
                        <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                        <div class="rating" required>

                            <input type="radio" id="star5_q1" name="q1_rating" value="5"><label for="star5_q1"></label>
                            <input type="radio" id="star4_q1" name="q1_rating" value="4"><label for="star4_q1"></label>
                            <input type="radio" id="star3_q1" name="q1_rating" value="3"><label for="star3_q1"></label>
                            <input type="radio" id="star2_q1" name="q1_rating" value="2"><label for="star2_q1"></label>
                            <input type="radio" id="star1_q1" name="q1_rating" value="1"><label for="star1_q1"></label>
                        </div>
                    </div>

                    <div class="que ">
                        <h2>Que2 :Curricula developed and implemented have relevance to the local, national, regional and global need.</h2>
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
                        <h2>Que3 :Programme outcome of the syllabus is well defined and clear.</h2>
                        <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                        <div class="rating">

                            <input type="radio" id="star1_q3" name="q3_rating" value="1"><label for="star1_q3"></label>
                            <input type="radio" id="star2_q3" name="q3_rating" value="2"><label for="star2_q3"></label>
                            <input type="radio" id="star3_q3" name="q3_rating" value="3"><label for="star3_q3"></label>
                            <input type="radio" id="star4_q3" name="q3_rating" value="4"><label for="star4_q3"></label>
                            <input type="radio" id="star5_q3" name="q3_rating" value="5"><label for="star5_q3"></label>
                        </div>
                    </div>

                    <div class="que ">
                        <h2>Que4: The course have good balance between theory and practical.</h2>
                        <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                        <div class="rating">

                            <input type="radio" id="star1_q4" name="q4_rating" value="1"><label for="star1_q4"></label>
                            <input type="radio" id="star2_q4" name="q4_rating" value="2"><label for="star2_q4"></label>
                            <input type="radio" id="star3_q4" name="q4_rating" value="3"><label for="star3_q4"></label>
                            <input type="radio" id="star4_q4" name="q4_rating" value="4"><label for="star4_q4"></label>
                            <input type="radio" id="star5_q4" name="q4_rating" value="5"><label for="star5_q4"></label>
                        </div>
                    </div>

                    <div class="que ">
                        <h2>Que5:Curriculum focous on Competency/Emplobility/Entrepeneurship/Skill-Development.</h2>
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
                        <h2>Que6:Research Oriented Syllabus.</h2>
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
                        <h2>Que7:Adequecy of Knoweledge and Skills.</h2>
                        <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                        <div class="rating">

                            <input type="radio" id="star5_q7" name="q7_rating" value="5"><label for="star5_q7"></label>
                            <input type="radio" id="star4_q7" name="q7_rating" value="4"><label for="star4_q7"></label>
                            <input type="radio" id="star3_q7" name="q7_rating" value="3"><label for="star3_q7"></label>
                            <input type="radio" id="star2_q7" name="q7_rating" value="2"><label for="star2_q7"></label>
                            <input type="radio" id="star1_q7" name="q7_rating" value="1"><label for="star1_q7"></label>
                        </div>
                    </div>

                    <div class="que ">
                        <h2>Que8:Confidence of self-sufficiently.</h2>
                        <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                        <div class="rating">
                            
                            <input type="radio" id="star5_q8" name="q8_rating" value="5"><label for="star5_q8"></label>
                            <input type="radio" id="star4_q8" name="q8_rating" value="4"><label for="star4_q8"></label>
                            <input type="radio" id="star3_q8" name="q8_rating" value="3"><label for="star3_q8"></label>
                            <input type="radio" id="star2_q8" name="q8_rating" value="2"><label for="star2_q8"></label>
                            <input type="radio" id="star1_q8" name="q8_rating" value="1"><label for="star1_q8"></label>
                        </div>
                    </div>

                    <div class="que ">
                        <h2>Que9:Ability of work as team.</h2>
                        <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                        <div class="rating">

                            <input type="radio" id="star5_q9" name="q9_rating" value="5"><label for="star5_q9"></label>
                            <input type="radio" id="star4_q9" name="q9_rating" value="4"><label for="star4_q9"></label>
                            <input type="radio" id="star3_q9" name="q9_rating" value="3"><label for="star3_q9"></label>
                            <input type="radio" id="star2_q9" name="q9_rating" value="2"><label for="star2_q9"></label>
                            <input type="radio" id="star1_q9" name="q9_rating" value="1"><label for="star1_q9"></label>
                        </div>
                    </div>

                    <div class="que ">
                        <h2>Que10:Reliabilty/ honesty towards assigned work.</h2>
                        <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                        <div class="rating">
                            
                            <input type="radio" id="star5_q10" name="q10_rating" value="5"><label for="star5_q10"></label>
                            <input type="radio" id="star4_q10" name="q10_rating" value="4"><label for="star4_q10"></label>
                            <input type="radio" id="star3_q10" name="q10_rating" value="3"><label for="star3_q10"></label>
                            <input type="radio" id="star2_q10" name="q10_rating" value="2"><label for="star2_q10"></label>
                            <input type="radio" id="star1_q10" name="q10_rating" value="1"><label for="star1_q10"></label>
                        </div>
                    </div>

                    <div class="que ">
                        <h2>Que11:Maintenance of work disciplines.</h2>
                        <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                        <div class="rating">

                            <input type="radio" id="star5_q11" name="q11_rating" value="5"><label for="star5_q11"></label>
                            <input type="radio" id="star4_q11" name="q11_rating" value="4"><label for="star4_q11"></label>
                            <input type="radio" id="star3_q11" name="q11_rating" value="3"><label for="star3_q11"></label>
                            <input type="radio" id="star2_q11" name="q11_rating" value="2"><label for="star2_q11"></label>
                            <input type="radio" id="star1_q11" name="q11_rating" value="1"><label for="star1_q11"></label>
                        </div>
                    </div>

                </div>
                <button type="submit" name="submit" class="submitbtn" >Submit</button>
            </form>
        </div>
    </div>
</body>

</html>