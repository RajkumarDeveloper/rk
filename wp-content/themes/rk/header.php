<?php
/**
 * Header file for the RK WordPress default theme.
 *
 *
 * @package Rk
 * @subpackage rk
 * @since 1.0.0
 */
$page			=	get_page_by_title('Home');
$rk_title	=	get_post_meta( $page->ID, 'rk_title', true );
$rk_welcome_text	=	get_post_meta( $page->ID, 'rk_welcome_text', true );
$rk_site_name	=	get_post_meta( $page->ID, 'rk_site_name', true );
$rk_logo	=	get_post_meta( $page->ID, 'rk_logo', true );
$rk_quote_text	=	get_post_meta( $page->ID, 'rk_quote_text', true );
$rk_website	=	get_post_meta( $page->ID, 'rk_website', true );
$rk_facebook	=	get_post_meta( $page->ID, 'rk_facebook', true );
$rk_instagram	=	get_post_meta( $page->ID, 'rk_instagram', true );
$rk_twitter	=	get_post_meta( $page->ID, 'rk_twitter', true );
$rk_linkedin	=	get_post_meta( $page->ID, 'rk_linkedin', true );
$rk_email	=	get_post_meta( $page->ID, 'rk_email', true );
$rk_email_subject	=	get_post_meta( $page->ID, 'rk_email_subject', true );
$rk_email_body	=	get_post_meta( $page->ID, 'rk_email_body', true );
$rk_phone	=	get_post_meta( $page->ID, 'rk_phone', true );
$rk_address	=	get_post_meta( $page->ID, 'rk_address', true );

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $rk_title;?></title>
    <meta name="description" content="we can give a best website that what in your mind with cheap and best.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#0181f5">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon.ico">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/android-chrome-192x192" sizes="192x192">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-16x16.png" sizes="16x16">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="translucent">
	<!-- CSS  -->
	<?php wp_head(); ?>
    
</head>
	<body <?php body_class(); ?>>

		<?php
		//wp_body_open();
		?>
		 <!--header-->
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-md-5 ">
                            <div class="header_left">
                                <p><?php echo $rk_welcome_text;?></p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-md-7">
                            <div class="header_right d-flex">
                                    <div class="short_contact_list">
                                            <ul>
                                                <li><a href="mailto:<?php echo $rk_email;?>?subject=<?php echo $rk_email_subject;?>&body=<?php echo $rk_email_body;?>"> <i class="fa fa-envelope"></i> <?php echo $rk_email;?></a></li>
                                                <li><a href="tel:+91<?php echo $rk_phone;?>"> <i class="fa fa-phone"></i>+91 <?php echo $rk_phone;?></a></li>
                                            </ul>
                                        </div>
                                        <div class="social_media_links">
                                            <a href="<?php echo $rk_linkedin;?>">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                            <a href="<?php echo $rk_facebook;?>">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="<?php echo $rk_twitter;?>">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo" >
                                    <a href="index.html" style="color: white;font-size: 1.25rem;">
                                        <img src="<?php echo $rk_logo; ?>" alt=""><?php echo $rk_site_name;?>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
									<nav  id="site-navigation" role="navigation" class="site-navigation main-navigation">
										<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
									</nav>
                                    <!--nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.html">home</a></li>
                                            <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="case_details.html">case details</a></li>
                                                        <li><a href="about.html">about</a></li>
                                                        <li><a href="elements.html">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="study.html">Case study</a></li>
                                            <li><a href="#">blog <i class="fa fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav-->
                                </div>
                            </div>
							<div class="col-lg-1 col-md-1 col-6">
								<div class="search-box">
									<button type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i></button>
								</div>
							</div>
                            <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a  href="#"><?php echo $rk_quote_text;?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-body">
										<div class="serach_inner">
											<?php get_search_form(); ?>
										</div>
									</div>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>
							</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->