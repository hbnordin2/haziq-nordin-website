<!DOCTYPE html>
<html lang="en">
<!--[if IE 9]>
<html class="ie9" lang="en">    <![endif]-->
<!--[if IE 8]>
<html class="ie8" lang="en">    <![endif]-->

<head>
    <?php 
            include 'header.php';
            $header = new Header("Tutoring");
            $header->display_content();  
    ?>
</head>

<body class="boxed">
    <?php 
        include 'mainnav.php';
        $mainnav = new MainNav;
        $mainnav->display_content();
    ?>
        <!-- Container -->
        <div class="content-wrap">
            <div id="tutoring" class="inner-content">
                <section id="page-title" class="inner-section">
                    <div class="container-fluid nopadding wow fadeInRight" data-wow-delay="0.4s" data-wow-offset="10">
                        <h2 class="font-accident-two-normal uppercase">tutoring</h2>
                        <h5 class="font-accident-one-bold uppercase subtitle">bachelor of Science (Computer Science) and Mathematics student</h5>
                        <p class="small fontcolor-medium"> I offer private tutoring in MATH1051, MATH1052, CSSE2002, CSSE2010, INFS1200 and MATH1061 </p>
                    </div>
                </section>
                <!-- tutoring Block -->
                <section class="inner-section tutoring tutoring-light">
                    <div class="container-fluid nopadding">
                        <div class="row">
                            <div class="col-md-2">&nbsp;</div>
                            <div class="col-md-8 e-centered wow fadeInDown" data-wow-delay="0.6s" data-wow-offset="10">
                                <div class="dividewhite2"></div>
                                <div id="form-messages"></div>
                                <form id="ajax-contact" method="post" action="assets/custom/php/form.php" class="wpcf7-form">
                                    <div class="field">
                                        <!--<label for="name">Name:</label>-->
                                        <input type="text" id="name" name="name" placeholder="Name" required> </div>
                                    <div class="field">
                                        <!--<label for="email">Email:</label>-->
                                        <input type="email" id="email" name="email" placeholder="Email" required> </div>
                                    <div class="field">
                                        <!--<label for="message">Message:</label>-->
                                        <textarea id="message" name="message" placeholder="Message" rows="7" cols="30" required></textarea>
                                    </div>
                                    <div class="dividewhite2"></div>
                                    <div class="field text-center">
                                        <button type="submit" class="btn btn-lg btn-darker">Send Message</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-2">&nbsp;</div>
                            <div class="col-md-12 divider-dynamic"></div>
                        </div>
                    </div>
                    <div class="dividewhite6"></div>
                </section>
                <!-- /tutoring Block -->
                <!-- Testmonials Block -->
                <section id="testmonials" class="inner-section bg-color02">
                    <div class="container-fluid nopadding">
                        <div class="wow fadeInDown" data-wow-delay="0.4s" data-wow-offset="10">
                            <h3 class="font-accident-two-normal uppercase text-center">Testmonials</h3>
                            <h5 class="font-accident-one-bold uppercase text-center subtitle">Working hard and making the success</h5>
                            <div class="dividewhite1"></div>
                            <p class="small fontcolor-medium text-center"> Customize your website as you want using different colors and 100% free fonts. Build it from pieces and blocks as simple as Lego.
                                <br> Electronic Website Template is fully responsive, looks and works perfect on any device. </p>
                        </div>
                        <div class="dividewhite4"></div>
                        <div class="row">
                            <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.5s" data-wow-offset="10">
                                <div class="row">
                                    <div class="col-xs-3"> <img src="assets/custom/images/userpic04.jpg" alt="Rachel James Johnes" class="img-responsive img-circle author-userpic"> </div>
                                    <div class="col-xs-9">
                                        <h5 class="font-accident-one-bold text-left uppercase">Hans Zimmer</h5>
                                        <p class="small hovercolor">Apple Inc.</p>
                                        <p class="text-left small"> With more devices come varying screen resolutions, definitions and orientations. New devices with new screen sizes are being developed every day, and each of these devices may be able... </p>
                                    </div>
                                </div>
                                <div class="divider-dynamic"></div>
                            </div>
                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s" data-wow-offset="10">
                                <div class="row">
                                    <div class="col-xs-3"> <img src="assets/custom/images/userpic02.jpg" alt="Rachel James Johnes" class="img-responsive img-circle author-userpic"> </div>
                                    <div class="col-xs-9">
                                        <h5 class="font-accident-one-bold text-left uppercase">Mario Quinn</h5>
                                        <p class="small hovercolor">Adobe</p>
                                        <p class="text-left small"> With more devices come varying screen resolutions, definitions and orientations. New devices with new screen sizes are being developed every day, and each of these devices </p>
                                    </div>
                                </div>
                                <div class="divider-dynamic"></div>
                            </div>
                            <div class="col-md-4 wow fadeInRight" data-wow-delay="0.5s" data-wow-offset="10">
                                <div class="row">
                                    <div class="col-xs-3"> <img src="assets/custom/images/userpic03.jpg" alt="Rachel James Johnes" class="img-responsive img-circle author-userpic"> </div>
                                    <div class="col-xs-9">
                                        <h5 class="font-accident-one-bold text-left uppercase">Karl Romm</h5>
                                        <p class="small hovercolor">BMW</p>
                                        <p class="text-left small"> With more devices come varying screen resolutions, definitions and orientations. New devices with new screen sizes are being developed every day, and each of these devices </p>
                                    </div>
                                </div>
                                <div class="divider-dynamic"></div>
                            </div>
                        </div>
                        <div class="dividewhite6"></div>
                    </div>
                </section>
                <!-- /Testmonials Block -->
            </div>
        </div>
        <?php 
        include 'footer.php';
        
        $footer = new Footer;
        $footer->display_content();
    ?>
            <div id="image-cache" class="hidden"></div>
            <!-- JS -->
            <script src="assets/vendor/jquery/js/jquery-2.2.0.min.js" type="text/javascript"></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="assets/vendor/imagesloaded/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
            <script src="assets/vendor/isotope/js/isotope.pkgd.min.js" type="text/javascript"></script>
            <script src="assets/vendor/mfp/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
            <script src="assets/vendor/circle-progress/circle-progress.js" type="text/javascript"></script>
            <script src="assets/vendor/waypoints/waypoints.min.js" type="text/javascript"></script>
            <script src="assets/vendor/anicounter/jquery.counterup.min.js" type="text/javascript"></script>
            <!--<script src="assets/vendor/wow/wow.min.js"                           type="text/javascript"></script>-->
            <script src="assets/vendor/pjax/jquery.pjax.js" type="text/javascript"></script>
            <script src="https://maps.google.com/maps/api/js" type="text/javascript"></script>
            <!-- Custom scripts -->
            <script src="assets/custom/js/custom.js" type="text/javascript"></script>
</body>

</html>