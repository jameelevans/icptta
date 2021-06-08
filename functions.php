<?php
/** 
 * Custom Functions
 *
 * ! What the custom functions do:
 * *    1. Enqueues all styles and scripts
 * *    2. Asynchronously load scripts for speed optimization
 *      
 */

// * * --------| Actions and filters in order |-------- *

  // Action to enque styles and scripts
  add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

  // Asynchronously load scripts
  add_filter( 'clean_url', 'async_scripts', 11, 1 ); 

  //Action to make css styles available to login screen
add_action('login_enqueue_scripts', 'icptta_login_css');

//Filter to change login logo link to home page
add_filter('login_headerurl', 'icptta_url');

//Filter to replace WP logo with site title name on login screen
add_filter('login_headertitle', 'icptta_login_title');




// * * --------| Functions in order |-------- *

  //Enqueuing styles and scripts
  function theme_enqueue_scripts() {
  wp_enqueue_script( 'Bundled_js', get_template_directory_uri() . '/assets/js/scripts-bundled.js#asyncload', array(), '1.0.0', true );
  wp_enqueue_style('your-wp-project_main_styles', get_stylesheet_uri());
  }

  // Asynchronously load scripts
  function async_scripts($url){
  if ( strpos( $url, '#asyncload') === false )
    return $url;
  else if ( is_admin() )
    return str_replace( '#asyncload', '', $url );
  else
    return str_replace( '#asyncload', '', $url )."' async='async";
  }

  //Makes login logo link to home page
function icptta_url() {
  return esc_url(site_url('/'));
}

//Make css styles available to login screen
function icptta_login_css() {
  wp_enqueue_style('icptta_main_styles', get_stylesheet_uri());
  }

//Replace WP logo with site title name on login screen
function icptta_login_title() {
  return get_bloginfo('name');
}


  //*  Display inline svg icon from sprite sheet with custom class
function svg_icon($class, $icon) { ?>
  <svg class="<?php echo $class ?>">
    <use
      xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-<?php echo $icon ?>">
    </use>
  </svg>
  <?php } 
  
  // .Display inline svg icon from sprite sheet with custom class