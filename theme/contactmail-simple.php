<?php

$name = $_POST['name'];
$email = $_POST['email'];
//Avoid Email Injection and Mail Form Script Hijacking
if ( preg_match( "/[\r\n]/", $name ) || preg_match( "/[\r\n]/", $email ) ){
    die("Header injection detected!");
} else {
    //Put your email address here
    $youremail = 'info@sicpsicologia.com';
    
    //Prepare a "pretty" version of the message
    //Important: if you added any form fields to the HTML, you will need to add them here also
    $body = "This is the form that was just submitted:
    --------------------------------------------------
    Name:  $_POST[name]
    E-Mail: $_POST[email]
    Phone: $_POST[phone]
    Message: $_POST[message]";

    $subject = $_POST['subject'];

    //Set the headers
    $headers = 'From: ' . $youremail . "\r\n" . //Your email. If the email does not appear in your inbox, check your spam folder and mark this email as non spam.
    'Reply-To: ' . $email . "\r\n" . //The value of email input
    'X-Mailer: PHP/' . phpversion();

    //Finally, send the message
    mail($youremail, $subject, $body, $headers);
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <title>SIC | Psicología - Contacto</title>

        <!-- CSS
        ===============================================================-->
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Icons -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <!-- Flex Slider -->
        <link rel="stylesheet" href="assets/css/flexslider.css">
        <!-- Template CSS -->
        <link href="assets/css/main.css" id="theme" rel="stylesheet">
        <!-- Animation -->
        <link href="assets/css/animate.min.css" rel="stylesheet">
        <!-- Slick Carousel -->
        <link href="assets/css/slick.css" rel="stylesheet">
        <!-- Select Style -->
        <link href="assets/css/bootstrap-select.min.css" rel="stylesheet">

        <!-- JAVASCRIPT
        ===============================================================-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- PRELOADER
        ===============================================================-->
        <div id="preloader">
            <div class="cssload-container">
                <div class="cssload-double-torus"></div>
            </div>
        </div>

        <!-- NAVBAR
        ===============================================================-->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Inicio</a></li>
                        <li>
                            <a href="nosotros.html">Nosotros</a></li> 
                        </li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios<i class="fa fa-angle-down small"></i></a>
                             <ul class="dropdown-menu" role="menu">
                                <li><a href="laboral.html">Psicología Laboral</a></li>
                                <li><a href="clinico.html">Evaluaciones Psicológicas Clínicas</a></li>
                            </ul>
                        </li>               
                        
                       
                    
                        <li class="active">
                            <a href="contacto.html">Contacto</a>
                           
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- BREADCRUMB
        ===============================================================-->
        <div class="breadcrumb-container">
            <div class="container text-right">
                <ol class="breadcrumb">
                    <!--<li><a href="index.html">Inicio</a></li>
                    <li class="active">Contacto <i class="fa fa-arrow-down ml5"></i></li>-->
                </ol>
            </div>
        </div>

        <!-- CONTACT
        ===============================================================-->
        <section class="bg-white">
            <div class="container">
                <div class="row wow fadeIn">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Contáctanos</h2>
                        </div>
                    </div>
                    <!-- CONTACT INFO -->
                    <div class="col-sm-12 col-md-5 cinfo">
                        <div id="map-canvas"></div>
                        <address>
                            <p><i class="fa fa-map-marker"></i>Loma Panorámica #301-2 | Col. Loma Larga Los Magueyes | Monterrey, N.L. | C.P. 64710 |</p>
                            <p><i class="fa fa-phone"></i>8342-6412 / 8342-6514</p>
                            <p><i class="fa fa-envelope"></i>sic_psicologia@att.net.mx </p>
                        
                        </address>
                        <div class="visible-xs-block visible-sm-block pt20"></div>
                    </div><!-- /Contact Info -->
                    <!-- CONTACT FORM -->
                    <div class="col-sm-12 col-md-7">
                        <h4 class="text-success">Validación completa.</h4>
                        <p>Su mensaje se ha enviado correctamente.</p>
                    </div><!-- /Contact Form -->
                </div><!-- /row -->
            </div><!-- /container -->
        </section><!-- /section -->

        <!-- FOOTER
        ===============================================================-->
            <footer>
            
           <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 social">
                            <ul class="list-inline social">
                                <li>
                                    <a href="https://www.facebook.com/SicPsicologia/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/27029345/" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 credits">
                            <p>&copy; SIC Psicología 2017. Todos los derechos reservados.</p>
                            <p class="small">
                                <i class="fa fa-angle-right"></i> 
                                Diseño por: <a href="http://vanuva.com" target="_blank">Vanuva - Design Agency</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--back to top-->
            <a href="#" class="scrollToTop" id="scrollToTop"><i class="fa fa-angle-up"></i></a>
        </footer>

        <!-- JAVASCRIPT
        ===============================================================-->
        <!-- JQuery -->
        <script src="assets/js/jquery-1.12.4.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Vanillabox -->
        <script src="assets/js/jquery.vanillabox-0.1.7.min.js"></script>
        <!-- Slick Carousel -->
        <script src="assets/js/slick.min.js"></script>
        <!-- Select Style -->
        <script src="assets/js/bootstrap-select.min.js"></script>
        <!-- Contact Form -->
        <script src="assets/js/form-validation.js"></script>
        <!-- Google Maps -->
        <!-- Get your API here https://developers.google.com/maps/documentation/javascript/?hl=es -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
        <!-- Flexslider -->
        <script src="assets/js/jquery.flexslider-min.js"></script>
        <!-- Placeholder for IE9 -->
        <script src="assets/js/jquery.placeholder.min.js"></script>
        <!-- Parallax -->
        <script src="assets/js/jquery.stellar.min.js"></script>
        <!-- Animation -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Main -->
        <script src="assets/js/main.js"></script>
    </body>
</html>