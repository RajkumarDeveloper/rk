<?php
/**
 * RK functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RK
 * @subpackage RK
 * @since 1.0.0
 */
$page			=	get_page_by_title('Home');
$rk_banner_section	=	get_post_meta( $page->ID, 'rk_banner_section', true );
$rk_service_section	=	get_post_meta( $page->ID, 'rk_service_section', true );
$rk_about_section	=	get_post_meta( $page->ID, 'rk_about_section', true );
$rk_counter_section	=	get_post_meta( $page->ID, 'rk_counter_section', true );
$rk_casestudy_section	=	get_post_meta( $page->ID, 'rk_casestudy_section', true );
$rk_faq_section	=	get_post_meta( $page->ID, 'rk_faq_section', true );
$rk_testimonial_section	=	get_post_meta( $page->ID, 'rk_testimonial_section', true );
$rk_expert_section	=	get_post_meta( $page->ID, 'rk_expert_section', true );
$rk_contact_section	=	get_post_meta( $page->ID, 'rk_contact_section', true );
$rk_info_section	=	get_post_meta( $page->ID, 'rk_info_section', true );
$rk_phone	=	get_post_meta( $page->ID, 'rk_phone', true );
$rk_facebook	=	get_post_meta( $page->ID, 'rk_facebook', true );
$rk_instagram	=	get_post_meta( $page->ID, 'rk_instagram', true );
$rk_twitter	=	get_post_meta( $page->ID, 'rk_twitter', true );
$rk_linkedin	=	get_post_meta( $page->ID, 'rk_linkedin', true );
?>
<?php if(isset($rk_banner_section) && $rk_banner_section!=''){ ?>
 <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active ">
		<?php echo do_shortcode('[layerslider id="1"]');?>
            
        </div>
    </div>
    <!-- slider_area_end -->
<?php }if(isset($rk_about_section) && $rk_about_section!=''){ 
$page = get_page_by_path('about-us');
$prefix 	=	'rk_about';
$about_us_title	=	get_post_meta( $page->ID, $prefix.'_title', true );
$about_us_desc	=	get_post_meta( $page->ID, $prefix.'_desc', true );
$about_us_image	=	get_post_meta( $page->ID, $prefix.'_image', true );
$about_us_button_text	=	get_post_meta( $page->ID, $prefix.'_button_text', true );
$about_us_button_link	=	get_post_meta( $page->ID, $prefix.'_button_link', true );


?>
<section id="about-us">
    <!-- about_info_area start  -->
    <div class="about_info_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about_text">
                        <h3><?php echo $about_us_title;?></h3>
                        <p><?php echo $about_us_desc;?></p>
                            <a href="<?php echo $about_us_button_link;?>" class="boxed-btn3"><?php echo $about_us_button_text;?></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about_thumb">
                        <img src="<?php echo $about_us_image;?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- /about_info_area end  -->
<?php }if(isset($rk_counter_section) && $rk_counter_section!=''){ 
$page = get_page_by_path('about-us');
$prefix 	=	'rk_about';
$about_us_counters	=	get_post_meta( $page->ID, $prefix.'counters', true );
?>
    <div class="counter_area counter_bg_1 overlay_03">
        <div class="container">
            <div class="row">
				<?php 
				if(isset($about_us_counters) && !empty($about_us_counters)){
					foreach($about_us_counters as $value){ ?>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="<?php echo $value[$prefix.'counter_image'];?>" alt="">
                        </div>
                        <h3> <span class="counter"><?php echo $value[$prefix.'counter_count'];?></h3>
                        <p><?php echo $value[$prefix.'counter_title'];?></p>
                    </div>
                </div>
				<?php }} ?>
            </div>
        </div>
    </div>
    <!-- /counter_area  -->
<?php }if(isset($rk_service_section) && $rk_service_section!=''){ 
$page = get_page_by_path('services');
$prefix 	=	'rk_services';
$services_title	=	get_post_meta( $page->ID, $prefix.'_title', true );
$services_desc	=	get_post_meta( $page->ID, $prefix.'_desc', true );
$services	=	get_post_meta( $page->ID, $prefix.'services', true );
?>
<section id="services">
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3><?php echo $services_title;?></h3>
						<p><?php echo $services_desc;?></p>
                    </div>
                </div>
            </div>
            <div class="row">
				<?php 
				if(isset($services) && !empty($services)){
					foreach($services as $value){ ?>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="<?php echo $value[$prefix.'service_image'];?>" alt="">
                        </div>
                        <h3><?php echo $value[$prefix.'service_title'];?></h3>
                        <p><?php echo $value[$prefix.'service_desc'];?></p>
                        <!--a href="#" class="learn_more">Learn More</a-->
                    </div>
                </div>
				<?php } } ?>
            </div>
        </div>
    </div>
</section>
<?php }if(isset($rk_casestudy_section) && $rk_casestudy_section!=''){ 
$page = get_page_by_path('projects');
$prefix 	=	'rk_projects';
$project_title	=	get_post_meta( $page->ID, $prefix.'_title', true );
$project_desc	=	get_post_meta( $page->ID, $prefix.'_desc', true );
$project_more_text	=	get_post_meta( $page->ID, $prefix.'_moretext', true );
$project_more_link	=	get_post_meta( $page->ID, $prefix.'_morelink', true );
$prefix 	=	'rk_project';
$args = array(
		'posts_per_page' => 3,
		'post_status'	 => 'publish',
		'post_type'	     => 'project',
		'meta_query' => array(
            array(
                'key'     => $prefix.'_homepage',
                'value'   => 'on', 
                'compare' => '=',
            )
         ),
		'offset'         => 0,	
		'order'          => 'ASC',
	);
	$projects = get_posts($args);

?>
<section id="projects">
    <div class="case_study_area">
        <div class="container">
            <div class="border_bottom">
                    <div class="row">
                            <div class="col-xl-12">
                                <div class="section_title text-center mb-40">
                                    <h3><?php echo $project_title;?></h3>
                                    <p><?php echo $project_desc;?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
							
                            <div class="col-xl-12">
                                <div class="case_active">
										<?php 
									if(isset($projects) && !empty($projects)){
									foreach($projects as $value){ 
									
									$project_name	=	get_post_meta( $value->ID, $prefix.'_title', true );
									$project_desc	=	get_post_meta( $value->ID, $prefix.'_desc', true );
									$project_image	=	get_post_meta( $value->ID, $prefix.'_image', true );
									?>
                                        <div class="single_case">
                                                <div class="case_thumb">
                                                        <img src="<?php echo $project_image;?>" alt="">
                                                    </div>
                                            <div class="case_heading">
                                                    <span><?php echo $project_name;?></span>
                                                    <h3><a href="#"><?php echo $project_desc;?></a></h3>
                                            </div>
                                        </div>
										<?php } } ?>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="more_close_btn text-center">
                                    <a href="<?php echo $project_more_link;?>" class="boxed-btn3-line"><?php echo $project_more_text;?></a>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</section>
<?php }if(isset($rk_faq_section) && $rk_faq_section!=''){ ?>
<section id="career">
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
</section>
<?php }if(isset($rk_testimonial_section) && $rk_testimonial_section!=''){ ?>
<section id="testimonial">
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
</section>
<?php }if(isset($rk_expert_section) && $rk_expert_section!=''){ ?>
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
											 
                                           
                                           
                                            <li> <a href="<?php echo $rk_facebook;?>">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            </li>
                                            <li> <a href="<?php echo $rk_twitter;?>">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            </li>
                                            <li> <a href="<?php echo $rk_linkedin;?>">
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
<?php }if(isset($rk_contact_section) && $rk_contact_section!=''){ ?>
<section id="contact-us">
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
</section>
<?php }if(isset($rk_info_section) && $rk_info_section!=''){ ?>
    <!-- Information_area  -->
    <div class="Information_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-8">
                    <div class="info_text text-center">
                        <h3>For Any Information Call Us</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        <a class="boxed-btn3"  href="tel:+91<?php echo $rk_phone;?>"> +91 <?php echo $rk_phone;?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

