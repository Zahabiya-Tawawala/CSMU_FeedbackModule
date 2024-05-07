<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        /* Styles for the form */
    </style>
</head>
<body>
    <div class="container">
        <form action="submit_feedback.php" method="post">
            <label for="subject">Select a subject:</label>
            <input type="text" id="subjectSearch" onkeyup="filterItems('subjectSearch', 'subjectSelect', 'noResultsSubject')" placeholder="Search for subjects..">
            <select name="subject" id="subjectSelect" size="10" onchange="showSubjectFeedbackForm()" onchange="this.previousElementSibling.value=this.value"  style="display:none">
                <!-- Options will be populated dynamically using JavaScript -->
            </select>
            <p id="noResultsSubject" class="noResultsMessage">No results found for this query.</p> <!-- New message element -->
            <br>
            <label for="teacher">Select a teacher:</label>
            <input type="text" id="teacherSearch" onkeyup="filterItems('teacherSearch', 'teacherSelect', 'noResultsTeacher')" placeholder="Search for teachers..">
            <select name="teacher" id="teacherSelect" size="10" style="display: none;">
                <!-- Options will be populated dynamically using JavaScript -->
            </select>
            <p id="noResultsTeacher" class="noResultsMessage">No results found for this query.</p> <!-- New message element -->
            <br>
         
            <input type="submit" value="Submit">
        </form>
    </div>

    <div id="subjectFeedbackForm" style="display: none;">
        <!-- Subject-based feedback form with star ratings -->
        <h2>Subject-based Feedback</h2>
        <form id="subjectFeedback" action="submit_feedback.php" method="post">
            <!-- Questions for subject-based feedback -->
            <label>Question 1: How clear were the explanations?</label>
            <div class="rating">
                <input type="radio" name="q1_rating" value="1"><span class="icon">★</span>
                <input type="radio" name="q1_rating" value="2"><span class="icon">★</span>
                <input type="radio" name="q1_rating" value="3"><span class="icon">★</span>
                <input type="radio" name="q1_rating" value="4"><span class="icon">★</span>
                <input type="radio" name="q1_rating" value="5"><span class="icon">★</span>
            </div>
            <!-- Repeat similar structure for other questions -->
            <input type="hidden" name="subject_id" id="subjectId"> <!-- Hidden field to store selected subject id -->
            <input type="submit" value="Submit Feedback">
        </form>
    </div>

    <div id="teacherFeedbackForm" style="display: none;">
        <!-- Teacher-based feedback form with star ratings -->
        <h2>Teacher-based Feedback</h2>
        <form id="teacherFeedback" action="submit_feedback.php" method="post">
            <!-- Questions for teacher-based feedback -->
            <label>Question 1: How knowledgeable was the teacher?</label>
            <div class="rating">
                <input type="radio" name="teacher_q1_rating" value="1"><span class="icon">★</span>
                <input type="radio" name="teacher_q1_rating" value="2"><span class="icon">★</span>
                <input type="radio" name="teacher_q1_rating" value="3"><span class="icon">★</span>
                <input type="radio" name="teacher_q1_rating" value="4"><span class="icon">★</span>
                <input type="radio" name="teacher_q1_rating" value="5"><span class="icon">★</span>
            </div>
            <!-- Repeat similar structure for other questions -->
            <input type="hidden" name="teacher_id" id="teacherId"> <!-- Hidden field to store selected teacher id -->
            <input type="submit" value="Submit Feedback">
        </form>
        <a href="test4.php">click test4</a>
    </div>

    <script>
               function filterItems(inputId, selectId, messageId) {
            var input, filter, select, option, i;
            input = document.getElementById(inputId);
            filter = input.value.toUpperCase();
            select = document.getElementById(selectId);
            option = select.getElementsByTagName("option");
            var found = false; 
            for (i = 0; i < option.length; i++) {
                if (option[i].text.toUpperCase().indexOf(filter) > -1) {
                    option[i].style.display = "";
                    found = true; 
                } else {
                    option[i].style.display = "none";
                }
            }
           
            select.style.display = filter.length > 0 ? "block" : "none"; 
            
          
            document.getElementById(messageId).style.display = found ? "none" : "block";
        }
        var subjects = [
            "LAWR1010-DSC Law for PHD",
            "SMER1005-SEMINAR",
            "RPER1000-RESEARCH AND PUBLICATION ETHICS",
            "RMER1000-RESEARCH METHODOLOGY",
        ];
        var subjectSelect = document.getElementById("subjectSelect");
        subjects.forEach(function(subject) {
            var option = document.createElement("option");
            option.text = subject;
            subjectSelect.add(option);
        });
        var teachers = [
            "Mr. Smith",
            "Ms. Johnson",
            "Mr. Brown",
            
        ];
        var teacherSelect = document.getElementById("teacherSelect");
        teachers.forEach(function(teacher) {
            var option = document.createElement("option");
            option.text = teacher;
            teacherSelect.add(option);
        });

        function showSubjectFeedbackForm() {
            var subjectSelect = document.getElementById("subjectSelect");
            var subjectFeedbackForm = document.getElementById("subjectFeedbackForm");
            var selectedSubject = subjectSelect.value;
            var subjectId = subjectSelect.options[subjectSelect.selectedIndex].dataset.id;

            if (selectedSubject) {
                subjectFeedbackForm.style.display = "block";
                document.getElementById("subjectId").value = subjectId;
                if(selectedSubject){
                    subjectFeedbackForm.style.display = "none";
                }
              
            } else {
                subjectFeedbackForm.style.display = "none";
            }
        }

        
    </script>
</body>
</html>
