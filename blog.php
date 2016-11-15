<!DOCTYPE html>
<html lang="en">
<!--[if IE 9]>
<html class="ie9" lang="en">    <![endif]-->
<!--[if IE 8]>
<html class="ie8" lang="en">    <![endif]-->

<head>
    <?php 
            include 'header.php';
            $header = new Header("Blog");
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
            <div id="blog" class="inner-content">
                <section id="page-title" class="inner-section">
                    <div class="container-fluid nopadding wow fadeInRight" data-wow-delay="0.4s" data-wow-offset="10">
                        <h2 class="font-accident-two-normal uppercase">Blog</h2>
                        <h5 class="font-accident-one-bold uppercase subtitle">bachelor of Science (Computer Science) and Mathematics student</h5>
                        <p class="small fontcolor-medium"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id metus purus. Ut vulputate, est vel tincidunt mattis, orci neque iaculis lectus, et interdum quam felis vel tortor. Fusce ultrices dui quis nunc dignissim faucibus. Ut ac odio quis nibh viverra fringilla ac id nisi. Suspendisse tincidunt augue quis ligula cursus, non efficitur ligula faucibus. Mauris id neque maximus, tincidunt metus et, sodales nulla. </p>
                    </div>
                </section>
                <!-- Blog Block -->
                <section class="inner-section">
                    <div id="isotope-filters" class="port-filter port-filter-light text-center wow fadeInLeft" data-wow-delay="0.6s" data-wow-offset="10">
                        <ul>
                            <li><a href="#all" data-filter="*">All Categories</a></li>
                            <li><a href="#design" data-filter=".design">Design</a></li>
                            <li><a href="#branding" data-filter=".branding">Branding</a></li>
                        </ul>
                    </div>
                    <div class="dividewhite3"></div>
                    <div class="grid container-fluid text-center wow fadeInDown" data-wow-delay="0.6s" data-wow-offset="10">
                        <div id="posts" class="row popup-container">
                            <div class="grid-item branding design col-md-4 col-sm-6">
                                <div class="item-wrap">
                                    <figure class="">
                                        <div class="popup-call"> <a href="assets/custom/images/blog/01.jpg" class="gallery-item"><i class="flaticon-arrows-4"></i></a> </div> <img src="assets/custom/images/blog/thumbs/01.jpg" class="img-responsive" alt="img11" />
                                        <figcaption>
                                            <div class="post-meta"><span>by <a href="#!">Sam Anderson</a>,</span> <span>March 16, 2015</span></div>
                                            <div class="post-header">
                                                <h5><a href="blogpost.html">My Friend's new album design</a></h5> </div>
                                            <div class="post-entry">
                                                <p>Aliquam gravida tincidunt congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</p>
                                            </div>
                                            <div class="post-tag pull-left"> <span><a href="#branding" data-filter=".branding">Branding</a>,</span><span><a href="#design" data-filter=".design">Design</a></span> </div>
                                            <div class="post-more-link pull-right"><a href="blogpost.html">More<i class="fa fa-long-arrow-right right"></i></a></div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item grid-sizer branding col-md-4 col-sm-6">
                                <div class="item-wrap">
                                    <figure class="">
                                        <div class="popup-call"> <a href="assets/custom/images/blog/02.jpg" class="gallery-item"><i class="flaticon-arrows-4"></i></a> </div> <img src="assets/custom/images/blog/thumbs/02.jpg" class="img-responsive" alt="img03" />
                                        <figcaption>
                                            <div class="post-meta"><span>by <a href="#!">Sam Anderson</a>,</span> <span>March 16, 2015</span></div>
                                            <div class="post-header">
                                                <h5><a href="blogpost.html">Funny Things done</a></h5> </div>
                                            <div class="post-entry">
                                                <p>Aliquam gravida tincidunt congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</p>
                                            </div>
                                            <div class="post-tag pull-left"> <span><a href="#branding" data-filter=".branding">Branding</a></span> </div>
                                            <div class="post-more-link pull-right"><a href="blogpost.html">More<i class="fa fa-long-arrow-right right"></i></a></div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item branding col-md-4 col-sm-6">
                                <div class="item-wrap">
                                    <figure class="">
                                        <div class="popup-call"> <a href="assets/custom/images/blog/03.jpg" class="gallery-item"><i class="flaticon-arrows-4"></i></a> </div> <img src="assets/custom/images/blog/thumbs/03.jpg" class="img-responsive" alt="img11" />
                                        <figcaption>
                                            <div class="post-meta"><span>by <a href="#!">Sam Anderson</a>,</span> <span>March 16, 2015</span></div>
                                            <div class="post-header">
                                                <h5><a href="blogpost.html">Crazy Frod needs help</a></h5> </div>
                                            <div class="post-entry">
                                                <p>Aliquam gravida tincidunt congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</p>
                                            </div>
                                            <div class="post-tag pull-left"> <span><a href="#branding" data-filter=".branding">Branding</a></span> </div>
                                            <div class="post-more-link pull-right"><a href="blogpost.html">More<i class="fa fa-long-arrow-right right"></i></a></div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item branding design col-md-4 col-sm-6">
                                <div class="item-wrap">
                                    <figure class="">
                                        <div class="popup-call"> <a href="assets/custom/images/blog/04.jpg" class="gallery-item"><i class="flaticon-arrows-4"></i></a> </div> <img src="assets/custom/images/blog/thumbs/04.jpg" class="img-responsive" alt="img03" />
                                        <figcaption>
                                            <div class="post-meta"><span>by <a href="#!">Sam Anderson</a>,</span> <span>March 16, 2015</span></div>
                                            <div class="post-header">
                                                <h5><a href="blogpost.html">Old man crying</a></h5> </div>
                                            <div class="post-entry">
                                                <p>Hello how are you</p>
                                            </div>
                                            <div class="post-tag pull-left"> <span><a href="#branding" data-filter=".branding">Branding</a>,</span><span><a href="#design" data-filter=".design">Design</a></span> </div>
                                            <div class="post-more-link pull-right"><a href="blogpost.html">More<i class="fa fa-long-arrow-right right"></i></a></div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item branding col-md-4 col-sm-6">
                                <div class="item-wrap">
                                    <figure class="">
                                        <div class="popup-call"> <a href="assets/custom/images/blog/05.jpg" class="gallery-item"><i class="flaticon-arrows-4"></i></a> </div> <img src="assets/custom/images/blog/thumbs/05.jpg" class="img-responsive" alt="img11" />
                                        <figcaption>
                                            <div class="post-meta"><span>by <a href="#!">Sam Anderson</a>,</span> <span>March 16, 2015</span></div>
                                            <div class="post-header">
                                                <h5><a href="blogpost.html">The rusted cars bumping</a></h5> </div>
                                            <div class="post-entry">
                                                <p>Aliquam gravida tincidunt congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</p>
                                            </div>
                                            <div class="post-tag pull-left"> <span><a href="#branding" data-filter=".branding">Branding</a></span> </div>
                                            <div class="post-more-link pull-right"><a href="blogpost.html">More<i class="fa fa-long-arrow-right right"></i></a></div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item design col-md-4 col-sm-6">
                                <div class="item-wrap">
                                    <figure class="">
                                        <div class="popup-call"> <a href="assets/custom/images/blog/07.jpg" class="gallery-item"><i class="flaticon-arrows-4"></i></a> </div> <img src="assets/custom/images/blog/thumbs/07.jpg" class="img-responsive" alt="img03" />
                                        <figcaption>
                                            <div class="post-meta"><span>by <a href="#!">Sam Anderson</a>,</span> <span>March 16, 2015</span></div>
                                            <div class="post-header">
                                                <h5><a href="blogpost.html">Commando shoots the boy</a></h5> </div>
                                            <div class="post-entry">
                                                <p>Aliquam gravida tincidunt congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</p>
                                            </div>
                                            <div class="post-tag pull-left"> <span><a href="#design" data-filter=".design">Design</a></span> </div>
                                            <div class="post-more-link pull-right"><a href="blogpost.html">More<i class="fa fa-long-arrow-right right"></i></a></div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item branding design col-md-4 col-sm-6">
                                <div class="item-wrap">
                                    <figure class="">
                                        <div class="popup-call"> <a href="assets/custom/images/blog/08.jpg" class="gallery-item"><i class="flaticon-arrows-4"></i></a> </div> <img src="assets/custom/images/blog/thumbs/08.jpg" class="img-responsive" alt="img03" />
                                        <figcaption>
                                            <div class="post-meta"><span>by <a href="#!">Sam Anderson</a>,</span> <span>March 16, 2015</span></div>
                                            <div class="post-header">
                                                <h5><a href="blogpost.html">Little girl beats the dog</a></h5> </div>
                                            <div class="post-entry">
                                                <p>Aliquam gravida tincidunt congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</p>
                                            </div>
                                            <div class="post-tag pull-left"> <span><a href="#branding" data-filter=".branding">Branding</a>,</span><span><a href="#design" data-filter=".design">Design</a></span> </div>
                                            <div class="post-more-link pull-right"><a href="blogpost.html">More<i class="fa fa-long-arrow-right right"></i></a></div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dividewhite8"></div>
                </section>
                <!-- /Blog Block -->
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