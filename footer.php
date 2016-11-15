<?php
    class Footer {
        private $content = "";
        
        function __construct(){
            $this->content .= "<footer class=\"padding-50 ui-bg-color02\">";
            $this->content .= "<div class=\"container-fluid nopadding\">";
            
            // Content section
            $this->build_content_panels();
            
            // Copyright section
            $this->build_copyright_panel();
            
            $this->content .= "</div>";
            $this->content .= "</footer>";
        }
        
        function display_content() {
            echo $this->content;
        }
        
        function build_content_panels() {
            $this->content .= "<div class=\"row wow fadeInDown\" data-wow-delay=\".2s\" data-wow-offset=\"10\">";
            $this->build_contact_panel();
            $this->build_cv_section();
            $this->build_social_section();
            $this->content .= "</div>";
        }
        
        function build_contact_panel() {
            $name = "Haziq Nordin";
            
            $content = "Computer Science and Mathematics Student";
            $this->content .= "<div class=\"col-md-3\">";
            $this->content .= "<h4 class=\"font-accident-two-normal uppercase\">" . $name . "</h4>";
            $this->content .= "<p class=\"inline-block\">" . $content . "</p>";
            $this->content .= "<div class=\"divider-dynamic\"></div>";
            $this->content .= "</div>";
        }
        
        function build_cv_section() {
            $location = "./assets/custom/files/Haziq_Nordin_CV.pdf";
            $heading = "Cirriculum Vitae";
            
            $this->content .= "<div class=\"col-md-3 cv-link\">";
            $this->content .= "<h4 class=\"font-accident-two-normal uppercase\">" . $heading . "</h4>";
            $this->content .= "<div class=\"dividewhite1\"></div> <a href=\"" . $location . "\"><i class=\"fa fa-long-arrow-down\" aria-hidden=\"true\"></i>English</a>";
            $this->content .= "<a href=\"#!\">";
            $this->content .= "<div class=\"divider-dynamic\"></div>";
            $this->content .= "</a>";
            $this->content .= "</div>";
        }
        
        function build_social_section() {
            $facebook = "https://www.facebook.com/profile.php?id=100004600996712";
            $linkedin = "https://au.linkedin.com/in/haziq-nordin-1a6623107";
            
            $this->content .= "<div class=\"col-md-3\">";
            $this->content .= "<h4 class=\"font-accident-two-normal uppercase\">Follow me</h4>";
            $this->content .= "<div class=\"follow\">";
            $this->content .= "<ul class=\"list-inline social\">";
            $this->content .= "<li><a target=\"_blank\" href=\"" . $facebook . "\" class=\"rst-icon-facebook\"><i class=\"fa fa-facebook\"></i></a></li>";
            $this->content .= "<li><a target=\"_blank\" href=\"" . $linkedin . "\" class=\"rst-icon-twitter\"><i class=\"fa fa-linkedin\"></i></a></li>";
            $this->content .= "</ul>";
            $this->content .= "</div>";
            $this->content .= "<div class=\"divider-dynamic\"></div>";
            $this->content .= "</div>";
        }
        
        function build_copyright_panel() {
            $this->content .= "<div class=\"dividewhite1\"></div>";
            $this->content .= "<div class=\"row wow fadeInDown\" data-wow-delay=\".4s\" data-wow-offset=\"10\">";
            $this->content .= "<p>© 2016 Haziq Nordin.</p>";
            $this->content .= "</div>";
            $this->content .= "</div>";
        }
    }
?>