<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Uniocde -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]>
    <meta http-equiv="X-UA Compatible" content="IE=edge">
    <![endif]-->
  <!-- Title -->
  <title>Online Share Trading & Stock Broking in India at low brokerage - Nuuu</title>
  <meta name="keywords"
    content="Online Share Trading, Investment Broker in India, Stock Trading in India, online trading, share trading, stock trading, share broker, online trading india, online stock trading, online stock broker">
  <meta name="description"
    content="Nuuu - Offers online stock trading platform in India with ZERO cost brokerage services. We offer futures and options, mutual funds, IPO and insurance. Open your Demat account now." />
  <meta name="robots" content="index, follow" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Online Share Trading & Stock Broking in India at low brokerage - Nuuu" />
  <meta name="google-site-verification" content="JbeLlpe8Cw18J8hTfCDy-9BEXXTQsz1IYB5y-UC1eh0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.svg">
  <!-- Animations -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>

  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/menu.css" type="text/css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    .navigation_area .desktop_menu {display: none;}
  </style>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.4.1.min.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-215560770-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-215560770-1');
  </script>
  <script src="https://www.googleoptimize.com/optimize.js?id=OPT-MJQ6MLQ"></script>
<?php wp_head(); ?>
</head>
<body class="sticky-header">

<header>
    <div id="rt-sticky-placeholder"></div>
    <div id="header_area" class="header_area cbp-af-header">
      <div class="navigation_area">
        <div class="container">
          <div class="navigation">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="navbar-brand logo_area">
                <span class="icon">
                  <?php the_custom_logo() ?>
                </span>
              </div>              
              <div class="classynav collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav dropdown">
                <?php
                	wp_nav_menu( array(
                		'theme-location' => 'primry'
                	) );
                ?>
                </div>	

              </div>
              <div class="top_header_cell_right">
                <div class="top_header_button">
                  <div class="top_header_search_area">
                    <a href="javascript:void(0)" class="search_btn mobile_search">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/search.svg" class="img-fluid search_icon_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/close.svg" class="img-fluid close_icon_img">
                    </a>

                    <div class="header_search_area">                       
                        <?php// get_search_form(); ?>
                       
                      <div class="header_search_areainner"> 
                        <?php echo do_shortcode( '[ivory-search id="314"]' ); ?>
                     <!-- <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
                           <label class="screen-reader-text" for="s">Search for:</label> 
                         <button class="header_search_btn" id="searchsubmit" value="Search" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/search.svg" class="img-fluid"></button>
                          <input class="header_search_input" value="" name="s" id="s" type="text" placeholder="<?php the_search_query(); ?>"> 
                      </form>-->
                      </div>
                    </div>
                 
                  </div>
                   <a href="https://www.nuuu.com/kyc" target="_blank" class="theme_btn login_btn mr-0"><span class="txt">Sign In</span></a>
                  <a href="https://www.nuuu.com/kyc" target="_blank" class="theme_btn login_btn"><span class="txt">Sign Up</span></a>
                  <button class="navbar-toggler mobile_menu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/menu.svg" class="img-fluid">
                  </button>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
</header>

