<?php


$hostname="localhost";
$username="root";
$password="";
$db="CodeBySL";

$con = new mysqli($hostname,$username,$password,$db);

/*if($con->connect_error){
    echo "failed";
 }
else
{
    echo "successfull";
}*/


if(isset($_POST['remove'])){

//take values from html page
                                       
$em=$_POST['email1'];
$np=$_POST['pass'];
$rs=$_POST['reason'];


//database connection aborted
    
$sql = "SELECT * FROM Student WHERE email = '$em' " ;
    
$result = $con->query($sql);

$col = $result-> fetch_assoc();

$pass = $col['st_pw'];

if($pass == $np)
    {
                                 
    $sql = "INSERT INTO Left_Students (email1,reason) VALUE  ('$em','$rs')";

    $sql = "DELETE FROM Student WHERE email='$em'";

    echo '<script>window.alert("Deactivated Successfully! Good Bye" )</script>';
    header("location:index.php");

    }   
    else 
    {
        echo '<script>window.alert("Please enter correct user name or Password!" )</script>';
    }

} 
?>



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
                        <a href="student_login_all.php" class="nav-item nav-link">Sign in</a>
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
        </div>
        <!-- Hero End -->

        <!--Log in Start-->
 
        <div class="sign wow fadeInUp" data-wow-delay="0.1s" id="sign">
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <div class="contact-form">
                                <div id="success"></div>

                                <form name="sentMessage" id="contactForm"  method="post" action="#">
                                    <h2>Code By SL</h2>
                                    
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email1" name="email1" placeholder="Email"  required="required"  />
                                        <p class="help-block"></p>
                                    </div>
                                    
                                    <div class="control-group">
                                        <input type="Password" class="form-control" id="pass" name="pass"  placeholder="Password"  required="required"  />
                                        <p class="help-block"></p>
                                    </div>

                                    <div class="control-group">
                                        <input type="text" class="form-control" id="reason" name="reason"  placeholder="Enter your reason or Feed back" required="required" />
                                        <p class="help-block"></p>
                                    </div>

                                     <div>
                                        <button style="float:right" class="btn" type="submit" id="remove" name="remove" >Deactivate</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Log in End-->

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
        
        <!-- JavaScript Libraries -->
        
        

     </body>
</html>

