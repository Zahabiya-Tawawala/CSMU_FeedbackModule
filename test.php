<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 300px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

    
        select {
            width: 50%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            display: none; /* Initially hide the select */
        }

        #noResultsMessage {
            color: red;
            display: none; /* Initially hide the message */
        }

     

      
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <label for="subject">Select a subject:</label>
            <input type="text" id="subjectSearch" onkeyup="filterSubjects()" placeholder="Search for subjects..">
            <select name="subject" id="subjectSelect" size="10">
                <!-- Options will be populated dynamically using JavaScript -->
            </select>
            <p id="noResultsMessage">No results found.</p> <!-- New message element -->
           
           
        </form>
    </div>

    <script>
        function filterSubjects() {
            var input, filter, select, option, i;
            input = document.getElementById("subjectSearch");
            filter = input.value.toUpperCase();
            select = document.getElementById("subjectSelect");
            option = select.getElementsByTagName("option");
            var found = false; // Flag to track if any results are found
            for (i = 0; i < option.length; i++) {
                if (option[i].text.toUpperCase().indexOf(filter) > -1) {
                    option[i].style.display = "";
                    found = true; // Set found flag to true if at least one result is found
                } else {
                    option[i].style.display = "none";
                }
            }
            // Show the select tag when the user starts searching
            select.style.display = found ? "block" : "none";
            // Show or hide the "No results" message based on the found flag
            document.getElementById("noResultsMessage").style.display = found ? "none" : "block";
        }

        // This JavaScript code would dynamically populate the select tag with subjects
        // You would typically fetch the subjects from the server and populate them here
        // For the sake of example, I'm just creating an array of subjects
        var subjects = [
            "Mathematics",
            "Physics",
            "Chemistry",
            // Add all 4000 subjects here
        ];

        var select = document.getElementById("subjectSelect");
        subjects.forEach(function(subject) {
            var option = document.createElement("option");
            option.text = subject;
            select.add(option);
        });
    </script>
</body>
</html>
