<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RK
 * @subpackage RK
 * @since 1.0.0
 */

get_header();
?>
  <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>Big Opportunity <br>
                                        for your Business</h3>
                                <div class="video_service_btn">
                                    <a href="#" class="boxed-btn3">Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>What we Do?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg_icon/1.svg" alt="">
                        </div>
                        <h3>Marketing & SEO Agency</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        <a href="#" class="learn_more">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg_icon/2.svg" alt="">
                        </div>
                        <h3>Startup Agency</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        <a href="#" class="learn_more">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg_icon/3.svg" alt="">
                        </div>
                        <h3>Corporate Business</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        <a href="#" class="learn_more">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg_icon/4.svg" alt="">
                        </div>
                        <h3>Finance Solution</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        <a href="#" class="learn_more">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg_icon/5.svg" alt="">
                        </div>
                        <h3>Food & Restaurant</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        <a href="#" class="learn_more">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg_icon/6.svg" alt="">
                        </div>
                        <h3>Travel Agency </h3>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        <a href="#" class="learn_more">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->

    <!-- about_info_area start  -->
    <div class="about_info_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about_text">
                        <h3>Why our Consulting?</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem.
                            It esteems luckily or picture placing drawing. Apartments frequently or motionless on reasonable.</p>
                            <a href="#" class="boxed-btn3">About Us</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about_thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/about.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /about_info_area end  -->

    <!-- counter_area  -->
    <div class="counter_area counter_bg_1 overlay_03">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg_icon/group.svg" alt="">
                        </div>
                        <h3> <span class="counter">10</span> <span> +</span> </h3>
                        <p>Team Members</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg_icon/cart.svg" alt="">
                        </div>
                        <h3> <span class="counter">99</span> <span>%</span> </h3>
                        <p>Business Success</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg_icon/heart.svg" alt="">
                        </div>
                        <h3> <span class="counter">10</span></h3>
                        <p>Happy Client</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg_icon/respect.svg" alt="">
                        </div>
                        <h3> <span class="counter">10</span> </h3>
                        <p>Business Done</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /counter_area  -->

    <!-- case_study_area  -->
    <div class="case_study_area">
        <div class="container">
            <div class="border_bottom">
                    <div class="row">
                            <div class="col-xl-12">
                                <div class="section_title text-center mb-40">
                                    <h3>Case Study</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="case_active owl-carousel">
                                        <div class="single_case">
                                                <div class="case_thumb">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case/1.png" alt="">
                                                    </div>
                                            <div class="case_heading">
                                                    <span>Finance Solution</span>
                                                    <h3><a href="#">Consumer Products Consulting</a></h3>
                                            </div>
                                        </div>
                                        <div class="single_case">
                                                <div class="case_thumb">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case/2.png" alt="">
                                                    </div>
                                            <div class="case_heading">
                                                    <span>Finance Solution</span>
                                                    <h3><a href="#">Consumer Products Consulting</a></h3>
                                            </div>
                                        </div>
                                        <div class="single_case">
                                                <div class="case_thumb">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case/3.png" alt="">
                                                    </div>
                                            <div class="case_heading">
                                                    <span>Finance Solution</span>
                                                    <h3><a href="#">Consumer Products Consulting</a></h3>
                                            </div>
                                        </div>
                                        <div class="single_case">
                                                <div class="case_thumb">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case/1.png" alt="">
                                                    </div>
                                            <div class="case_heading">
                                                    <span>Finance Solution</span>
                                                    <h3><a href="#">Consumer Products Consulting</a></h3>
                                            </div>
                                        </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="more_close_btn text-center">
                                    <a href="#" class="boxed-btn3-line">More Cases</a>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    <!-- /case_study_area  -->

    <!-- accordion  -->
    <div class="accordion_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="accordion_thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/accordion.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq_ask">
                            <h3>Frequently ask</h3>
                                <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            Adieus who direct esteem <span>It esteems luckily?</span>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                                                <div class="card-body">Esteem spirit temper too say adieus who direct esteem esteems luckily or picture placing drawing.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                            Who direct esteem It esteems?
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                                <div class="card-body">Esteem spirit temper too say adieus who direct esteem esteems luckily or picture placing drawing.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            Duis consectetur feugiat auctor?
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                                <div class="card-body">Esteem spirit temper too say adieus who direct esteem esteems luckily or picture placing drawing.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- accordion  -->

    <div class="testimonial_area overlay ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg_icon/quote.svg" alt="">
                                        </div>
                                        <p>All is Well <br> 
                                                Say what you need and we’ll do it for you! </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-32x32.png" alt="">
                                            </div>
                                            <h3>Rajkumar</h3>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- team_area  -->
    <div class="team_area">
            <div class="container">
                <div class="border_bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section_title mb-40 text-center">
                                <h3>
                                        Expert Team
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       
                       
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single_team">
                                <div class="team_thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/1.jpg" alt="">
                                </div>
                                <div class="team_info text-center">
                                    <h3>Rajkumar</h3>
                                    <p>Managing Director</p>
                                    <div class="social_link">
                                        <ul>
											 
                                           
                                           
                                            <li> <a href="https://www.facebook.com/Developerrajkumar">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            </li>
                                            <li> <a href="https://twitter.com/smilerajkumar">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            </li>
                                            <li> <a href="https://www.linkedin.com/in/rajkumar-b-a57954bb">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /team_area  -->

    <div class="contact_form_quote">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="form_wrap">
                            <h3>Get Free Quote</h3>
							<?php echo do_shortcode( '[contact-form-7 id="31" title="Contact form 1"]' ); ?>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6">
                    <div class="contact_thumb">
					<?php echo do_shortcode( '[vsgmap address="Pudhucherry,India"]' ); ?>
                        <!--img src="<?php //echo get_template_directory_uri(); ?>/assets/img/banner/contact_thumb.png" alt=""-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Information_area  -->
    <div class="Information_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-8">
                    <div class="info_text text-center">
                        <h3>For Any Information Call Us</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        <a class="boxed-btn3"  href="tel:+919600689006"> +91 9600689006</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();
?>