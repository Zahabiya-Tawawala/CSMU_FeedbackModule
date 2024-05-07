
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/nav.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
    <title>toggle navbar</title>
 
   
  </head>
  <body>
    <header>
     
      <input type="checkbox" id="nav_check" hidden />
      <nav>
        <ul>
          <!-- <li>
            <a href="" class="active">Home</a>
          </li> -->
          <li>
            <a href="./index.php"class="active">Back to Home</a>
          </li>
          <li>
            <a href="./feedbackform.php">Student Feedback Form</a>
          </li>
          <li>
            <a href="./facultyfeedback.php">Teacher Feedback</a>
          </li>
          <li>
            <a href="./alumnifeedback.php">Alumni Feedback</a>
          </li>
          <li>
            <a href="./parentfeedback.php">Parents Feedback</a>
          </li>
          <li>
            <a href="./employerFeedback.php">Employee Feedback</a>
          </li>
          <li>
            <a href="./professionalfeedback.php"> Professional Feedback</a>
          </li>
        </ul>
      </nav>
      <label for="nav_check" class="hamburger">
        <div></div>
        <div></div>
        <div></div>
      </label>
    </header>
  </body>
</html>
