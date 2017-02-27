<?php

function bsblog_customize_register( $wp_customize ) {

//add new section Blog Header
  $wp_customize->add_section('blog_header',array(
            'title'         => __('Blog Header','bsblog'),
            'priority'      => 10, 
            'transport'     => 'refresh',
    ));
    
//add setting header heading for Blog Header
  $wp_customize->add_setting('header_heading',array(
            'default'       => 'Clean Blog',
            'transport'     => 'refresh',
            
    ));
    
//add control to section Header
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'header_heading_textbox',array(
		'label' => __( 'New Heading', 'bsblog' ),
		'section' => 'blog_header',
		'settings' => 'header_heading',
        
  )));
  
//add setting header paragraph for Blog Header
  $wp_customize->add_setting('header_paragraph',array(
            'default'       => 'A Clean Blog Theme by Start Bootstrap',
            'transport'     => 'refresh',
            
    ));
    
//add control to section Header
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'header_paragraph_textbox',array(
		'label' => __( 'New Paragraph', 'bsblog' ),
		'section' => 'blog_header',
		'settings' => 'header_paragraph',
        
  )));
  
 //add setting for background image in section Header
  $wp_customize->add_setting('header_background',array(
			'default'		=> get_stylesheet_directory_uri() . '/img/home-bg.jpg',
			 'transport'     => 'refresh',
		));
  
  //add control for background image in section Header
  $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,'theme_header_bg',array(
            'label' => 'Header Background Image',
            'section' => 'blog_header',
            'settings' => 'header_background',
            'priority' => 2
  )));
  
  //add new section Blog Footer
  $wp_customize->add_section('blog_footer',array(
            'title'         => __('Blog Footer','bsblog'),
            'priority'      => 10, 
            'transport'     => 'refresh',
    ));
    
//add setting Twitter Link for Blog Footer
  $wp_customize->add_setting('twitter_link',array(
            'default'       => 'https://twitter.com/cannelflow',
            'transport'     => 'refresh',
            
    ));
    
//add control to section Header
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'twitter_link_textbox',array(
		'label' => __( 'New Twitter Link', 'bsblog' ),
		'section' => 'blog_footer',
		'settings' => 'twitter_link',
        
  )));
  
//add setting facebook Link for Blog Footer
  $wp_customize->add_setting('facebook_link',array(
            'default'       => 'https://www.facebook.com/cannelflow',
            'transport'     => 'refresh',
            
    ));
    
//add control to section Header
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'facebook_link_textbox',array(
		'label' => __( 'New Facebook Link', 'bsblog' ),
		'section' => 'blog_footer',
		'settings' => 'facebook_link',
        
  ))); 
  
  //add setting github Link for Blog Footer
  $wp_customize->add_setting('github_link',array(
            'default'       => 'https://github.com/cannelflow',
            'transport'     => 'refresh',
            
    ));
    
//add control to section Header
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'github_link_textbox',array(
		'label' => __( 'New Github Link', 'bsblog' ),
		'section' => 'blog_footer',
		'settings' => 'github_link',
        
  )));
 
  
}
  
  add_action( 'customize_register', 'bsblog_customize_register');

?>