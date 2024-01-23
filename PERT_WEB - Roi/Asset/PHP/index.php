<?php

    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['message'])
    {
        $message=$_SESSION['message'];

        echo "<script type='text/javascript'>
        
        alert('$message');
        
        </script>";
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School System</title>
    <link rel="stylesheet" href="../CSS/style.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body class="indexb">
    <nav>
        <label class="logo"> <img src="../Image/logo ni PERT .png" alt="logo" class="PERT">P.E.R.T - UNIVERSITY</label>
        <ul>
            <li><a href="../PHP/index.php">Home</a></li>
            <li><a href="../PHP/Admission.php">Contact</a></li>
            <li><a href="../PHP/Login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>

    <div class="section">
        <label class="img_text">Extraordinary learning</label>
        <img class="main_img" src="../Image/school.jpg" alt="School">
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <img class="room_img" src="../Image/Chairs.jpg" alt="Chairs">
            </div>

            <div class="col-md-8">
                <h1>Welcome to P.E.R.T - UNIVERSITY</h1>

                <p>we are committed to providing a high-quality education that empowers our students to achieve their full potential. 
                    Our experienced and passionate teachers create a nurturing and supportive learning environment that fosters academic excellence, 
                    critical thinking, and a love for lifelong learning. With a wide range of extracurricular activities, state-of-the-art facilities, 
                    and a strong focus on character development, we strive to prepare our students for success in all aspects of life. 
                    Join us on this exciting journey of learning and growth!</p>
            </div>
            
            <h1 class="Text">Our Teachers</h1>
        

            <div class="container">
                
                <div class="row">

                    <div class="col-md-4">
                        <img class="teacher" src="../Image/tanchico.png" alt="Tanchico">
                        
                        <p>Teachers are the backbone of society, shaping the minds and futures of countless students.</p>
                    </div>

                    <div class="col-md-4">
                        <img class="teacher" src="../Image/bradley.png" alt="Bradely">

                        <p>They dedicate their lives to imparting knowledge, instilling values, and guiding their pupils towards academic and personal success.</p>
                    </div>

                    <div class="col-md-4">
                        <img class="teacher" src="../Image/jb.png" alt="Pogi">

                        <p>Their tireless efforts go beyond the classroom, as they often serve as mentors, confidantes, and role models.</p>
                    </div>

                    <div class="col-md-4">
                        <img class="teacher" src="../Image/porras.png" alt="Porras">

                        <p>Teachers are the unsung heroes who inspire and motivate their students to become responsible, compassionate, and contributing members of society.</p>
                    </div>
                    
                </div>
            </div>

            <h1 class="Text">Our Courses</h1>
        

            <div class="container">
                
                <div class="row">

                    <div class="col-md-4">
                        <img class="courses" src="../Image/webdes.png" alt="Web Development">
                        
                        <h1>Web Development</h1>
                    </div>

                    <div class="col-md-4">
                        <img class="courses" src="../Image/digiart.png" alt="Digital art">

                        <h2>Digital Artist</h2>
                    </div>

                    <div class="col-md-4">
                        <img class="courses" src="../Image/marketing.png" alt="Marketing">

                        <h2>Marketing</h2>
                    </div>
                    
                </div>

            </div>

            
            <footer>
                <h5 class="footer_text">&#9400; 2024 PERT UNIVERSITY. All rights reserved</h5>
            </footer>
            <br><br><br><br><br>

</body>
</html>