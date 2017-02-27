<?php

// Theme Support
function bsblog_theme_setup(){
	
	//post-thumbnail
    add_theme_support('post-thumbnails');
    
    // Nav Menus
    register_nav_menus(array(
      'primary'   => __('Primary Menu'),
      'secondary' => __('Secondary Menu'),
    ));
    
    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}
  
add_action('after_setup_theme','bsblog_theme_setup');

//add js & css
function bsblog_scripts() {
	
	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all' );
 
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0', 'all' );
 
	wp_enqueue_style( 'lora', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic', false );
	
    wp_enqueue_style( 'open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800', false );
	
	wp_enqueue_style( 'custome-css', get_stylesheet_uri() );
	
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
	
	wp_enqueue_script( 'jqBootstrapValidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js');
	
	wp_enqueue_script( 'contact-me', get_template_directory_uri() . '/js/contact_me.js');
	
	wp_enqueue_script( 'clean-blog', get_template_directory_uri() . '/js/clean-blog.js');
 
// 	wp_enqueue_script( 'bootstrapwp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
 
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bsblog_scripts' );
/**
 * Add Respond.js for IE
 */
if( !function_exists('ie_scripts')) {
	function ie_scripts() {
	 	echo '<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->';
	   	echo ' <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->';
	   	echo ' <!--[if lt IE 9]>';
	    echo ' <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>';
	    echo ' <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
	   	echo ' <![endif]-->';
   	}
   	add_action('wp_head', 'ie_scripts');
} // end if


// Widget Locations
function bsblog_init_widgets($id){
	
	register_sidebar(array(
		 'name'  => 'Sidebar',
    'id'    => 'sidebar',
    'before_widget' => '<aside class="side-widget">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
	));
	
}
add_action('widgets_init', 'bsblog_init_widgets');

// Register Custom Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');

//customizer file
require_once get_template_directory().('/inc/customizer.php');

?>