<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form submited</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        html,body{
            height: 100%;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .main-container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 18px;
            
        }
        .container{
            border: 1px solid black;
            background-color:aqua;
            display: flex;
            flex-direction: column;
            justify-content:space-evenly;
            align-items: center;
            border-radius: 12px;
            padding: 25px;
           height: 200px;
           width: 450px;
        }
        .container h2{
            color: green;
        }
    .main-container .back_to_home,
    .main-container .back_to_feedbackform{
        padding: 16px;
        border: none;
        outline: none;
        border-radius: 12px;
        background-color: #294B7A;
        color: white;
        font-size: 16px;
    }
    .main-container .back_to_home:hover,
    .main-container .back_to_feedbackform:hover{
        background: transparent;
        border: 1px solid #294B7A;
        color: black;
        cursor: pointer;
    }
    </style>
</head>
<body>
 <div class="main-container">
 <div class="container">
     <div>
     <h2>Form Submited Successfully!!</h2>
     </div>
    
    </div>
    <div class="back-btn">
        <a href="index.php"><button class="back_to_home">Back To home</button></a>
        <!-- <a href="#"><button class="back_to_feedbackform">Back To Feedback Form</button></a> -->
    </div>
    
 </div>
</body>
</html>