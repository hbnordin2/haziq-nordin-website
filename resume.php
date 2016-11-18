<!DOCTYPE html>
<html lang="en">
<!--[if IE 9]>
<html class="ie9" lang="en">    <![endif]-->
<!--[if IE 8]>
<html class="ie8" lang="en">    <![endif]-->

<head>
    <?php 
            include 'header.php';
            $header = new Header("Resume");
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
            <div id="resume" class="inner-content">
                <section id="page-title" class="inner-section">
                    <div class="container-fluid nopadding wow fadeInRight" data-wow-delay="0.2s" data-wow-offset="10">
                        <h2 class="font-accident-two-normal uppercase">Resume</h2>
                        <h5 class="font-accident-one-bold uppercase subtitle">bachelor of Science (Computer Science) and Mathematics student</h5>
                        <p class="small fontcolor-medium">
                            <br>
                            <br> <span class="resume-section">Education</span>
                            <br>
                            <br> <span class="resume-subheader">2015 – current</span>
                            <br> University of Queensland Bachelor of Mathematics and Science (Computer Science)
                            <br> GPA: 6.75
                            <br>
                            <br>
                            <br>
                            <br> <span class="resume-section">Awards</span>
                            <br>
                            <br> <span class="resume-subheader">2016 Dean’s Commendation for Academic Excellence</span>
                            <br> Dean's Commendations for Academic Excellence recognize students enrolled in undergraduate, postgraduate coursework and postgraduate honors programs who have excelled academically and who have shown a strong commitment to their study.
                            <br>
                            <br> <span class="resume-subheader">2015 Dean’s Commendation for Academic Excellence</span>
                            <br> Dean's Commendations for Academic Excellence recognize students enrolled in undergraduate, postgraduate coursework and postgraduate honors programs who have excelled academically and who have shown a strong commitment to their study.
                            <br>
                            <br> <span class="resume-subheader">2015 People’s Choice Award at the annual University of Queensland Computing Society Hackathon</span>
                            <br> Developed a platform for students with entrepreneurial ambitions to find technically inclined co-founders with a front-end in Javascript, HTML and CSS and backend built with PHP.
                            <br>
                            <br>
                            <br>
                            <br> <span class="resume-section">Community Leadership</span>
                            <br>
                            <br> <span class="resume-subheader">2016 Code Dojo Programming Mentor</span>
                            <br> Taught children aged 10-12 programming at CoderDojo, focusing on building Minecraft mods in Python. While there, I introduced the idea of using a standard machine image that can be deployed fully configured onto a machine to save set-up time which will save future teams many hours setting up everyone’s computer, and helped implement it using Vagrant.
                            <br>
                            <br><span class="resume-subheader">2016 Volunteer at the World Science Festival</span> </p>
                        <div class="dividewhite2"></div>
                    </div>
                </section>
                <hr>
                <!-- Timeline Block -->
                <section id="timeline-vertical" class="inner-section">
                    <div class="container-fluid nopadding">
                        <div class="text-center wow fadeInDown" data-wow-delay="0.6s" data-wow-offset="10">
                            <div class="dividewhite4"></div>
                            <h3 class="font-accident-two-normal uppercase">Professional Timeline</h3>
                            <h5 class="font-accident-one-bold uppercase subtitle">What I'm up to</h5>
                            <div class="dividewhite1"></div>
                        </div>
                        <div class="dividewhite4"></div>
                        <ul class="timeline-vert timeline-light">
                            <li class="timeline-inverted">
                                <div class="timeline-badge success"><i class="flaticon-pens15"></i></div>
                                <div class="timeline-panel wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="10">
                                    <p class="timeline-time fontcolor-invert"><i class="glyphicon glyphicon-time"></i> November 2016 - ... </p>
                                    <div class="timeline-photo timeline-bg04"></div>
                                    <div class="timeline-heading">
                                        <h4 class="font-accident-two-normal uppercase">Summer Research Scholar</h4>
                                        <h6 class="uppercase">Queensland Brain Institute Research Scholar and Scholarship recipent</h6> </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge primary"><i class="flaticon-graduation61"></i></div>
                                <div class="timeline-panel wow fadeInLeft" data-wow-delay="0.3s" data-wow-offset="10">
                                    <p class="timeline-time fontcolor-invert"><i class="glyphicon glyphicon-time"></i> March 2016 - July 2016</p>
                                    <div class="timeline-photo timeline-bg02-01"></div>
                                    <div class="timeline-heading">
                                        <h4 class="font-accident-two-normal uppercase">Dean's commendation for academic excellence</h4>
                                        <h6 class="uppercase">University of Queensland</h6> </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge success"><i class="flaticon-graduation61"></i></div>
                                <div class="timeline-panel wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="10">
                                    <p class="timeline-time fontcolor-invert"><i class="glyphicon glyphicon-time"></i> July 2015 - November 2015 </p>
                                    <div class="timeline-photo timeline-bg02-01"></div>
                                    <div class="timeline-heading">
                                        <h4 class="font-accident-two-normal uppercase">Dean's commendation for academic excellence</h4>
                                        <h6 class="uppercase">University of Queensland</h6> </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge danger"><i class="flaticon-pens15"></i></div>
                                <div class="timeline-panel wow fadeInLeft" data-wow-delay="0.3s" data-wow-offset="10">
                                    <p class="timeline-time fontcolor-invert"><i class="glyphicon glyphicon-time"></i> August 2015</p>
                                    <div class="timeline-photo timeline-bg03-01"></div>
                                    <div class="timeline-heading">
                                        <h4 class="font-accident-two-normal uppercase">UQCS Hackathon</h4>
                                        <h6 class="uppercase">Won People's Choice Award</h6> </div>
                                </div>
                            </li>
                            <li class="timeline-inverted info">
                                <div class="timeline-badge warning"><i class="flaticon-graduation61"></i></div>
                                <div class="timeline-panel wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="10">
                                    <p class="timeline-time fontcolor-invert"><i class="glyphicon glyphicon-time"></i> July 2015 - ...</p>
                                    <div class="timeline-photo timeline-bg04-01"></div>
                                    <div class="timeline-heading">
                                        <h4 class="font-accident-two-normal uppercase">University of Queensland</h4>
                                        <h6 class="uppercase">Bachelor of Mathematics and Computer Science</h6> </div>
                                </div>
                            </li>
                        </ul>
                        <div class="text-center"> <a href="#!" class="btn btn-darker">Learn More</a> </div>
                        <div class="dividewhite6"></div>
                    </div>
                </section>
                <!-- /Timeline Block -->
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