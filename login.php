<?php
session_start();



if (isset($_POST['password'])) {
    $pass = $_POST['password'];
    if ($pass == 'nunchucks') {
        $_SESSION['pass'] = $pass;
        header('location: members.php'); 
    }
    else{
        $error = 'You Entered the Incorrect Password!';
        $_SESSION['error'] = $error;        
        header('location: login.php');
       
        
    }
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


    <section class="login">
    <h1>Welcome to MAABTKD Members Section</h1>
    <br>
    <div class="container">
        <form class="loginForm" method="post" action="login.php" role="form">
            <input type="password" name="password" required autofocus>
            <br>
           <button class= "btn btn-lg" type="submit" name="submit">Hajime</button>
        </form>

    </div>
    <br>
    <h4>Please Log In with the Password</h4>   
    <?php 
        if(isset($_SESSION['error']) && $_SESSION['pass'] != 'nunchucks'){
            $error = $_SESSION['error'];
            echo "<h4>$error</h4>";
        }
    ?>
    </section>

    

    

    <!-- Begin Footer -->

    <footer>
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
    <script src="main.js"></script>
</body>

</html>

