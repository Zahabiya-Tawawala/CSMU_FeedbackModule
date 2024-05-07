<?php 
include("studentdata.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Feedback CSMU</title>
    <link rel="stylesheet" href="./css/feedback1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
     
        .error{
            border: 1px solid red;
        }
    </style>
</head>
<body>
<body>

    <div class="main-container">
        <div class="sub-container">
            <div class="left-container">
                <ul class="left-links">
                    <li><a href="index.php">Back to Home</a></li>
                    <li><a href="feedbackform.php">Student Feedback</a></li>
                    <li><a href="facultyfeedback.php">Teacher Feedback</a></li>
                    <li><a href="alumnifeedback.php">Almuni Feedback</a></li>
                    <li><a href="parentfeedback.php">Parents Feedback</a></li>
                    <li><a href="employerFeedback.php">Employee Feedback</a></li>
                   <li><a href="professionalfeedback.php">Professional Feedback</a></li>
                    <li><i class="fa-solid fa-bars"></i></li>
                    <li><i class="fa-solid fa-xmark"></i></li>
                </ul>

            </div>
            <div class="right-container">
                <div class="right-head">
                    <img src="./images/logo.png" alt="">
                </div>
                <div class="form-container">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
                        <div class="form-inputs">
                            <div class="mb-2">
                                <label for="enrollmentno" class="form-label">Enrollment no.</label>
                                <input type="text" class="form-control" id="enrollno" name="enrollmentno">
                                <div id="emailHelp" class="form-text">Enter your enrollment no.</div>
                            </div>

                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label email">Email address</label>
                                <input type="email" class="form-control" name="email" id=email" aria-describedby="emailHelp" required <?php if(isset($email_exists) && (!$email_exists)) echo'class="error"'?>>
                              <div id="emailAlert"></div>
                                <div id="emailHelp" class="form-text">Enter Your Registered Email Address*</div>
                            </div>
                        </div>
                        <div class="form-select-options ">
                        <div class="mt-2 department " onchange="filterOptions()" required>
                                <label for="department">Department</label>
                                <select name="department" id="departmentSelect" class="w-75">
                                    <option value="">Select Department</option>
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
                            <div class=" mt-2 degree " >
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
                          
                            <div class=" mt-2 programme">
                                <label for="programme">Select Programme</label>
                            <select name="programme" id="programmeSelect"  class="w-75"  onchange="selectSemester()" required>
                                <option value="">Select Program</option>
                            </select>
                            </div>
                            <div class=" mt-2 academicyear" >
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
                            <div class=" mt-2 semester" >
                                <label for="semester">Semester</label>
                                <select name="semester" id="selectSemester" class="w-75" required>
                                    
                                </select>
                            </div>
                           
                        </div>
                        <button type="submit" name="submit" class="btn" >View form</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
    <script src="./js/feedback.js"></script>
  <script   src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
</body>
</html>