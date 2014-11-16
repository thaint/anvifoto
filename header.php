<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1 ,user-scalable=no">
	<title>
		<?php wp_title( '|', true, 'right' ); ?>
	</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
    
        
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<!-- HEADER -->
	<header>
    	<div class="navToggle12">
            <div class="icon"></div>
        </div>
    	<a href="#" class="logo-wrapper">
        	<img src="<?php echo get_template_directory_uri(); ?>/img/logo-anvi.png" alt="logo">
        </a>
    </header>
	<!-- END / HEADER -->
    
    <!-- MENU -->
	<section id="main-menu-wrapper">
    	<img class="office-img" src="<?php echo get_template_directory_uri(); ?>/img/office-studio.jpg" alt="office">
        <nav id="main-menu-vertical">
            <ul class="main-menu">
                <li class="current-menu"><a href="#">my studio</a></li>
                <li><a href="#">my album</a>
                    <ul class="sub-menu">
                        <li><a href="#">wedding shoot</a></li>
                        <li><a href="#">natural shoot</a></li>
                        <li><a href="#">product shoot</a></li>
                        <li><a href="#">bussiness shoot</a></li>
                        <li><a href="#">portrait shoot</a></li>
                    </ul>
                </li>
                <li><a href="#">my story</a></li>
                <li class="contact-link"><a href="#">contact</a></li>
            </ul>
        </nav>
    </section>
	<!-- END / MENU -->
    
    <!-- BREADCRUMB -->
	<section id="breadcrumb-wrapper">
    	<!--
    	<div class="quote-wrapper">
        	<div class="blockquote">
            	“When <span class="color-main">words</span> become unclear, I shall focus with photographs. When <span class="color-main">images</span> become inadequate, I shall be content with silence.”
            </div>
            <span class="img-author">
                <img src="<?php echo get_template_directory_uri(); ?>/img/author-img.jpg" alt="avatar">
            </span>
        </div>
        -->
        <div class="info-gallery-wrapper">
        	<img class="office-img" src="<?php echo get_template_directory_uri(); ?>/img/office-studio.jpg" alt="office">
            <div class="info-gallery">
            	<h1 class="title-info-gallery"><span class="sub-title-gallery">You are viewing</span>wedding shoot</h1>
                <p class="content-info-gallery">
                	“To love someone deeply gives you strength. Being loved by someone deeply gives you courage.“
                </p>
                <a href="#" class="btn-sumary">CONTACT</a>
            </div>
        </div>
    </section>
	<!-- END / BREADCRUMB -->
    
    <!-- CONTACT -->
	<section id="contact-wrapper">
    	<img class="office-img" src="<?php echo get_template_directory_uri(); ?>/img/office-studio.jpg" alt="office">
        <ul class="info-user">
        	<li><i class="fa fa-user"></i> <span class="content-info">Nguyen An Vinh</span></li>
            <li><i class="fa fa-phone"></i> <span class="content-info">090.3655.888</span></li>
            <li><i class="fa fa-envelope"></i> <span class="content-info">vinh.cdco@gmail.com</span></li>
            <li><i class="fa fa-map-marker"></i> <span class="content-info">123. Huynh Van Banh</span></li>
            <li><i class="fa fa-facebook"></i> <span class="content-info">/anviphotography</span></li>
        </ul>
    </section>
	<!-- END / CONTACT -->