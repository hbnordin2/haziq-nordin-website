<head>
    <?php 
            include 'header.php';
            $header = new Header("Home");
            $header->display_content();
    
            
        ?>
</head>

<body>
    <?php
        include 'footer.php';
        $footer = new Footer;
        $footer->display_content();
    ?>
</body>