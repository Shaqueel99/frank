<?php

if($_FILES['file']['error'] > 0) { echo 'Error during uploading, try again'; }
$extsAllowed = array( 'jpg', 'jpeg', 'png', 'gif' );

$extUpload = strtolower( substr( strrchr($_FILES['file']['name'], '.') ,1) ) ;

if (in_array($extUpload, $extsAllowed) ) { 
	
	$name = "{$_FILES['file']['name']}";
	$result = move_uploaded_file($_FILES['file']['tmp_name'], $name);
	
	if($result){echo "<img src='$name'/>";}
		
	} else { echo 'File is not valid. Please try again'; }


$Filename=basename( $_FILES['file']['name']);

if(move_uploaded_file($_FILES['file']['tmp_name'], $name)) {
    //Tells you if its all ok
    echo "The file ". basename( $_FILES['file']['name']). " has been uploaded, and your information has been added to the directory";
    // Connects to your Database
    mysql_connect("localhost", "root", "", 'slides') or die(mysql_error()) ;
    mysql_select_db("slides") or die(mysql_error()) ;


    mysql_query("INSERT INTO picture (file)
    VALUES ('$Filename')") ;
} else {
    //Gives and error if its not
    echo "Sorry, there was a problem uploading your file.";
}

?>


<html>
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/150952096069483-363x81.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="web/assets/se-icons/se-icons.css">
  <link rel="stylesheet" href="tether/tether.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="dropdown/css/style.css">
  <link rel="stylesheet" href="socicon/css/styles.css">
  <link rel="stylesheet" href="theme/css/style.css">
  <link rel="stylesheet" href="se/css/additional.css" type="text/css">
  
  
  
</head>
<body>
<section class="menu cid-qzHUSap4Iu" once="menu" id="menu1-e" data-rv-view="50">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="">
                         <img src="images/logonew.png" alt="" title="" media-simple="true" style="height: 4.2rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="../.com">
                        
                    </a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="">
                        </a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href=""><span class="mbri-home mbr-iconfont mbr-iconfont-btn" style="color: rgb(35, 35, 35);"></span>
                        Home</a></li><li class="nav-item">
                    <a class="nav-link link text-black display-4" href=""><span class="mbri-info mbr-iconfont mbr-iconfont-btn"></span>
                        
                        About Us
                    </a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href=""><span class="mbri-search mbr-iconfont mbr-iconfont-btn" style="color: rgb(35, 35, 35);"></span>
                        Find A Clinic</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href=""><span class="mbri-user mbr-iconfont mbr-iconfont-btn" style="color: rgb(35, 35, 35);"></span>
                        
                        Sign In</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href=""><span class="mbri-features mbr-iconfont mbr-iconfont-btn" style="color: rgb(35, 35, 35);"></span>
                        
                        Services
                    </a></li></ul>
            
        </div>
    </nav>
</section>

<section class="engine"><a href="/q">bootstrap slider</a></section><section class="carousel slide cid-qzLTVIWU7C" data-interval="false" id="slider1-j" data-rv-view="52">

    

	<div class="full-screen"><div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="8000"><ol class="carousel-indicators"><li data-app-prevent-settings="" data-target="#slider1-j" class=" active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#slider1-j" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider1-j" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#slider1-j" data-slide-to="3"></li></ol><div class="carousel-inner" role="listbox"><div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(images/singapore-harbour-skyline-night-2000x1336.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(35, 35, 35);"></div><img src="images/singapore-harbour-skyline-night-2000x1336.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1">WELCOME TO VITALITY</h2><p class="lead mbr-text mbr-fonts-style display-5"><span style="background-color:black">Click here to sign up and start booking your medical appoinment</p></p><span></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(images/diealone-1896x636.jpg);"><div class="container container-slide"><div class="image_wrapper"><img src="images/diealone-1896x636.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(images/eld2.0-1908x610.jpg);"><div class="container container-slide"><div class="image_wrapper"><img src="images/eld2.0-1908x610.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(images/upgrade1-1-1897x825.png);"><div class="container container-slide"><div class="image_wrapper"><img src="images/upgrade1-1-1897x825.png"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"></div></div></div></div></div></div><a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-j"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-j"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a></div></div>

</section>

<section class="features6 cid-qzM9AuPX2K mbr-parallax-background" id="features6-k" data-rv-view="67">
    
    

    
    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="assets/mbr-iconfont mbri-timer" media-simple="true"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">Queue Tracker</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Let your Clinic or Hospital update you  real-time without being physically there<br><br><strong><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong><br><br><br><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Get Started &gt;</strong></p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-search" media-simple="true"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">Search-Easy</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Need something checked without having to search numerous sources like a headless chicken? Our resource library is here for you.<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>Get Started &gt;</strong></p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-help" media-simple="true"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">Real-Time Chatroom</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Don't trust the internet? Not to worry, you can personally message your local doctor for a quick diagnosis<br><br><br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>Get Started &gt;</strong><br></p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-bookmark" media-simple="true"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">Book At Home</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Another feature is making appointments with your doctor at home. No need to call up the nurse. Just sign in and book at home.&nbsp;<br><br><br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>&nbsp; &nbsp; Get Started &gt;</strong></p>
                </div>
            </div>

        </div>

    </div>

</section>

<section once="" class="cid-qzMcQ8vtWW" id="footer7-m" data-rv-view="70">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a class="text-white mbr-bold" href="#" target="_blank">About us</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7"></li><li class="foot-menu-item mbr-fonts-style display-7"></li><li class="foot-menu-item mbr-fonts-style display-7"></li><li class="foot-menu-item mbr-fonts-style display-7"></li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="https://twitter.com" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com" target="_blank">
                            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://plus.google.com/u/0/" target="_blank">
                            <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.behance.net" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-skype socicon" media-simple="true"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2017 Vitality - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="web/assets/jquery/jquery.min.js"></script>
  <script src="popper/popper.min.js"></script>
  <script src="tether/tether.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="smooth-scroll/smooth-scroll.js"></script>
  <script src="dropdown/js/script.min.js"></script>
  <script src="jquery-mb-ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="jquery-mb-vimeo_player/jquery.mb.vimeo_player.js"></script>
  <script src="jarallax/jarallax.min.js"></script>
  <script src="bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="theme/js/script.js"></script>
  <script src="se-slider-video/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbri-down mbr-iconfont"></i></a></div>
 </body>
</html>