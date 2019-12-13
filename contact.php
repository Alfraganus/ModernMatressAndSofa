<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Modern Mattress and Sofa</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet">

    <!--
CSS
============================================= -->

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>

    <!-- Preloader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <!-- Start header section -->
    <?= include('header.php') ?>
    <!-- Start header section -->

    <!-- Start page-top-banner section -->
    <section  style="margin-top:-20px;background-image:url('images/contactsofa.jpg');background-size:100% 100%" class="page-top-banner section-gap-full relative" data-stellar-background-ratio="0.5">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row section-gap-half">
                <div class="col-lg-12 text-center">
                    <h1 style="color:white">Contact Us</h1>
                    <h4 style="color:white">Leave us your message and we will respond as soon as possible!</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- End about-top-banner section -->

    <!-- Start contact section -->
    <section class="contact-section contact-page-section padding-top-120" id="contact-section">
        <div class="container">
       
            <div class="row address-wrap justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-6 single-address-col">
                    <div class="div">
                    <a href="tel:+1 416-708-8077">
                     <i class="ti ti-mobile"></i>
                        <p style="color: #007bff;"> +1 416-708-8077 </p>
                        </a>
                        <br>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 single-address-col">
                <a target="_blank" href="https://www.google.com/maps/place/Modern+Mattress+and+Sofa/@43.41171,-80.45021,15z/data=!4m5!3m4!1s0x0:0x312253bf26fa1dfe!8m2!3d43.4117099!4d-80.4502096?hl=en">
                    <div class="div">
                    <a href="https://www.google.com/maps/place/Modern+Mattress+and+Sofa/@43.41171,-80.45021,15z/data=!4m5!3m4!1s0x0:0x312253bf26fa1dfe!8m2!3d43.4117099!4d-80.4502096?hl=en">
                    <i class="ti ti-map-alt"></i>
                   <p style="color: #007bff;">  107 Manitou Dr Unit #8,<br> Kitchener, ON N2C 1L4</p>
                    </div>
                    </a>
                </div>


              
                <div class="col-lg-4 col-md-4 col-sm-12 single-address-col">
                    <div class="div">
                    <a href="mailto:info@modernmatressandsofa.com">
                        <i class="ti ti-email"></i>
                        <p>
                        info@modernmatressandsofa.com
                        </a>
                        </p>
                        <br>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-12" style='margin-bottom:20px'>
            <img style='width:100%' src="images/bedroombanner.jpg" alt="">
        </div>

            <div class="row justify-content-center form-row">
                <div class="col-lg-9">

                    <form id="contact-form" action="contactmail.php" method="post">
                        <div class="row contact-form-wrap justify-content-center">

                            <div class="col-md-12 contact-name form-col">
                                <input name="name" id="name" class="form-control" type="text" placeholder="Full name*"
                                    onfocus="this.placeholder='Full name'" onblur="this.placeholder='Full name'">
                            </div>
                            <div class="col-md-6 contact-name form-col">
                                <input name="name" id="phone" class="form-control" type="text" placeholder="Phone number"
                                    onfocus="this.placeholder=''" onblur="this.placeholder='Phone number'">
                            </div>

                            <div class="col-md-6 contact-email form-col">
                                <input name="mail" id="mail" class="form-control" type="email" placeholder="Email*"
                                    onfocus="this.placeholder=''" onblur="this.placeholder='Email*'">
                            </div>
                           
                            <div class="col-lg-12">
                                <textarea name="comment" id="comment" class="form-control" rows="8" placeholder="Message"
                                    onfocus="this.placeholder=''" onblur="this.placeholder='Message*'"></textarea>
                            </div>
                            <input name="submit" type="submit" class="primary-btn" value="Send Message">
                            <div id="msg" class="message"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact section -->

    <!-- Start footer section -->
    <?= include('footer.php') ?>
    <!-- End footer section -->

    <div class="scroll-top">
        <i class="ti-angle-up"></i>
    </div>

    <!--
JS
============================================= -->
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.parallax-scroll.js"></script>
    <script src="js/dopeNav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>