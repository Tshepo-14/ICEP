<?php
require_once "connection.php";



   $student_number=$_POST['student_id'];
   $destination=$_POST['listPl'];
   $time=$_POST['list'];
   
   //echo $student_number;
   //echo $destination;
   //echo $time;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container-fluid"><a class="navbar-brand" href="#"><strong>Destination</strong></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="untitled.html">Destination</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    
            <section class="highlight-blue">
                <div class="container">
                    <div class="intro">
                        <h2 class="text-center">Student Number</h2>
                    </div>
                    <div class="buttons">
                        <!--enter student number in this text box-->
                        <input type="text" placeholder=<?php echo $student_number; ?> disabled>
                    </div>
                </div>
                <div class="container">
                    <div class="intro">
                        <h2 class="text-center">Destination</h2>
                    </div>
                    <div class="buttons">
                        <!-- Show destination here-->
                        <input type="text" placeholder=<?php echo $destination; ?> disabled>
                    </div>
                </div>
                <div class="container">
                    <div class="intro">
                        <h2 class="text-center">Time of departure</h2>
                    </div>
                    <div class="buttons">
                         <!--view time here-->
                         <input type="text" placeholder=<?php echo $time;?> disabled>
                    </div>
                </div>
            </section>
            <section class="highlight-blue">
                <div class="container">
                    <div class="intro"></div>
                    <div class="buttons">
                        <input type="Submit" href="untitled-2.html" class="btn btn-primary" value="Edit">
                    </div>
                </div>
            </section>
        

        
    <footer></footer>
    <footer class="footer-basic">
        <div class="social"><a href="https://www.linkedin.com/mwlite/in/tshepo-molaoa-3a2627170"><i class="icon ion-social-linkedin-outline"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html">Home</a></li>
            <li class="list-inline-item"></li>
        </ul>
        <p class="copyright">Industrious web development © 2022</p>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>