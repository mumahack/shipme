<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ShipmeUP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
    <link href="favicon.ico" rel="shortcut icon">

    <!-- Google Fonts -->
    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate-css/animate.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/_inputdata.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">



    <!-- =======================================================
      Theme Name: Imperial
      Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
<div id="preloader"></div>

<!--==========================
  Hero Section
============================-->
<section id="hero">


    <div class="hero-container">
        <div class="wow fadeIn">

            <figure id="container" title="spin the truck"></figure>

            <script src="js/d3.v3.min.js"></script>
            <script src="js/transmit_js_3dtruck.min.js"></script>




            @yield('content')


        </div>
    </div>
</section>

<!--==========================
  Header Section
============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">

            <a href="#hero"><img src="img/ShipMeUP_Schriftzug.png" alt="" title="" /></a>
            <a href="#hero"><img src="img/ShipMeUP_Logo.png" alt="" title="" /></a>
            <!-- Uncomment below if you prefer to use a text image -->
            <!--<h1><a href="#hero">Header 1</a></h1>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#hero">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  About Section
============================-->
<section id="about">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">About Us</h3>
                <div class="section-title-divider"></div>
                <p class="section-description">Ship me up!</p>
            </div>
        </div>
    </div>
    <div class="container about-container wow fadeInUp">
        <div class="row">
            <div class="col-md-6 col-md-push-6 about-content">
                <h2 class="about-title">We provide great services and ideas</h2>
                <p class="about-text">
                   </p>
                <p class="about-text">
                    </p>
                <p class="about-text">
                    </p>
            </div>
        </div>
    </div>
</section>
<!--==========================
  Contact Section
============================-->
<section id="contact">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Contact Us</h3>
                <div class="section-title-divider"></div>
                <p class="section-description">Because you want to </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-md-push-2">
                <div class="info">
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p>Munich Maker Lab <br> Munich </p>
                    </div>

                    <div>
                        <i class="fa fa-envelope"></i>
                        <p>info@shipMeUp.com</p>
                    </div>

                    <div>
                        <i class="fa fa-phone"></i>
                        <p>+42 42 42 42</p>
                    </div>

                </div>
            </div>

            <div class="col-md-5 col-md-push-2">
                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    &copy; Copyright <strong>MumaLab</strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!--
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
                    -->
                    Bootstrap Themes by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Required JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/morphext/morphext.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/stickyjs/sticky.js"></script>
<script src="lib/easing/easing.js"></script>

<!-- Template Specisifc Custom Javascript File -->
<script src="js/custom.js"></script>




</body>
</html>