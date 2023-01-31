<?php
add_action( 'cmb2_admin_init', 'cmb2_Homepage_settings' );
add_action( 'cmb2_admin_init', 'cmb2_about_us' );
add_action( 'cmb2_admin_init', 'cmb2_services' );
add_action( 'cmb2_admin_init', 'cmb2_projects' );
add_action( 'cmb2_admin_init', 'cmb2_team' );
add_action( 'cmb2_admin_init', 'cmb2_career' );
add_action( 'cmb2_admin_init', 'cmb2_contact_us' );
add_action( 'cmb2_admin_init', 'project');
//projects();	
function project() {
	$prefix 	=	'rk_project';
	$cmb_projects = new_cmb2_box( array(
		'id'           => $prefix . 'projects_metabox',
		'title'        => __( 'Projects', 'cmb2' ),
		'object_types' => array( 'post', 'project' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );
	$cmb_projects->add_field( array(
			'name' => 'Project Name',
			'id'   => $prefix.'_name',
			'type' => 'text', 
	));
	$cmb_projects->add_field( array(
			'name' => 'Project Desc',
			'id'   => $prefix.'_desc',
			'type' => 'wysiwyg', 
	));
	$cmb_projects->add_field( array(
			'name' => 'Project Image',
			'id'   => $prefix.'_image',
			'type' => 'file', 
	));
	$cmb_projects->add_field( array(
			'name' => 'Project Show on Homepage',
			'id'   => $prefix.'_homepage',
			'type' => 'checkbox', 
	));
	$cmb_projects->add_field( array(
			'name' => 'Project Images',
			'id'   => $prefix.'_images',
			'type' => 'file_list', 
	));
	$labels = array(
		'name'               => _x( 'Projects', 'post type general name', 'rk' ),
		'singular_name'      => _x( 'Project', 'post type singular name', 'rk' ),
		'menu_name'          => _x( 'Project', 'admin menu', 'rk' ),
		'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'rk' ),
		'add_new'            => _x( 'Add New', 'Project', 'rk' ),
		'add_new_item'       => __( 'Add New Project', 'rk' ),
		'new_item'           => __( 'New Project', 'rk' ),
		'edit_item'          => __( 'Edit Project', 'rk' ),
		'view_item'          => __( 'View Project', 'rk' ),
		'all_items'          => __( 'All Projects', 'rk' ),
		'search_items'       => __( 'Search Projects', 'rk' ),
		'parent_item_colon'  => __( 'Parent Projects:', 'rk' ),
		'not_found'          => __( 'No Project found.', 'rk' ),
		'not_found_in_trash' => __( 'No Project found in Trash.', 'rk' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'rk' ),
		'public'             => true,
		'menu_icon'           => 'dashicons-portfolio',
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'project' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'menu_position'       => 5,
		'hierarchical'       => false,
		'supports'           => array( 'title')
	);

	register_post_type( 'Project', $args );
}
function cmb2_Homepage_settings() {
	$page = get_option( 'page_on_front' );
	if($page){
		/**
		 * Initiate the metabox
		 */
		$cmb = new_cmb2_box( array(
			'id'            => 'rk_metabox',
			'title'         => __( 'Home Page Content', 'cmb2' ),
			'object_types'  => array( 'page', ),
			'show_on'      => array('id' => array($page->ID) ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true, // Show field names on the left
		) );

		// Regular text field
		$cmb->add_field( array(
			'name'       => __( 'Site Name', 'cmb2' ),
			'desc'       => __( 'field description', 'cmb2' ),
			'id'         => 'rk_site_name',
			'type'       => 'text',
			'show_on_cb' => 'cmb2_hide_if_no_cats', 
		) );
		$cmb->add_field( array(
			'name'       => __( 'Welcome Text', 'cmb2' ),
			'desc'       => __( 'field description', 'cmb2' ),
			'id'         => 'rk_welcome_text',
			'type'       => 'text',
			'show_on_cb' => 'cmb2_hide_if_no_cats', 
		) );
		$cmb->add_field( array(
			'name'       => __( 'Logo', 'cmb2' ),
			'desc'       => __( 'field description', 'cmb2' ),
			'id'         => 'rk_logo',
			'type'       => 'file',
			'show_on_cb' => 'cmb2_hide_if_no_cats', 
		) );
		$cmb->add_field( array(
			'name'       => __( 'Quote Text', 'cmb2' ),
			'desc'       => __( 'field description', 'cmb2' ),
			'id'         => 'rk_quote_text',
			'type'       => 'text',
			'show_on_cb' => 'cmb2_hide_if_no_cats', 
		) );
		$cmb->add_field( array(
			'name'       => __( 'Site Title', 'cmb2' ),
			'desc'       => __( 'field description', 'cmb2' ),
			'id'         => 'rk_title',
			'type'       => 'text',
			'show_on_cb' => 'cmb2_hide_if_no_cats', 
		) );
		

		// URL text field
		$cmb->add_field( array(
			'name' => __( 'Website', 'cmb2' ),
			'desc' => __( 'field description', 'cmb2' ),
			'id'   => 'rk_website',
			'type' => 'text_url',
			
		) );
		$cmb->add_field( array(
			'name' => __( 'Facebook', 'cmb2' ),
			'desc' => __( 'field description', 'cmb2' ),
			'id'   => 'rk_facebook',
			'type' => 'text_url',
			
		) );
		$cmb->add_field( array(
			'name' => __( 'Instagram', 'cmb2' ),
			'desc' => __( 'field description', 'cmb2' ),
			'id'   => 'rk_instagram',
			'type' => 'text_url',
			
		) );
		
		$cmb->add_field( array(
			'name' => __( 'Twitter', 'cmb2' ),
			'desc' => __( 'field description', 'cmb2' ),
			'id'   => 'rk_twitter',
			'type' => 'text_url',
			
		) );
		$cmb->add_field( array(
			'name' => __( 'LinkedIn', 'cmb2' ),
			'desc' => __( 'field description', 'cmb2' ),
			'id'   => 'rk_linkedin',
			'type' => 'text_url',
			
		) );
		// Email text field
		$cmb->add_field( array(
			'name' => __( 'Email', 'cmb2' ),
			'desc' => __( 'field description', 'cmb2' ),
			'id'   => 'rk_email',
			'type' => 'text_email',
		) );
		$cmb->add_field( array(
			'name' => __( 'Email Subject', 'cmb2' ),
			'desc' => __( 'field description', 'cmb2' ),
			'id'   => 'rk_email_subject',
			'type' => 'text',
		) );
		$cmb->add_field( array(
			'name' => __( 'Email Body', 'cmb2' ),
			'desc' => __( 'field description', 'cmb2' ),
			'id'   => 'rk_email_body',
			'type' => 'text',
		) );
		$cmb->add_field( array(
			'name'       => __( 'Phone', 'cmb2' ),
			'desc'       => __( 'field description', 'cmb2' ),
			'id'         => 'rk_phone',
			'type'       => 'text',
			'show_on_cb' => 'cmb2_hide_if_no_cats', 
		) );
		$cmb->add_field( array(
			'name'       => __( 'Address', 'cmb2' ),
			'desc'       => __( 'field description', 'cmb2' ),
			'id'         => 'rk_address',
			'type'       => 'textarea',
			'show_on_cb' => 'cmb2_hide_if_no_cats', 
		) );

		// Add other metaboxes as needed
		$cmb1 = new_cmb2_box( array(
			'id'            => 'rk_metabox_1',
			'title'         => __( 'Home Page Section', 'cmb2' ),
			'object_types'  => array( 'page', ), 'show_on'      => array( 'key' => 'id', 'value' => array($page->ID) ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true, // Show field names on the left
		) );
		$cmb1->add_field( array(
			'name'       => __( 'Banner', 'cmb2' ),
			'desc'       => __( 'check to show the section', 'cmb2' ),
			'id'         => 'rk_banner_section',
			'type'       => 'checkbox',
			'show_on_cb' => 'cmb2_hide_if_no_cats', 
		) );
		$cmb1->add_field( array(
			'name'       => __( 'Services', 'cmb2' ),
			'desc'       => __( 'check to show the section', 'cmb2' ),
			'id'         => 'rk_service_section',
			'type'       => 'checkbox',
			'show_on_cb' => 'cmb2_hide_if_no_cats', 
		) );
		$cmb1->add_field( array(
			'name'       => __( 'About us', 'cmb2' ),
			'desc'       => __( 'check to show the section', 'cmb2' ),
			'id'         => 'rk_about_section',
			'type'       => 'checkbox',
			'show_on_cb' => 'cmb2_hide_if_no_cats', 
		) );
		$cmb1->add_field( array(
			'name'       => __( 'Counter Section', 'cmb2' ),
			'desc'       => __( 'check to show the section', 'cmb2' ),
			'id'         => 'rk_counter_section',
			'type'       => 'checkbox',
			'show_on_cb' => 'cmb2_hide_if_no_cats', 
		) );
		$cmb1->add_field( array(
			'name'       => __( 'Case Study', 'cmb2' ),
			'desc'       => __( 'check to show the section', 'cmb2' ),
			'id'         => 'rk_casestudy_section',
			'type'       => 'checkbox',
			'show_on_cb' => 'cmb2_hide_if_no_cats', 
		) );
		$cmb1->add_field( array(
			'name'       => __( 'FAQ', 'cmb2' ),
			'desc'       => __( 'check to show the section', 'cmb2' ),
			'id'         => 'rk_faq_section',
			'type'       => 'checkbox',
			'show_on_cb' => 'cmb2_hide_if_no_cats', 
		) );
		$cmb1->add_field( array(
			'name'       => __( 'Testimonial', 'cmb2' ),
			'desc'       => __( 'check to show the section', 'cmb2' ),
			'id'         => 'rk_testimonial_section',
			'type'       => 'checkbox',
			'show_on_cb' => 'cmb2_hide_if_no_cats', 
		) );
		$cmb1->add_field( array(
			'name'       => __( 'Expert Team', 'cmb2' ),
			'desc'       => __( 'check to show the section', 'cmb2' ),
			'id'         => 'rk_expert_section',
			'type'       => 'checkbox',
			'show_on_cb' => 'cmb2_hide_if_no_cats', 
		) );
		$cmb1->add_field( array(
			'name'       => __( 'Contact', 'cmb2' ),
			'desc'       => __( 'check to show the section', 'cmb2' ),
			'id'         => 'rk_contact_section',
			'type'       => 'checkbox',
			'show_on_cb' => 'cmb2_hide_if_no_cats', 
		) );
		$cmb1->add_field( array(
			'name'       => __( 'Information', 'cmb2' ),
			'desc'       => __( 'check to show the section', 'cmb2' ),
			'id'         => 'rk_info_section',
			'type'       => 'checkbox',
			'show_on_cb' => 'cmb2_hide_if_no_cats', 
		) );
	}
}
function cmb2_about_us() {
	$prefix 	=	'rk_about';
	$page = get_page_by_title('about-us');
	$cmb_about = new_cmb2_box( array(
		'id'           => $prefix . 'about_metabox',
		'title'        => __( 'About', 'cmb2' ),
		'object_types' => array( 'page' ),
		'show_on'      => array('id' => array($page->ID) ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );
	
	$cmb_about->add_field( array(
			'name' => 'Title',
			'desc' => __( 'field description', 'cmb2' ),
			'id'   => $prefix.'_title',
			'type' => 'text', // if not working then use wysiwg
	));
	$cmb_about->add_field( array(
			'name' => 'Desc',
			'desc' => __( 'field description', 'cmb2' ),
			'id'   => $prefix.'_desc',
			'type' => 'wysiwyg', // if not working then use wysiwg
	));
	$cmb_about->add_field( array(
			'name' => 'image',
			'desc' => __( 'field description', 'cmb2' ),
			'id'   => $prefix.'_image',
			'type' => 'file', // if not working then use wysiwg
	));
	$cmb_about->add_field( array(
			'name' => 'Button text',
			'desc' => __( 'field description', 'cmb2' ),
			'id'   => $prefix.'_button_text',
			'type' => 'text', // if not working then use wysiwg
	));
	$cmb_about->add_field( array(
			'name' => 'Button Link',
			'desc' => __( 'field description', 'cmb2' ),
			'id'   => $prefix.'_button_link',
			'type' => 'text_url', // if not working then use wysiwg
	));
	$cmb_about1 = new_cmb2_box( array(
		'id'           => $prefix . 'counter_metabox',
		'title'        => __( 'Counter', 'cmb2' ),
		'object_types' => array( 'page' ),
		'show_on'      => array('id' => array($page->ID) ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );
	$group_field_id = $cmb_about1->add_field( array(
		'id'          => $prefix.'counters',
		'type'        => 'group',		
		'options'     => array(
			'group_title'   => __( 'Counter {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add Another Counter', 'cmb2' ),
			'remove_button' => __( 'Remove Image', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => true, // true to have the groups closed by default
		),
	) );
	
	$cmb_about1->add_group_field($group_field_id, array(
		'name' => __( 'Counter Title', 'cmb2' ),
		'id' => $prefix . 'counter_title',
		'type' => 'text',
	) );
	$cmb_about1->add_group_field($group_field_id, array(
		'name' => __( 'Count', 'cmb2' ),
		'id' => $prefix . 'counter_count',
		'type' => 'text',
	) );
	$cmb_about1->add_group_field($group_field_id, array(
		'name' => __( 'Counter Image', 'cmb2' ),
		'id' => $prefix . 'counter_image',
		'type' => 'file',
	) );
	
}
function cmb2_services() {
	$prefix 	=	'rk_services';
	$page = get_page_by_title('services');
	$cmb_service = new_cmb2_box( array(
		'id'           => $prefix . '_metabox',
		'title'        => __( 'Services', 'cmb2' ),
		'object_types' => array( 'page' ),
		'show_on'      => array('id' => array($page->ID) ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );
	
	$cmb_service->add_field( array(
			'name' => 'Title',
			'desc' => __( 'field description', 'cmb2' ),
			'id'   => $prefix.'_title',
			'type' => 'text', // if not working then use wysiwg
	));
	$cmb_service->add_field( array(
			'name' => 'Desc',
			'desc' => __( 'field description', 'cmb2' ),
			'id'   => $prefix.'_desc',
			'type' => 'wysiwyg', // if not working then use wysiwg
	));
	$cmb_service1 = new_cmb2_box( array(
		'id'           => $prefix . 'services_metabox',
		'title'        => __( 'Services', 'cmb2' ),
		'object_types' => array( 'page' ),
		'show_on'      => array('id' => array($page->ID) ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );
	$group_field_id = $cmb_service1->add_field( array(
		'id'          => $prefix.'services',
		'type'        => 'group',		
		'options'     => array(
			'group_title'   => __( 'Services {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add Another Service', 'cmb2' ),
			'remove_button' => __( 'Remove Image', 'cmb2' ),
			'sortable'      => true, // beta
			'closed'     => true, // true to have the groups closed by default
		),
	) );
	
	$cmb_service1->add_group_field($group_field_id, array(
		'name' => __( 'Service Title', 'cmb2' ),
		'id' => $prefix . 'service_title',
		'type' => 'text',
	) );
	$cmb_service1->add_group_field($group_field_id, array(
		'name' => __( 'Service Desc', 'cmb2' ),
		'id' => $prefix . 'service_desc',
		'type' => 'text',
	) );
	$cmb_service1->add_group_field($group_field_id, array(
		'name' => __( 'Service Image', 'cmb2' ),
		'id' => $prefix . 'service_image',
		'type' => 'file',
	) );
}
function cmb2_projects() {
	$prefix 	=	'rk_projects';
	$page = get_page_by_title('projects');
	$cmb_project = new_cmb2_box( array(
		'id'           => $prefix . 'project_metabox',
		'title'        => __( 'Projects', 'cmb2' ),
		'object_types' => array( 'page' ),
		'show_on'      => array('id' => array($page->ID) ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );
	
	$cmb_project->add_field( array(
			'name' => 'Project Title',
			'id'   => $prefix.'_title',
			'type' => 'text', // if not working then use wysiwg
	));
	$cmb_project->add_field( array(
			'name' => 'Project Desc',
			'id'   => $prefix.'_desc',
			'type' => 'text', // if not working then use wysiwg
	));
	$cmb_project->add_field( array(
			'name' => 'More Text',
			'id'   => $prefix.'_moretext',
			'type' => 'text', // if not working then use wysiwg
	));
	$cmb_project->add_field( array(
			'name' => 'More Link',
			'id'   => $prefix.'_morelink',
			'type' => 'text_url', // if not working then use wysiwg
	));
}
function cmb2_team() {
	$page = get_page_by_title( 'Home' );
	$page = get_page_by_title('contact-us');
	$cmb_contact = new_cmb2_box( array(
		'id'           => $prefix . 'contact_metabox',
		'title'        => __( 'Metabox contact', 'cmb2' ),
		'object_types' => array( 'page' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );
	
	$cmb_contact->add_field( array(
			'name' => 'Text editor',
			'id'   => $prefix.'contact_form',
			'type' => 'wysiwyg', // if not working then use wysiwg
	));
}
function cmb2_career() {
	$page = get_page_by_title( 'Home' );
	$page = get_page_by_title('contact-us');
	$cmb_contact = new_cmb2_box( array(
		'id'           => $prefix . 'contact_metabox',
		'title'        => __( 'Metabox contact', 'cmb2' ),
		'object_types' => array( 'page' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );
	
	$cmb_contact->add_field( array(
			'name' => 'Text editor',
			'id'   => $prefix.'contact_form',
			'type' => 'wysiwyg', // if not working then use wysiwg
	));
}
function cmb2_contact_us() {
	$page = get_page_by_title('contact-us');
	$cmb_contact = new_cmb2_box( array(
		'id'           => $prefix . 'contact_metabox',
		'title'        => __( 'Metabox contact', 'cmb2' ),
		'object_types' => array( 'page' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );
	
	$cmb_contact->add_field( array(
			'name' => 'Text editor',
			'id'   => $prefix.'contact_form',
			'type' => 'wysiwyg', // if not working then use wysiwg
	));
}
?>