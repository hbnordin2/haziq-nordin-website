<?php
    class Header {
        private $head;
        private $title;
        
        function __construct($title="") {
            // Build meta tags
            $metaContent = new Meta;
            $this->head .= $metaContent->get_content();
            
            // Build header
            $this->make_title($title);
            
            // Build css tags
            $cssContent = new Css;
            $this->head .= $cssContent->get_content();
        }
        
        function make_title($pageTitle) {
            $titleTemplate = "<title>HN | %s</title>";
            $this->head .= sprintf($titleTemplate, $pageTitle);
        }
        
        function display_content() {
            echo $this->head;
        }
    }

    class Meta {
        private $meta;
        private $content = "Haziq Nordin's personal portfolio";
        private $keywords = array("haziq", 
                                  "nordin", 
                                  "website", 
                                  "portfolio", 
                                  "tutoring", 
                                  "UQ", 
                                  "computer", 
                                  "science", 
                                  "Queensland", 
                                  "University", 
                                  "science", 
                                  "mathematics");
        
        function __construct() {
            $this->meta = "";
            $this->make_char_set("UTF-8");
            $this->choose_ie_version("edge");
            $this->set_initial_render_size();
            $this->set_description();
            $this->set_keywords();
            $this->set_author();
        }
        
        function get_content() {
            return $this->meta;
        }
        
        function make_char_set($charSet) {
            $format = "<meta charset=\"%s\">";
            $format = sprintf($format, $charSet);
            $this->meta .= $format;
        }
        
        function choose_ie_version($version) {
            $format = "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=%s\">";
            $format = sprintf($format, $version);
            $this->meta .= $format;
        }
        
        function set_initial_render_size() {
            $this->meta .= "<meta name=viewport content=\"width=device-width, initial-scale=1\">";
        }
        
        function set_description() {
            $format = "<meta name=\"description\" content=\"%s\">";
            $format = sprintf($format, $this->content);
            $this->meta .= $format;
        }
        
        function set_keywords() {
            $format = "<meta name=\"keywords\" content=\"%s\">";
            $keywordContent = "";
            
            $i;
            for($i = 0; $i < count($this->keywords) - 1; $i++) {
                $keywordContent .= $this->keywords[$i];
                $keywordContent .= ", ";
            }
            $keywordContent .= $this->keywords[$i];
            
            $format = sprintf($format, $keywordContent);
            $this->meta .= $format;
        }
        
        function set_author() {
            $this->meta .= "<meta name=\"author\" content=\"Haziq Nordin\">";
        }
    }

    class Css {
        private $vendorAssets = array("assets/vendor/bootstrap/css/bootstrap.min.css",
                                "assets/vendor/fontawesome/css/font-awesome.min.css",
                                "assets/vendor/flaticons/flaticon.css",
                                "assets/vendor/hover/css/hover-min.css",
                                "assets/vendor/wow/animate.css",
                                "assets/vendor/mfp/css/magnific-popup.css"
                               );
        private $customAssets = array("assets/custom/css/style.css");
        private $cssContent = "";
        
        function __construct(){
            $this->load_vendor_assets();
            $this->load_custom_assets();
            $this->build_preloader();
        }
        
        function get_content() {
            return $this->cssContent;
        }
        
        function build_link($link) {
            $hrefTemplate = "<link href=\"%s\" property='stylesheet' rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />";
            $formattedHref = sprintf($hrefTemplate, $link);
            return $formattedHref;
        }
        
        function load_vendor_assets() {
            for($i = 0; $i < count($this->vendorAssets); $i++) {
                $this->cssContent .= $this->build_link($this->vendorAssets[$i]);
            }
        }
        
        function load_custom_assets() {
            for($i = 0; $i < count($this->customAssets); $i++) {
                $this->cssContent .= $this->build_link($this->customAssets[$i]);
            }
        }
        
        function build_preloader() {
            $this->cssContent .= "<style>";
            $this->cssContent .= "#preloader {\n";
            $this->cssContent .= "\t position: fixed;\n";
            $this->cssContent .= "\t left: 0;\n";
            $this->cssContent .= "\t top: 0;\n";
            $this->cssContent .= "\t z-index: 99999;\n";
            $this->cssContent .= "\t width: 100%;\n";
            $this->cssContent .= "\t height: 100%;\n";
            $this->cssContent .= "\t overflow: visible;\n";
            $this->cssContent .= "\t background: #666666 url(\"assets/custom/images/preloader.gif\") no-repeat center center;\n";
            $this->cssContent .= "}\n";
            $this->cssContent .= "</style>";
        }
    }
?>