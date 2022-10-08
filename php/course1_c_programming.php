<?php
if(isset($_POST['logout'])){
session_start();
unset($_SESSION["email"]);
unset($_SESSION["pass"]);
header("Location:student_login_all.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Code By SL - E Learning Software By Sri Lanka</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
       

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">


        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    
    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">Code By SL</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="course.php" class="nav-item nav-link">Course</a>
                        <a name="logout" id="logout" href="student_login_all.php" class="nav-item nav-link">Log out</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Hero Start -->
        <div class="hero" id="home">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-content">
                            <div class="hero-text">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        
                    </div>
                </div>
            </div>
        
        <!-- Hero End -->

        <!-- Course Start -->
        <div class="banner wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <p>Improve Knowledge with Code by SL</p>
                    <h2>C <span>Programming</span> Language</h2>
                </div>
                <div class="container banner-text">
                    <p>
                    C is a procedural programming language. It was initially developed by Dennis Ritchie in the year 1972.
						It was mainly developed as a system programming language to write an operating system. The main features
						of the C language include low-level memory access, a simple set of keywords, and a clean style, these 
						features make C language suitable for system programmings like an operating system or compiler 
						development. <br>
                        Many later languages have borrowed syntax/features directly or indirectly from the C language. 
						Like syntax of Java, PHP, JavaScript, and many other languages are mainly based on the C language.
						C++ is nearly a superset of C language (Few programs may compile in C, but not in C++).
                    </p>
                    <a class="btn">Done</a>
                </div>
            </div>
        </div>
        <!-- Course End -->

        <!-- Footer Start -->
        <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <h2>Code By SL</h2>
                        <h3>81000, Matara, Sri Lanka</h3>
                        <div class="footer-menu">
                            <p>0718708814/0705723039</p>
                            <p>codebysl@gmail.com</p>
                        </div>
                        <div class="footer-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <p>&copy; <a href="#">www.codebysl.com</a>, All Right Reserved | Designed By <a href="https://codebysl.com">Code By Sri Lanka</a></p>
                </div>
            </div>
        </div>
        <!-- Footer End -->
</div>  
     
    </body>
</html>

