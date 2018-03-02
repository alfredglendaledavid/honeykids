<?php

function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
  
  	// Fancybox JS
    //wp_enqueue_script( 'fancybox-js', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js', array(), '', false );

    // Load slick in footer
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/vendor/slick-carousel/slick/slick.min.js', array(), '', true );
	
	// Load slick in footer
    wp_enqueue_script( 'ui-js', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array(), '', true );
	
	// Web font Loader
    wp_enqueue_script( 'font-loader', 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js', array(), '', true );
	
	// Load recaptcha in footer
    wp_enqueue_script( 'captcha', '//www.google.com/recaptcha/api.js', array(), '', true );
	
	// Load Instafeed files in footer
    //wp_enqueue_script( 'instafeed', get_template_directory_uri() . '/vendor/instafeed.js/instafeed.min.js', array(), '', false );
	
	// Load What-Input files in footer
    wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/assets/js/jquery.mixitup.js', array(), '', true );
	
	// Load Flex files in footer
    wp_enqueue_script( 'flex', get_template_directory_uri() . '/vendor/flex/jquery.flexslider.js', array(), '', true );
	
	// Load MatchHeight in footer
    wp_enqueue_script( 'matchheight', get_template_directory_uri() . '/assets/js/jquery.matchHeight.js', array(), '', true );
    
    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/js/foundation.min.js', array( 'jquery' ), '6.2.3', true );
    
    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.min.js', array( 'jquery' ), '1.5', true );
   
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.min.css', array(), '1.2', 'all' );
	
	// Register slick css
    wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/vendor/slick-carousel/slick/slick.css', array(), '', true );
	
	// Register flex css
   // wp_enqueue_style( 'flex-css', get_template_directory_uri() . '/vendor/flex/flexslider.css', array(), '1.1', true );
	
	// Register bookmark css
   // wp_enqueue_style( 'bookmark-css', get_template_directory_uri() . '/vendor/bookmark/bookmark.min.css', array(), '', '' );
	
	// Register jquery UI
    wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.min.css', array(), '1.5', 'all' );
	
	// Register fancybox css
    //wp_enqueue_style( 'fancybox-js', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css', array(), '3.1.25', 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);