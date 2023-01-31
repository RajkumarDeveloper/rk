<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rk
 * @subpackage rk
 * @since 1.0.0
 */
 $page			=	get_page_by_title('Home');
 $rk_address	=	get_post_meta( $page->ID, 'rk_address', true );
$rk_phone	=	get_post_meta( $page->ID, 'rk_phone', true );
$rk_website	=	get_post_meta( $page->ID, 'rk_website', true );
$rk_facebook	=	get_post_meta( $page->ID, 'rk_facebook', true );
$rk_instagram	=	get_post_meta( $page->ID, 'rk_instagram', true );
$rk_twitter	=	get_post_meta( $page->ID, 'rk_twitter', true );
$rk_linkedin	=	get_post_meta( $page->ID, 'rk_linkedin', true );
$rk_email	=	get_post_meta( $page->ID, 'rk_email', true );
$rk_email_subject	=	get_post_meta( $page->ID, 'rk_email_subject', true );
$rk_email_body	=	get_post_meta( $page->ID, 'rk_email_body', true );
?>
 <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p>
                                    <a href="mailto:<?php echo $rk_email;?>?subject=<?php echo $rk_email_subject;?>&body=<?php echo $rk_email_body;?>"> <i class="fa fa-envelope"></i> <?php echo $rk_email;?></a> <br>
                                    <a href="tel:+91<?php echo $rk_phone;?>"> <i class="fa fa-phone"></i> +91 <?php echo $rk_phone;?></a> <br><?php echo $rk_address;?>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="<?php echo $rk_facebook;?>">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $rk_twitter;?>">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $rk_instagram;?>">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Services
                            </h3>
                            <ul>
                                <li><a href="#">Marketing & SEO</a></li>
                                <li><a href="#"> Startup</a></li>
                                <li><a href="#">Finance solution</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Travel</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Useful Links
                            </h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#"> Contact</a></li>
                                <li><a href="#">Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget">
                                    <h3 class="footer_title">
                                            Subscribe
                                    </h3>
									
									<?php echo do_shortcode( '[email-subscribers-form id="2"]' ); ?>
                                    <!--form action="#" class="newsletter_form">
                                        <input type="text" placeholder="Enter your mail">
                                        <button type="submit">Subscribe</button>
                                    </form-->
                                    
                                </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
						&copy;<?php
							echo date_i18n(
								
								_x( 'Y', 'copyright date format', 'rk' )
							);
							?>
						 All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!--/ footer end  -->
		<?php wp_footer(); ?>

	</body>
</html>
