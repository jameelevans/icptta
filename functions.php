<?php
/** 
 * Custom Functions
 *
 * ! What the custom functions do:
 * *    1. Enqueues all styles and scripts
 * *    2. Asynchronously load scripts for speed optimization
 * *    3. Add site link to logo on login screen 
 * *    4. Add theme css to login screen
 * *    5. Add theme title to login screen
 * *    6. Activates the ability to add custom logo in customizer
 * *    7. Display inline svg icon from sprite sheet with custom class 
 * *    8. Get and display Featured Posts
 *      
 */


// * * --------| Functions in order |-------- *

//* 1. Enqueuing styles and scripts
  function theme_enqueue_scripts() {
  wp_enqueue_script( 'Bundled_js', get_template_directory_uri() . '/assets/js/scripts-bundled.js#asyncload', array(), '1.0.0', true );
  wp_enqueue_style('adobe-fonts', 'https://use.typekit.net/xlp4xty.css');
  wp_enqueue_style('icptta_main_styles', get_stylesheet_uri());
  }
  add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
  // .Enqueuing styles and scripts


//* 2. Asynchronously load scripts
function async_scripts($url){
if ( strpos( $url, '#asyncload') === false )
  return $url;
else if ( is_admin() )
  return str_replace( '#asyncload', '', $url );
else
  return str_replace( '#asyncload', '', $url )."' async='async";
}
add_filter( 'clean_url', 'async_scripts', 11, 1 ); 
// .Asynchronously load scripts


//* 3. Makes login logo link to home page
  function icptta_url() {
  return esc_url(site_url('/'));
}
add_filter('login_headerurl', 'icptta_url');
// .Makes login logo link to home page


//* 4. Make css styles available to login screen
function icptta_login_css() {
  wp_enqueue_style('icptta_main_styles', get_stylesheet_uri());
  }
add_action('login_enqueue_scripts', 'icptta_login_css');
// .Make css styles available to login screen

//* 5. Replace WP logo with site title name on login screen
function icptta_login_title() {
  return get_bloginfo('name');
}
add_filter('login_headertitle', 'icptta_login_title');
// .Replace WP logo with site title name on login screen


 //* 6. Activates the ability to add custom logo in customizer
 function icptta_custom_logo_setup() {
  $defaults = array(
      'height'      => 62,
      'width'       => 150,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'ICP TTA', 'Assiting Victims of Mass Violence and Domestice Terrorism' ),
  );
  add_theme_support( 'custom-logo', $defaults );
  add_theme_support( 'post-thumbnails' ); // .Enable support for Post Thumbnails on posts and pages
}
  add_action( 'after_setup_theme', 'icptta_custom_logo_setup' );
  // .Activates the ability to add custom logo in customizer


 


  //* 7.  Display inline svg icon from sprite sheet with custom class
function svg_icon($class, $icon) { ?>
  <svg class="<?php echo $class ?>">
    <use
      xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/sprite.svg' ); ?>#icon-<?php echo $icon ?>">
    </use>
  </svg>
  <?php } 
  // .Display inline svg icon from sprite sheet with custom class


//* 8.  Enable custom post types
function custom_post_types() {

  // Slide post type
  register_post_type('slide', array(
    'supports' => array('title','slides', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Slides',
      'add_new_item' => 'Add New Slide',
      'edit_item' => 'Edit Slides',
      'all_items' => 'All Slides',
      'singular_name' => 'Slide'
    ),
    'menu_icon' => 'dashicons-images-alt2'
  ));
  // Testimonials post type
  register_post_type('testimonials', array(
    'supports' => array('title','testimonials', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Testimonials',
      'add_new_item' => 'Add New Testimonial',
      'edit_item' => 'Edit Testimonial',
      'all_items' => 'All Testimonials',
      'singular_name' => 'Testimonial'
    ),
    'menu_icon' => 'dashicons-format-quote'
  ));

}
 
  add_action('init', 'custom_post_types');
  // .Enable custom post types

  // 8. Get and display Featured Posts

  function featured_posts(){
  
    // Show first three featured resources
    
    $featured = new WP_Query('showposts=3&orderby=rand&tag_name=featured');
      if( $featured->have_posts() ):
        while( $featured->have_posts() ):
          $featured->the_post();
          get_template_part('template-parts/content', 'featured'); 
        endwhile;
      wp_reset_postdata();
      endif;                  
  }
