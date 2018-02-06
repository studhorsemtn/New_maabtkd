
<?php
session_start();



if (isset($_SESSION['pass'])) {   
    
        header('location: members.php'); 
    }
    else{

        header('location: login.php');      
        
    }
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="icon" href="Images/MAABfavicon.ico" type="image/gif" sizes="16x16">

    

</head>

<body>


    

    <!-- =======  Navbar  ======= -->

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- toggle Button [opens navbar links on mobile devices] -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tjdropdown" aria-expanded="false">
                    <i class="fa fa-bars fa-lg" aria-hidden="true" id="collapse"></i>
                </button>
                <a href="index.html" class="navbar-brand center-block">
                    <img class="img-responsive center-block" src="Images/lightLogo.png" alt="Martial Arts Academy of Billings">
                </a>
            </div>

            <!-- Navbar Collapse [conatins components of the navbar such as navbar menu and forms] -->
            <div class="collapse navbar-collapse" id="tjdropdown">
                <!-- Navbar Menu -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="instructors.html">Instructors</a>
                    </li>
                    <li>
                        <a href="tkd.html">Taekwondo/Judo</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Videos
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="TKDForms.php">TKD Forms</a>
                            </li>
                            <li>
                                <a href="JudoThrows.php">Judo Throws</a>
                            </li>
                        </ul>

                        <li>
                            <a href="schedule.html">Schedule &nbsp;&#38;&nbsp;Fees</a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/Martial-Arts-Academy-of-Billings-123484254472217/" target="_blank">
                                <i class="fa fa-facebook-square fa-lg facebook"></i>
                                <small>&nbsp;See us on Facebook&#33;</small>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="tel:+1-406-591-9000">
                                        <i class="fa fa-mobile fa-lg" id="phone"></i>&nbsp; Call Us to find out more&#33;</a>
                                </li>
                                <li>
                                    <a href="https://goo.gl/maps/9FNh8wJVV572" target="_blank">
                                        <i class="fa fa-map-marker fa-lg" id="directions"></i>&nbsp;Come Join Us&#33;</a>
                                </li>
                                <li>
                                    <a href="mailto:maabtkd@gmail.com" target="_blank">
                                        <i class="fa fa-envelope fa-lg" id="email"></i>&nbsp;Email</a>
                                </li>
                            </ul>
                            <!-- End Dropdown Menu -->
                        </li>
                        <!-- End Dropdown -->
                </ul>
                <!-- End Navbar Menu -->
            </div>
            <!-- End Navbar Collapse -->
        </div>
        <!-- End Container-Fluid -->
    </nav>
    <!--=======> End Navbar <=======-->


    <section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <a href="#">Basic Form 1 |</a>
                <a href="#">Basic Form 2 |</a>
                <a href="#">Basic Form 3 |</a>
                <a href="#">Basic Form 4 |</a>
            </div>        
        </div>
        <div class="row">
            <div class="col-xs-12 text-center ">
                <a href="#">Palgwe 1 |</a>
                <a href="#">Palgwe 2 |</a>
                <a href="#">Palgwe 3 |</a>
                <a href="#">Palgwe 4 |</a>
                <a href="#">Palgwe 5 |</a>
                <a href="#">Palgwe 6 |</a>
                <a href="#">Palgwe 7 |</a>
                <a href="#">Palgwe 8 |</a>
            </div>
        </div>
    </div>
    
        
        
        <a href="#">Koryo</a>
        <a href="#">Chun Ji</a>
        <a href="#">Tangun</a>
        <a href="#">Tosan</a>
        <a href="#">Won Hyo</a>
        <a href="#">Yul Gak</a>
        <a href="#">Chun Gun</a>
        <a href="#">Tae Bek</a>
        <a href="#">Hwarang</a>
        <a href="#">Tae Guk 1</a>
        <a href="#">Tae Guk 2</a>
        <a href="#">Tae Guk 3</a>
        <a href="#">Tae Guk 4</a>
        <a href="#">Tae Guk 5</a>
        <a href="#">Tae Guk 6</a>
        <a href="#">Tae Guk 7</a>
        <a href="#">Tae Guk 8</a>
    

   </section>
   <!-- Begin6Footer -->
   <footer
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <img class="img-responsive center-block" src="Images/lightLogo.png" alt="Martial Arts Academy of Billings">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-4 text-center">
                    <i class="fa fa-mobile fa-2x "></i>
                    <h4>Call Us Now!</h4>
                    <h4>(406) 591-9000</h4>
                    <a href="tel:+1-406-591-9000">
                        <i class="fa fa-mobile fa-2x" id="phone"></i>&nbsp; Call Us to find out more&#33;</a>
                    <p>We will be happy to answer any questions.</p>
                </div>
                <div class="col-xs-12 col-md-4 text-center">
                    <i class="fa fa-map-marker fa-2x" id="directions"></i>
                    <h4>Come Join Us!</h4>
                    <h4>
                        <a href="https://goo.gl/maps/9FNh8wJVV572" target="_blank">
                            <i class="fa fa-map-marker fa-lg" id="directions"></i>&nbsp;Directions</a>
                    </h4>

                </div>
                <div class="col-xs-12 col-md-4 text-center">
                    <i class="fa fa-facebook-official fa-2x facebook"></i>
                    <a href="https://www.facebook.com/Martial-Arts-Academy-of-Billings-123484254472217/" target="_blank">
                        <h4>See Us on Facebook!</h4>
                    </a>
                </div>
            </div>
            <hr>
        </div>

    </footer>

    <!-- End Footer -->





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>

</html>