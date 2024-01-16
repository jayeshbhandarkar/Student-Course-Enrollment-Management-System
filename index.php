<?php
$cn = mysqli_connect("localhost", "root", "", "db_admission");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="style.css">

    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <title>Student Enrollment Management</title>
</head>

<body>
    <!-- Header-area -->
    <div class="header-area header-absoulate">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <a href="">
                            <i class="fa fa-home"></i>
                            <span>SVKM <span id="na">Classes</span></span>
                        </a>
                    </div>
                </div>
    <!-- Main menu-area -->
                <div class="col-md-7">
                    <div class="main-menu">
                        <?php include('component/menu.php'); ?>
                    </div>
                </div>
                <!--<div class="col-md-1 text-right">
                    <span class="social-icon">
                        <a href=""><i class="fa fa-map-marker"></i></a>
                    </span>
                </div>-->
            </div>
        </div>
    </div>
    <!-- Slide-area -->
    <div class="welcome-area">
        <div class="owl-carousel slider-content">
            <div class="single-slider-item slider-bg-1">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide-text">
                                    <h2>Pursuing Excellence</h2>
                                    <p>Education is the most powerful weapon<br>
                                        which you can use to change the world.
                                    </p>

                                    <a href="" class="boxed-btn">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content-area -->
    <div class="content-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <?php include ('component/controller.php'); ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer-area -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget">
                        <div class="logo">
                            <a href="">
                                <i class="fa fa-home"></i>
                                <span>SVKM Classes</span>
                            </a>
                            <p> Education is the most powerful weapon <br>
                                which you can use to change the world.
                            </p>

                            <p><b> Address : </b> Dhule - 424001</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget">
                        <h3>About Us</h3>
                        <div class="footer-menu">
                            <!--<ul>
                                <li><a href="#">home</a></li>
                                <li><a href="?a=student_add">admission</a></li>
                                <li><a href="?a=view">students</a></li>
                                <li><a href="#">contact us</a></li>
                            </ul>-->
                            <p> Education is the most powerful weapon <br>
                                which you can use to change the world.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Contact Us</h3>
                    <span class="social-icon">
                        <p> +91 9595959595 </p>
                        <p> +91 8989898989 </p>
                        <a href=""><i class="fa fa-whatsapp"></i></a>
                        <a href=""><i class="fa fa-phone"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                    </span>
                </div>
                
                <p class="copy-right">SVKM Classes, Dhule</p>
            </div>
        </div>
    </footer>

    <script src="assets/js/popper-1.12.9.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>