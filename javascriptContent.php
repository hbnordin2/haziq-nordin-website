<?php 

    class JavascriptContent{
        private $ownedVendors = array("assets/vendor/jquery/js/jquery-2.2.0.min.js", 
                        "assets/vendor/bootstrap/js/bootstrap.min.js", 
                        "assets/vendor/imagesloaded/js/imagesloaded.pkgd.min.js", 
                        "assets/vendor/isotope/js/isotope.pkgd.min.js", 
                        "assets/vendor/mfp/js/jquery.magnific-popup.min.js", 
                        "assets/vendor/circle-progress/circle-progress.js", 
                        "assets/vendor/waypoints/waypoints.min.js", 
                        "assets/vendor/anicounter/jquery.counterup.min.js",
                        "assets/vendor/pjax/jquery.pjax.js");
        private $downloadVendors = array("https://maps.google.com/maps/api/js");
        private $custom = array("assets/custom/js/custom.js");
        
        private $content = "";
        private $template = "<script src=\"%s\" type=\"text/javascript\"></script>";
        
        function __construct() {
            $this->content .= "<div id=\"image-cache\" class=\"hidden\"></div>";
            $this->setup_owned_vendors();
            $this->setup_download_vendors();
            $this->setup_custom();
        }
        
        function display_content() {
            echo $this->content;
        }
        
        function setup_owned_vendors() {
            for($i = 0; $i < count($this->ownedVendors); $i++) {
                $this->content .= sprintf($this->template, $this->ownedVendors[$i]);
            }
        }
        
        function setup_download_vendors() {
            for($i = 0; $i < count($this->downloadVendors); $i++) {
                $this->content .= sprintf($this->template, $this->downloadVendors[$i]);
            }
        }
        
        function setup_custom() {
            for($i = 0; $i < count($this->custom); $i++) {
                $this->content .= sprintf($this->template, $this->custom[$i]);
            }
        }
    }
?>