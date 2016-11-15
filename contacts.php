<!DOCTYPE html>
<html lang="en">
<!--[if IE 9]>
<html class="ie9" lang="en">    <![endif]-->
<!--[if IE 8]>
<html class="ie8" lang="en">    <![endif]-->

<head>
    <?php 
            include 'header.php';
            $header = new Header("Contact");
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
            <div id="contacts" class="inner-content">
                <section id="page-title" class="inner-section">
                    <div class="container-fluid nopadding wow fadeInRight" data-wow-delay="0.4s" data-wow-offset="10">
                        <h2 class="font-accident-two-normal uppercase">Contacts</h2>
                        <h5 class="font-accident-one-bold uppercase subtitle">bachelor of Science (Computer Science) and Mathematics student</h5>
                        <p class="small fontcolor-medium"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id metus purus. Ut vulputate, est vel tincidunt mattis, orci neque iaculis lectus, et interdum quam felis vel tortor. Fusce ultrices dui quis nunc dignissim faucibus. Ut ac odio quis nibh viverra fringilla ac id nisi. Suspendisse tincidunt augue quis ligula cursus, non efficitur ligula faucibus. Mauris id neque maximus, tincidunt metus et, sodales nulla. </p>
                    </div>
                    <div class="dividewhite4"></div>
                </section>
                <section id="contacts-data" class="inner-block">
                    <div class="container-fluid nopadding">
                        <div class="row">
                            <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s" data-wow-offset="10">
                                <div class="row">
                                    <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Address:</span></div>
                                    <div class="col-sm-10">
                                        <p class="small">12234 Direct Drive, Daytona Beach, Fl USA</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Phone:</span></div>
                                    <div class="col-sm-10">
                                        <p class="small">1 234 567-64-35</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Skype:</span></div>
                                    <div class="col-sm-10">
                                        <p class="small">@samanderson</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s" data-wow-offset="10">
                                <div class="row">
                                    <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Twitter:</span></div>
                                    <div class="col-sm-10">
                                        <p class="small"><a href="#!">https://twitter.com/samanderson</a></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Facbook:</span></div>
                                    <div class="col-sm-10">
                                        <p class="small"><a href="#!">https://www.facebook.com/samanderson</a></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Linkedin:</span></div>
                                    <div class="col-sm-10">
                                        <p class="small"><a href="#!">https://www.linkedin.com/samanderson</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Google Map Block -->
                <section id="contacts-map" class="inner-section">
                    <div class="container-fluid nopadding">
                        <!-- Google Map -->
                        <div class="wow fadeInDown" data-wow-delay="0.8s" data-wow-offset="10">
                            <div id="gm-panel">
                                <div id="google-map" class="bigmap"></div>
                            </div>
                        </div>
                        <!-- /Google Map -->
                    </div>
                    <div class="dividewhite8"></div>
                </section>
                <!-- /Google Map Block -->
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