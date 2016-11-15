<?php 
    class MainNav {
        private $directories = array(
            array("index.php", "home"), 
            array("resume.php", "resume"), 
            array("portfolio.php", "portfolio"), 
            array("contacts.php", "contacts"), 
            array("tutoring.php", "tutoring"), 
            array("blog.php", "blog"));
        
        private $name = "Haziq Nordin";
        private $sentancePrefix = "I'm into";        
        private $interests = array("Programming", "Statistics", "Probability", "Linux", "Software engineering", "Machine learning", "Security");
        private $picture = "./assets/custom/images/userpic02.jpg";
        private $cv = "./assets/custom/files/Haziq_Nordin_CV.pdf";
        private $linkedin = "https://au.linkedin.com/in/haziq-nordin-1a6623107";
        
        private $content = "";
        
        function __construct() {
            $this->content .= "<div id=\"preloader\"></div>";
            $this->content .= "<header>";
            $this->content .= "<section id=\"top-navigation\" class=\"container-fluid nopadding\">";
            $this->content .= "<div class=\"row nopadding ident ui-bg-color01\">";
            
            // Picture panel
            $this->setup_picture();
            
            // Content panel
            $this->content .= "<div class=\"col-md-7 col-lg-8 vc-name nopadding\">";
            $this->setup_content_panel();
            $this->content .= "</div>";
            
            
            // Section 
            $this->content .= "</div>";
            $this->content .= "</section>";
            $this->content .= "</div>";
            $this->content .= "</header>";
        }
        
        function display_content() {
            echo $this->content;
        }
        
        function setup_picture() {
            $this->content .= "<a href=\"" . $this->picture . "\">";
            $this->content .= "<div class=\"col-md-5 col-lg-4 vc-photo\">&nbsp;</div>";
            $this->content .= "</a>";
        }
        
        function setup_content_panel() {
            $this->setup_top_content_bar();
            $this->setup_bottom_content_bar();
            $this->setup_navigation();
        }
        
        function setup_navigation() {
            $this->content .= "<ul id=\"nav\" class=\"row nopadding cd-side-navigation\">";
            for($i = 0; $i < count($this->directories); $i++) {
                $template = "<li class=\"col-xs-4 col-sm-2 nopadding menuitem ui-menu-color0%d\"> <a href=\"%s\" class=\"hvr-sweep-to-bottom\"><i class=\"flaticon-insignia\"></i><span>%s</span></a> </li>";
                $this->content .= sprintf($template, $i + 1, $this->directories[$i][0], $this->directories[$i][1]);
            }
            $this->content .= "</ul>";
        }
        
        function setup_top_content_bar() {
            $this->content .= "<div class=\"row nopadding name\">";
            $this->content .= "<div class=\"col-md-10 name-title\">";
            $this->content .= "<h2 class=\"font-accident-two-light uppercase\">" . $this->name . "</h2></div>";
            $this->content .= "<div class=\"col-md-2 nopadding name-pdf\"> <a href=\"" . $this->cv . "\" class=\"hvr-sweep-to-right\"><i class=\"flaticon-download149\" title=\"Download CV\"></i></a> </div>";
            $this->content .= "</div>";
        }
        
        function setup_bottom_content_bar() {
            $this->content .= "<div class=\"row nopadding position\">";
            $this->content .= "<div class=\"col-md-10 position-title\">";
            $this->content .= "<section class=\"cd-intro\">";
            $this->content .= "<h4 class=\"cd-headline clip is-full-width font-accident-two-normal uppercase\">";
            $this->content .= "<span style=\"margin-right:10px;\">" . $this->sentancePrefix . "</span>";

            $this->add_interests();
            
            $this->content .= "</h4> </section>";
            $this->content .= "</div>";
            $this->content .= "<div class=\"col-md-2 nopadding pdf\"> <a href=\"" . $this->linkedin . "\" class=\"hvr-sweep-to-right\"><i class=\"flaticon-linkedin22\" title=\"Connect with me on Linkedin\"></i></a> </div>";
            $this->content .= "</div>";
        }
        
        function add_interests() {
            $this->content .= "<span class=\"cd-words-wrapper\">";
            $this->content .= "<b class=\"is-visible\">" . $this->interests[0] . "</b>";
            for($i = 1; $i < count($this->interests); $i++) {
                $this->content .= "<b>" . $this->interests[$i] . "</b>";
            }
            $this->content .= "</span>";
        }
    }
?>