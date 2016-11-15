<!DOCTYPE html>
<html lang="en">
<!--[if IE 9]>
<html class="ie9" lang="en">    <![endif]-->
<!--[if IE 8]>
<html class="ie8" lang="en">    <![endif]-->

<head>
    <?php 
            include 'header.php';
            $header = new Header("Portfolio");
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
            <div id="portfolio" class="inner-content">
                <section id="page-title" class="inner-section">
                    <div class="container-fluid nopadding wow fadeInRight" data-wow-delay="0.2s" data-wow-offset="10">
                        <h2 class="font-accident-two-normal uppercase">Portfolio</h2>
                        <h5 class="font-accident-one-bold uppercase subtitle">bachelor of Science (Computer Science) and Mathematics student</h5>
                        <p class="small fontcolor-medium"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id metus purus. Ut vulputate, est vel tincidunt mattis, orci neque iaculis lectus, et interdum quam felis vel tortor. Fusce ultrices dui quis nunc dignissim faucibus. Ut ac odio quis nibh viverra fringilla ac id nisi. Suspendisse tincidunt augue quis ligula cursus, non efficitur ligula faucibus. Mauris id neque maximus, tincidunt metus et, sodales nulla. </p>
                    </div>
                </section>
                <!-- Counts Block -->
                <section id="counts-light-bg" class="counts inner-section bg-color02 wow fadeInDown" data-wow-delay="0.2s" data-wow-offset="10">
                    <div class="container-fluid nopadding">
                        <div class="count-container row">
                            <div class="col-lg-3 col-sm-6 col-xs-12 count">
                                <div>
                                    <div class="count-icon"> <i class="flaticon-photo246"></i> </div> <span class=".integers digit font-accident-two-normal">120</span>
                                    <div class="count-text font-accident-one-bold">Websites</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12 count">
                                <div>
                                    <div class="count-icon"> <i class="flaticon-book-bag2"></i> </div> <span class=".integers digit font-accident-two-normal">90</span>
                                    <div class="count-text font-accident-one-bold">Logos</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12 count">
                                <div>
                                    <div class="count-icon"> <i class="flaticon-stats48"></i> </div> <span class=".integers digit font-accident-two-normal">45</span>
                                    <div class="count-text font-accident-one-bold">UI / UX Projects</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12 count">
                                <div>
                                    <div class="count-icon"> <i class="flaticon-shopping-carts6"></i> </div> <span class=".integers digit font-accident-two-normal">165</span>
                                    <div class="count-text font-accident-one-bold">E-commerce Sites</div>
                                </div>
                            </div>
                        </div>
                        <div class="dividewhite2"></div>
                    </div>
                </section>
                <!-- /Counts Block -->
                <!-- Portfolio Block -->
                <section id="portfolio-block" class="inner-section wow fadeInDown" data-wow-delay="0.4s" data-wow-offset="10">
                    <div class="dividewhite6"></div>
                    <div id="isotope-filters" class="port-filter port-filter-light text-center">
                        <ul>
                            <li><a href="#cat1" data-filter="*">All</a></li>
                            <li><a href="#cat2" data-filter=".web">Web Design</a></li>
                            <li><a href="#cat3" data-filter=".marketing">Online Marketing</a></li>
                            <li><a href="#cat4" data-filter=".seo">SEO</a></li>
                        </ul>
                    </div>
                    <div class="dividewhite3"></div>
                    <div class="grid container-fluid text-center">
                        <div id="posts" class="row popup-container">
                            <div class="grid-item web col-sm-12">
                                <div class="item-wrap">
                                    <figure class="effect-goliath">
                                        <div class="popup-call"> <a href="assets/custom/images/magazine/00.jpg" class="gallery-item"><i class="flaticon-arrows-4"></i></a> </div> <img src="assets/custom/images/magazine/00.jpg" class="img-responsive'" alt="img11" />
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Music <span>Sounds</span></h3>
                                                <p>#web #seo </p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item web col-lg-3 col-md-4 col-sm-6">
                                <div class="item-wrap">
                                    <figure class="effect-goliath">
                                        <div class="popup-call"> <a href="assets/custom/images/magazine/01.jpg" class="gallery-item"><i class="flaticon-arrows-4"></i></a> </div> <img src="assets/custom/images/magazine/thumbs/01.jpg" class="img-responsive'" alt="img11" />
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Music <span>Sounds</span></h3>
                                                <p>#web #seo </p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item grid-sizer web seo col-lg-3 col-md-4 col-sm-6">
                                <div class="item-wrap">
                                    <figure class="effect-goliath">
                                        <div class="popup-call"> <a href="assets/custom/images/magazine/02.jpg" class="gallery-item"><i class="flaticon-arrows-4"></i></a> </div> <img src="assets/custom/images/magazine/thumbs/02.jpg" class="img-responsive" alt="img03" />
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Fire <span>Burns</span></h3>
                                                <p>#web #seo</p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item marketing seo col-lg-3 col-md-4 col-sm-6">
                                <div class="item-wrap">
                                    <figure class="effect-goliath">
                                        <div class="popup-call"> <a href="assets/custom/images/magazine/03.jpg" class="gallery-item"><i class="flaticon-arrows-4"></i></a> </div> <img src="assets/custom/images/magazine/thumbs/03.jpg" class="img-responsive" alt="img11" />
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Ice <span>Cold</span></h3>
                                                <p>#marketing</p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item marketing seo col-lg-3 col-md-4 col-sm-6">
                                <div class="item-wrap">
                                    <figure class="effect-goliath">
                                        <div class="popup-call"> <a href="assets/custom/images/magazine/04.jpg" class="gallery-item"><i class="flaticon-arrows-4"></i></a> </div> <img src="assets/custom/images/magazine/thumbs/04.jpg" class="img-responsive" alt="img03" />
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Everybody <span>Lies</span></h3>
                                                <p>#marketing</p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item web marketing col-lg-3 col-md-4 col-sm-6">
                                <div class="item-wrap">
                                    <figure class="effect-goliath">
                                        <div class="popup-call"> <a href="assets/custom/images/magazine/05.jpg" class="gallery-item"><i class="flaticon-arrows-4"></i></a> </div> <img src="assets/custom/images/magazine/thumbs/05.jpg" class="img-responsive" alt="img11" />
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Music <span>Sounds</span></h3>
                                                <p>#web #seo </p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item uncategorized col-lg-3 col-md-4 col-sm-6">
                                <div class="item-wrap">
                                    <figure class="effect-goliath">
                                        <div class="popup-call"> <a href="assets/custom/images/magazine/06.jpg" class="gallery-item"><i class="flaticon-arrows-4"></i></a> </div> <img src="assets/custom/images/magazine/thumbs/06.jpg" class="img-responsive" alt="img03" />
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Fire <span>Burns</span></h3>
                                                <p>#web #seo</p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item web col-lg-3 col-md-4 col-sm-6">
                                <div class="item-wrap">
                                    <figure class="effect-goliath">
                                        <div class="popup-call"> <a href="assets/custom/images/magazine/07.jpg" class="gallery-item"><i class="flaticon-arrows-4"></i></a> </div> <img src="assets/custom/images/magazine/thumbs/07.jpg" class="img-responsive" alt="img03" />
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Fire <span>Burns</span></h3>
                                                <p>#web #seo</p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-item marketing seo col-lg-3 col-md-4 col-sm-6">
                                <div class="item-wrap">
                                    <figure class="effect-goliath">
                                        <div class="popup-call"> <a href="assets/custom/images/magazine/08.jpg" class="gallery-item"><i class="flaticon-arrows-4"></i></a> </div> <img src="assets/custom/images/magazine/thumbs/08.jpg" class="img-responsive" alt="img03" />
                                        <figcaption>
                                            <div class="fig-description">
                                                <h3>Fire <span>Burns</span></h3>
                                                <p>#web #seo</p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dividewhite8"></div>
                </section>
                <!-- /Portfolio Block -->
            </div>
        </div>
        <?php 
        include 'footer.php';
        
        $footer = new Footer;
        $footer->display_content();
    ?>
            <?php 
            include 'javascriptContent.php';
            
            $javascriptContent = new JavascriptContent;
            $javascriptContent->display_content();
        ?>
</body>

</html>