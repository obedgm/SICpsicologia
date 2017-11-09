<?php

$name = $_POST['name'];
$email = $_POST['email'];
//Avoid Email Injection and Mail Form Script Hijacking
if ( preg_match( "/[\r\n]/", $name ) || preg_match( "/[\r\n]/", $email ) ){
    die("Header injection detected!");
} else {
    //Load the value of departament select in a variable
    $youremail = $_POST['departament'];
    //Choose a recipient according to set value of "departament"
    switch ($youremail) {
        case 'to1':
            $youremail = 'youremail_1@domain.com';
            break;
        case 'to2':
            $youremail = 'youremail_2@domain.com';
            break;
        case 'to3':
            $youremail = 'youremail_3@domain.com';
            break;
        case 'to4':
            $youremail = 'youremail_4@domain.com';
            break;
        case 'to5':
            $youremail = 'youremail_5@domain.com';
            break;
        case 'to6':
            $youremail = 'youremail_6@domain.com';
            break;
        //and more if you need...
    }
    
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
<html dir="rtl" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <title>CORPBOOT | Bootstrap Business Template - Contact</title>

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
                        <li><a href="index.html">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <i class="fa fa-angle-down small"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="about.html">About Us 1</a></li>
                                <li><a href="about-2.html">About Us 2</a></li>
                            </ul>
                        </li>
                        <li><a href="services.html">Services</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <i class="fa fa-angle-down small"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="portfolio.html">Default</a></li>
                                <li><a href="portfolio-images.html">Images Lightbox</a></li>
                                <li><a href="portfolio-iframes.html">Iframes Lightbox</a></li>
                            </ul>
                        </li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <i class="fa fa-angle-down small"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="blog.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-left.html">Blog Right Sidebar</a></li>
                                <li><a href="blogpost.html">Single Left Sidebar</a></li>
                                <li><a href="blogpost-left.html">Single Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="elements.html">Elements</a></li>
                        <li class="active dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact <i class="fa fa-angle-down small"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="contact.html">Contact Option 1</a></li>
                                <li><a href="contact-simple.html">Contact Option 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- BREADCRUMB
        ===============================================================-->
        <div class="breadcrumb-container">
            <div class="container text-left">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact<i class="fa fa-arrow-down mr5"></i></li>
                </ol>
            </div>
        </div>

        <!-- CONTACT
        ===============================================================-->
        <section class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-r">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                    <!-- CONTACT INFO -->
                    <div class="col-sm-12 col-md-5 cinfo">
                        <div id="map-canvas"></div>
                        <address>
                            <p><i class="fa fa-map-marker"></i>8578 NW 70th Street, 33166, Miami - Florida, USA</p>
                            <p><i class="fa fa-phone"></i>(+385) 593 6888</p>
                            <p><i class="fa fa-envelope"></i>support@templatespremium.net</p>
                            <p><i class="fa fa-skype"></i>corpboot</p>
                        </address>
                        <div class="visible-xs-block visible-sm-block pt20"></div>
                    </div><!-- /Contact Info -->
                    <!-- CONTACT FORM -->
                    <div class="col-sm-12 col-md-7">
                        <h4 class="text-success">Successful validation</h4>
                        <p>Your email has been sent successfully.</p>
                    </div><!-- /Contact Form -->
                </div><!-- /row -->
            </div><!-- /container -->
        </section><!-- /section -->

        <!-- FOOTER
        ===============================================================-->
        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="footer-widget col-sm-12 col-md-4">
                            <h3>About us</h3>
                            <p><a href="about.html">Corpboot</a>, is tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters.</p>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i> 8578 NW 70th Street, 33166, Miami - Florida, USA</li>
                                <li class="number"><i class="fa fa-phone"></i> (+385) 593 6888</li>
                                <li><i class="fa fa-envelope"></i> support@templatespremium.net</li>
                                <li><i class="fa fa-skype"></i> corpboot</li>
                            </ul>
                            <div class="visible-xs-block visible-sm-block pt20"></div>
                        </div>
                        <div class="footer-widget col-sm-6 col-md-4">
                            <h3>Photo Gallery</h3>
                            <a href="http://placehold.it/900x600/BDC3C7/ffffff" class="gallery" title="Photo Gallery 1">
                                <img src="http://placehold.it/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                            </a>
                            <a href="http://placehold.it/900x600/BDC3C7/ffffff" class="gallery" title="Photo Gallery 2">
                                <img src="http://placehold.it/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                            </a>
                            <a href="http://placehold.it/900x600/BDC3C7/ffffff" class="gallery" title="Photo Gallery 3">
                                <img src="http://placehold.it/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                            </a>
                            <a href="http://placehold.it/900x600/BDC3C7/ffffff" class="gallery" title="Photo Gallery 4">
                                <img src="http://placehold.it/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                            </a>
                            <a href="http://placehold.it/900x600/BDC3C7/ffffff" class="gallery" title="Photo Gallery 5">
                                <img src="http://placehold.it/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                            </a>
                            <a href="http://placehold.it/900x600/BDC3C7/ffffff" class="gallery" title="Photo Gallery 6">
                                <img src="http://placehold.it/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                            </a>
                            <a href="http://placehold.it/900x600/BDC3C7/ffffff" class="gallery" title="Photo Gallery 7">
                                <img src="http://placehold.it/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                            </a>
                            <a href="http://placehold.it/900x600/BDC3C7/ffffff" class="gallery" title="Photo Gallery 8">
                                <img src="http://placehold.it/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                            </a>
                            <a href="http://placehold.it/900x600/BDC3C7/ffffff" class="gallery" title="Photo Gallery 9">
                                <img src="http://placehold.it/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                            </a>
                            <a href="http://placehold.it/900x600/BDC3C7/ffffff" class="gallery" title="Photo Gallery 10">
                                <img src="http://placehold.it/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                            </a>
                            <a href="http://placehold.it/900x600/BDC3C7/ffffff" class="gallery" title="Photo Gallery 11">
                                <img src="http://placehold.it/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                            </a>
                            <a href="http://placehold.it/900x600/BDC3C7/ffffff" class="gallery" title="Photo Gallery 12">
                                <img src="http://placehold.it/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                            </a>
                            <div class="visible-xs-block visible-sm-block pt20"></div>
                        </div>
                        <div class="footer-widget col-sm-6 col-md-4">
                            <h3>Newsletter Registration</h3>
                            <p>Subscribe today to receive the latest <strong>Corpboot</strong> news via email. You may unsubscribe from this service at any time.</p>
                            <!-- Newsletter Form-->
                            <form method="get">
                                <div class="input-group newsletter">
                                    <label class="sr-only" for="subscribe-email">Enter your email...</label>
                                    <input type="email" class="form-control" id="subscribe-email" placeholder="Enter your email...">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn"><i class="fa fa-paper-plane-o"></i></button>
                                    </span>
                                </div>
                            </form>
                            <p class="newsletter-desc"><strong>No spam:</strong> consectetur adipisicing elit lorem ipsum.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 social">
                            <ul class="list-inline social">
                                <li>
                                    <a href="" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" target="_blank">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 credits">
                            <p>&copy; CORPBOOT 2016. All Rights Reserved.</p>
                            <p class="small">
                                <i class="fa fa-angle-right"></i> 
                                Developed by: <a href="#" target="_blank">Your Company</a>
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