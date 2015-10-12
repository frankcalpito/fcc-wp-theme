<?php

function fcc_customize_basic_settings( $wp_customize ) {
	
	//Sections addition
	$wp_customize->add_section(
        'basic_settings_section',
        array(
            'title' => 'Basic Settings',
            'description' =>'Change copyright text and others.',
            'priority' => 35,
        )
    );

	//settings addition
	$wp_customize->add_setting(
    	'copyright_textbox',
	    array(
	        'default' => 'Default copyright text'
	    )
	);

	$wp_customize->add_setting(
    	'hide_copyright_text'
	);

	$wp_customize->add_setting(
    	'hide_copyright_year'
	);

	$wp_customize->add_setting(
    	'logo_placement',
    	array(
        'default' => 'left',
    	)
	);

	$wp_customize->add_setting(
    	'logo_width',
    	array(
        'default' => '200px',
        'sanitize_callback'  => 'sanitize_px',
    	)
	);

	$wp_customize->add_setting(
    	'logo_height',
    	array(
        'default' => '200px',
        'sanitize_callback'  => 'sanitize_px',
    	)
	);

	$wp_customize->add_setting( 
		'fcc_logo' 
	);


	//control addition
	$wp_customize->add_control(
    	'copyright_textbox',
    	array(
        'label' => 'Copyright text',
        'section' => 'basic_settings_section',
        'type' => 'text',
    	)
	);

	$wp_customize->add_control(
	    'hide_copyright_text',
	    array(
	        'type' => 'checkbox',
	        'label' => 'Hide copyright text',
	        'section' => 'basic_settings_section',
  	    )
	);

	$wp_customize->add_control(
	    'hide_copyright_year',
	    array(
	        'type' => 'checkbox',
	        'label' => 'Hide copyright year',
	        'section' => 'basic_settings_section',
  	    )
	);

	$wp_customize->add_control(
	    'logo_placement',
	    array(
	        'type' => 'radio',
	        'label' => 'Logo position',
	        'section' => 'basic_settings_section',
	        'choices' => array(
	            'left' => 'Left',
	            'right' => 'Right',
	            'center' => 'Center',
	        ),
	    )
	);

	$wp_customize->add_control(
    	'logo_width',
    	array(
        'label' => 'Logo Width',
        'section' => 'basic_settings_section',
        'type' => 'text',
        'transport' => 'postMessage'
    	)
	);

	$wp_customize->add_control(
    	'logo_height',
    	array(
        'label' => 'Logo Height',
        'section' => 'basic_settings_section',
        'type' => 'text',
        'transport' => 'postMessage'
    	)
	);

	$wp_customize->add_control( 
		new WP_Customize_Image_Control( $wp_customize, 'fcc_logo', 
			array(
		    	'label'    => __('Logo', 'fcc'),
		    	'section'  => 'basic_settings_section',
		    	'settings' => 'fcc_logo',
			) 
		) 
	);

	

	// $wp_customize->add_control(
	//     new WP_Customize_Header_Image_Control(
	//         $wp_customize,
	//         'fcc_header_bg_image',
	//         array(
	//             'label'    => 'Header Background Image',
	//             'settings' => 'tcx_background_image',
	//             'section'  => 'basic_settings_section'
	//         )
	// 	)
	// );
}

add_action( 'customize_register', 'fcc_customize_basic_settings' );

function fcc_customize_other_settings( $wp_customize ) {

	$wp_customize->add_section(
        'header_navigation_settings_section',
        array(
            'title' => 'Header nav area settings',
            'description' =>'Change header navigation.',
            'priority' => 36,
        )
    );

	$wp_customize->add_setting(
    	'hn_position',
	    array(
	        'default'   => 'left'
	    )
	);

	$wp_customize->add_control(
	    'hn_position',
	    array(
	        'type' => 'radio',
	        'label' => 'navigation position',
	        'section' => 'header_navigation_settings_section',
	        'choices' => array(
	            'left' => 'Left',
	            'right' => 'Right',
	            'center' => 'Center',
	            'justify' => 'Justify'
	        ),
	    )
	);

	$wp_customize->add_setting(
    	'fcc_brand'
	);

	$wp_customize->add_setting(
    	'hide_fcc_brand'
	);

	$wp_customize->add_control(
    	'fcc_brand',
    	array(
        'label' => 'Nav brand text',
        'section' => 'header_navigation_settings_section',
        'type' => 'text',
    	)
	);

	$wp_customize->add_control(
	    'hide_fcc_brand',
	    array(
	        'type' => 'checkbox',
	        'label' => 'Hide nav brand',
	        'section' => 'header_navigation_settings_section',
  	    )
	);

}

add_action( 'customize_register', 'fcc_customize_other_settings' );

function fcc_customize_theme_settings( $wp_customize ) {

	$wp_customize->add_section(
        'theme_settings_section',
        array(
            'title' => 'Theme Settings',
            'description' =>'Change theme layout or color schemes',
            'priority' => 33,
        )
    );

	//boxed
	$wp_customize->add_setting(
    	'boxed_layout'
	);

	$wp_customize->add_control(
	    'boxed_layout',
	    array(
	        'type' => 'checkbox',
	        'label' => 'Boxed layout (untick for full_width)',
	        'section' => 'theme_settings_section',
  	    )
	);

	//main content color
	$wp_customize->add_setting(
    	'primary_color',
    	array(
    			'default' => '#333333'
    		)
	);

	$wp_customize->add_control( 
		new WP_Customize_Color_Control( $wp_customize, 'primary_color', 
			array(
		    	'label'    => __('Main content color'),
		    	'section'  => 'theme_settings_section',
		    	'settings' => 'primary_color'
			) 
		) 
	);

	//main content bg color
	$wp_customize->add_setting(
    	'primary_bg_color',
    	array(
    			'default' => '#FFFFFF'
    		)
	);

	$wp_customize->add_control( 
		new WP_Customize_Color_Control( $wp_customize, 'primary_bg_color', 
			array(
		    	'label'    => __('Main content background color'),
		    	'section'  => 'theme_settings_section',
		    	'settings' => 'primary_bg_color'
			) 
		) 
	);

	//Website bg image
	$wp_customize->add_setting(
	    'fcc_body_bg_image',
	    array(
	        'default'      => '',
	        'transport'    => 'postMessage'
		)
	);

	$wp_customize->add_control( 
		new WP_Customize_Image_Control( $wp_customize, 'fcc_body_bg_image', 
			array(
		    	'label'    => __('Body Background Image', 'fcc_bg'),
		    	'section'  => 'theme_settings_section',
		    	'settings' => 'fcc_body_bg_image',
			) 
		) 
	);

	//primary bg color
	$wp_customize->add_setting(
    	'primary_bg_color',
    	array(
    			'default' => 'rgb(101, 54, 54)'
    		)
	);

	$wp_customize->add_control( 
		new WP_Customize_Color_Control( $wp_customize, 'primary_bg_color', 
			array(
		    	'label'    => __('Primary background color'),
		    	'section'  => 'theme_settings_section',
		    	'settings' => 'primary_bg_color'
			) 
		) 
	);

	//primary color
	$wp_customize->add_setting(
    	'primary_color',
    	array(
    			'default' => '#FFFFFF'
    		)
	);

	$wp_customize->add_control( 
		new WP_Customize_Color_Control( $wp_customize, 'primary_color', 
			array(
		    	'label'    => __('Primary color'),
		    	'section'  => 'theme_settings_section',
		    	'settings' => 'primary_color'
			) 
		) 
	);

		//secondary bg color
	$wp_customize->add_setting(
    	'secondary_bg_color',
    	array(
    			'default' => 'rgba(90, 37, 37, 1)'
    		)
	);

	$wp_customize->add_control( 
		new WP_Customize_Color_Control( $wp_customize, 'secondary_bg_color', 
			array(
		    	'label'    => __('secondary background color'),
		    	'section'  => 'theme_settings_section',
		    	'settings' => 'secondary_bg_color'
			) 
		) 
	);

	//secondary color
	$wp_customize->add_setting(
    	'secondary_color',
    	array(
    			'default' => '#FFFFFF'
    		)
	);

	$wp_customize->add_control( 
		new WP_Customize_Color_Control( $wp_customize, 'secondary_color', 
			array(
		    	'label'    => __('secondary color'),
		    	'section'  => 'theme_settings_section',
		    	'settings' => 'secondary_color'
			) 
		) 
	);

}

add_action( 'customize_register', 'fcc_customize_theme_settings' );

function fcc_custom_logo() {
	echo "
			<style>
				#header-logo {
				background: url('".get_bloginfo('template_url')."/assets/images/logo-1.png') !important;
				}
			</style>
		";
}

add_action('admin_head', 'fcc_custom_logo');

function change_fcc_login_image() {
	echo "
	<style>
		body.login #login h1 a {
			background: url('".get_bloginfo('template_url')."/assets/images/logo-1.png') 0 0 no-repeat transparent;
			height:320px;
			width:320px; 
		}

		#login {
			padding: 30px 0 0;
		}
	</style>";
}

add_action("login_head", "change_fcc_login_image");

function remove_footer_admin () {
	echo 'Fueled by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Designed by <a href="http://www.fb.com/franklin.calpito" target="_blank">Franklin C. Calpito Jr.</a> </p>';
}

add_filter('admin_footer_text', 'remove_footer_admin');


function fcc_custom_dashboard_widgets() {
global $wp_meta_boxes;

wp_add_dashboard_widget('custom_help_widget', 'Theme Support', 'custom_dashboard_help');
}

function custom_dashboard_help() {
	echo '<p>Welcome to fcc Wordpress Theme! Need help? Contact the developer <a href="mailto:franklincastrocalpito@gmail.com">here</a>. </p>';
}

add_action('wp_dashboard_setup', 'fcc_custom_dashboard_widgets');

function fcc_copyright() {
	global $wpdb;
	$copyright_dates = $wpdb->get_results("
		SELECT
		YEAR(min(post_date_gmt)) AS firstdate,
		YEAR(max(post_date_gmt)) AS lastdate
		FROM
		$wpdb->posts
		WHERE
		post_status = 'publish'
		");
	$output = '';
	if($copyright_dates) {
		$copyright = "&copy; " . $copyright_dates[0]->firstdate;
		if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
			$copyright .= '-' . $copyright_dates[0]->lastdate;
		}
		$output = $copyright;
	}
	return $output;
}

//add author details
function fcc_contactmethods( $contactmethods ) {

$contactmethods['twitter'] = 'Twitter';
$contactmethods['facebook'] = 'Facebook';

return $contactmethods;
}

add_filter('user_contactmethods','fcc_contactmethods',10,1);

//add sidebar widgets
//add more
if ( function_exists('register_sidebar') )
	register_sidebar(array('name'=>'Sidebar1',
		'before_widget' => '<li class="widget">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h3>',
		'id' => 'sidebar-1'
		));
	register_sidebar(array('name'=>'Sidebar2',
		'before_widget' => '<li class="widget">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h3>',
		'id' => 'sidebar-2'
		));

// enable threaded comments
function enable_threaded_comments(){
	if (!is_admin()) {
		if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
		wp_enqueue_script('comment-reply');
	}
}

add_action('get_header', 'enable_threaded_comments');



include "fcc-sanitize-data.php";