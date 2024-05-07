<?php
 include("facultyFeedbackData.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSMU Faculty Feedback</title>
    <link rel="stylesheet" href="./css/faculty-feedback.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
    <!-- <div class="left-container">
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
        <!-- <div class="right-head">
            <img src="./images/logo.png" alt="">
        </div> -->
       <div>
        <h2>Faculty Feedback Form</h2>
       </div>
    </div>
      
<!-- -----feedback form----- -->
    <div class="form-container">
       <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
         <div class="form-inputs">
            <div class="name">
                <label for="name">Faculty Name</label>
                <input type="text" name="name" id="name" placeholder="Full Name" autocomplete="off" required>
            </div>
            <div class="email">
                <label for="email">Email</label>
                <input type="email" name="email" id="eamil" placeholder="eamil" autocomplete="off" required>
            </div> 

            <div class="Faculty-ID">
                        
               <label for="erpid">Faculty ID</label>
                <input type="text" name="erpid" id="faculty-id" placeholder="ERP ID" autocomplete="off" required>
            </div>
            <!-- <div class="date">
                <label for="date">Feedback Date</label>
                <input type="text" name="date" id="date" placeholder="Date" autocomplete="off" required>
            </div> -->
         </div>
         <div class="mt-4">
            <div class="que1 ">
            <h2>Que1 :Syllabus is suitable to the course</h2>
                <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                <div class="rating">
                
                    <input type="radio" id="star5_q1" name="q1_rating" value="5"><label for="star5_q1"></label>
                    <input type="radio" id="star4_q1" name="q1_rating" value="4"><label for="star4_q1"></label>
                    <input type="radio" id="star3_q1" name="q1_rating" value="3"><label for="star3_q1"></label>
                    <input type="radio" id="star2_q1" name="q1_rating" value="2"><label for="star2_q1"></label>
                    <input type="radio" id="star1_q1" name="q1_rating" value="1"><label for="star1_q1"></label>
            </div>
            </div>
            <div class="que1 ">
            <h2>Que2 :Curricula developed and implemented have relevance to the local, national,regional and global need</h2>
                <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                <div class="rating">
                
                    <input type="radio" id="star5_q2" name="q2_rating" value="5"><label for="star5_q2"></label>
                    <input type="radio" id="star4_q2" name="q2_rating" value="4"><label for="star4_q2"></label>
                    <input type="radio" id="star3_q2" name="q2_rating" value="3"><label for="star3_q2"></label>
                    <input type="radio" id="star2_q2" name="q2_rating" value="2"><label for="star2_q2"></label>
                    <input type="radio" id="star1_q2" name="q2_rating" value="1"><label for="star1_q2"></label>
            </div>
            </div>
            <div class="que1 ">
            <h2>Que3 :Programme outcome of the syllabus is well defined and clear</h2>
                <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                <div class="rating">
                
                    <input type="radio" id="star5_q3" name="q3_rating" value="5"><label for="star5_q3"></label>
                    <input type="radio" id="star4_q3" name="q3_rating" value="4"><label for="star4_q3"></label>
                    <input type="radio" id="star3_q3" name="q3_rating" value="3"><label for="star3_q3"></label>
                    <input type="radio" id="star2_q3" name="q3_rating" value="2"><label for="star2_q3"></label>
                    <input type="radio" id="star1_q3" name="q3_rating" value="1"><label for="star1_q3"></label>
            </div>
            </div>
            <div class="que1 ">
            <h2>Que4 :Course outcome of the syllabus is well defined and clear     </h2>
                <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                <div class="rating">
                
                    <input type="radio" id="star5_q4" name="q4_rating" value="5"><label for="star5_q4"></label>
                    <input type="radio" id="star4_q4" name="q4_rating" value="4"><label for="star4_q4"></label>
                    <input type="radio" id="star3_q4" name="q4_rating" value="3"><label for="star3_q4"></label>
                    <input type="radio" id="star2_q4" name="q4_rating" value="2"><label for="star2_q4"></label>
                    <input type="radio" id="star1_q4" name="q4_rating" value="1"><label for="star1_q4"></label>
            </div>
            </div>
            <div class="que1 ">
            <h2>Que5 :The courses have good balance between theory and practical</h2>
                <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                <div class="rating">
                
                    <input type="radio" id="star5_q5" name="q5_rating" value="5"><label for="star5_q5"></label>
                    <input type="radio" id="star4_q5" name="q5_rating" value="4"><label for="star4_q5"></label>
                    <input type="radio" id="star3_q5" name="q5_rating" value="3"><label for="star3_q5"></label>
                    <input type="radio" id="star2_q5" name="q5_rating" value="2"><label for="star2_q5"></label>
                    <input type="radio" id="star1_q5" name="q5_rating" value="1"><label for="star1_q5"></label>
            </div>
            </div>
            <div class="que1 ">
            <h2>Que6 :Curriculum Focus on competency/employability/ entrepreneurship/ skill-development</h2>
                <!-- <label for="rating" class="qu1-label">Que1 :Syllabus is suitable to the course</label> -->
                <div class="rating">
                
                    <input type="radio" id="star5_q6" name="q6_rating" value="5"><label for="star5_q6"></label>
                    <input type="radio" id="star4_q6" name="q6_rating" value="4"><label for="star4_q6"></label>
                    <input type="radio" id="star3_q6" name="q6_rating" value="3"><label for="star3_q6"></label>
                    <input type="radio" id="star2_q6" name="q6_rating" value="2"><label for="star2_q6"></label>
                    <input type="radio" id="star1_q6" name="q6_rating" value="1"><label for="star1_q6"></label>
            </div>
            </div6
            <div class="que1 ">
            <h2>Que7 :Research oriented syllabus</h2>
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
         <button type="submit" name="submit" id="submitbtn">submit</button>
       </form>
       </div>

    </div>
    <!-- <script>
        var formSubmitted = false;

        function submitForm() {
            if (!formSubmitted) {
                formSubmitted = true;
                return true; // Allow form submission
            } else {
                return false; // Prevent form submission
            }
        }
    </script> -->
   
</body>
</html>