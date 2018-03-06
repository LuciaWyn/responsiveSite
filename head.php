<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <meta charset="utf-8" />
        <title>Peter Hollens</title>
        
        <link rel="stylesheet" type="text/css" href="base.css" /> 
<?php
    
		//detect style for device
        require_once 'Mobile_Detect.php';
        $detect = new Mobile_Detect;
        $detect->isMobile();
        $detect->isTablet();

        if ($detect->isMobile()) {
            $m = true;
        }
        else if($detect->isTablet()){
            $tab = TRUE;
        }
        else{
           $com = true;
        }
        if($m == true){
            echo '<link rel="stylesheet" type="text/css" href="phone.css"/> ';
        }
        else if($tab == true){
            echo '<link rel="stylesheet" type="text/css" href="tablet.css"/> ';
        }
        else{
            echo '<link rel="stylesheet" type="text/css" href="computer.css"/> ';
        }
        $links = '<ul><li><a href="home.php">Home</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="albums.php">Albums</a></li>
                    <li><a href="videos.php">Videos</a></li>
                    <li><a href="contact.php">Contact</a></li></ul>';
        ?>
    </head>
    <body><?php if($m == false){
     ?>
        <div class="navcontainer">
            
            <div class="nav">
           
           
             <?php 
               echo $links;
             ?>
                </div>
            </div>
        <?php 
             
             }
             else{?>
        
<div class="navcontainer">
        <a class="p" href="#nav">
            <div>
        </div>
            <div>
        </div>
        </a>
        <nav id="nav">
	        <?php echo $links;?>
            <ul><li><a href="#">close</a></li>
                </ul>
        </nav>
        <?php             }?>
    </div>
        <div class="maincontainer">
            <div class="main">
            
        
