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
 * *    8. Enable custom post types
 * *    9. Get and display Featured Posts
 * *    10. Get and display header slider
 * *    11. Get and display general header content
 * *    12. Theme custom image sizes
 * *    13. Exclude node_modules from exporting
 *      
 */


// * * --------| Functions in order |-------- *

//* 1. Enqueuing styles and scripts
  function theme_enqueue_scripts() {
  wp_enqueue_script( 'Bundled_js', get_template_directory_uri() . '/assets/js/scripts-bundled.js#asyncload', array(), '1.0.0', true );
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

 // Training Post Type
 register_post_type('trainings', array(
  'show_in_rest' => true,
  'map_meta_cap' => true,
  'supports' => array('title', 'editor', 'excerpt','thumbnail'),
  'rewrite' => array('slug' => 'training'),
  'has_archive' => true,
  'public' => true,
  'labels' => array(
    'name' => 'Trainings',
    'add_new_item' => 'Add New Training',
    'edit_item' => 'Edit Trainings',
    'all_items' => 'All Trainings'
  ),
  'menu_icon' => 'dashicons-calendar'
));

  // Consultant Post Type
register_post_type('consultants', array(
  'show_in_rest' => true,
  'supports' => array('title', 'editor', 'thumbnail'),
  'rewrite' => array('slug' => 'consultant'),
  'taxonomies'  => array( 'category' ),
  'public' => true,
  'labels' => array(
    'name' => 'Consultants',
    'add_new_item' => 'Add New Consultant',
    'edit_item' => 'Edit Consultant',
    'all_items' => 'All Consultants',
    'singular_name' => 'Consultant'
  ),
  'menu_icon' => 'dashicons-admin-users'
));

  // Partners Post Type
  register_post_type('partners', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'rewrite' => array('slug' => 'partner'),
    'public' => true,
    'labels' => array(
      'name' => 'Partners',
      'add_new_item' => 'Add New Partner',
      'edit_item' => 'Edit Partner',
      'all_items' => 'All Partners',
      'singular_name' => 'Partner'
    ),
    'menu_icon' => 'dashicons-groups'
  ));

   // FAQs Post Type
   register_post_type('faqs', array(
    'supports' => array('title', 'editor'),
    'public' => true,
    'labels' => array(
      'name' => 'FAQs',
      'add_new_item' => 'Add New FAQ',
      'edit_item' => 'Edit FAQ',
      'all_items' => 'All FAQs',
      'singular_name' => 'FAQ'
    ),
    'menu_icon' => 'dashicons-format-chat'
  ));

}
 
  add_action('init', 'custom_post_types');
  // . 8 Enable custom post types

  //* 9. Get and display Featured Posts
  function featured_posts(){
  
    // Show first three featured resources
    $featured = new WP_Query( 
      array( 
        'post_type' => 'post', 
        'posts_per_page' => 3,
        'meta_key' => 'featured_on_home',
        'orderby' => 'rand',
        'meta_value' => '1' ) 
      );
      if( $featured->have_posts() ):
        while( $featured->have_posts() ):
          $featured->the_post();
          get_template_part('template-parts/content', 'featured'); 
        endwhile;
      wp_reset_postdata();
      endif;                  
  } // 9. Get and display Featured Posts

//* 10. Get and display header slider
function slider() { ?>
  <!-- Front page slider -->
  <section>
    <!-- Heading only for Screen Readers -->
    <h3 id="slider-heading" class="sr-only">Recent news</h3>
    <div class="slider" aria-labelledby="slider-heading">
        <?php
        $slider = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type' => 'slide'
        ));
        while ($slider -> have_posts()) {
          $slider -> the_post(); ?>
          <!-- Indiviual slide -->
          <article class="slider__slide">
            <!-- Slider text -->
            <div class="slider__text">
              <h4 class="slider__heading"><?php echo get_the_title(); ?></h4>
              <p class="slider__subheading"><?php the_field('sub_heading'); ?></p>
              <div class="slider__buttons">
                <a href="<?php the_field('link_learn'); ?>" class="slider__links btn btn--white-outline" title="Click here to learn more about <?php echo get_the_title(); ?>">Learn More</a>
                <a href="<?php echo esc_url( home_url('/contact-us')); ?>" class="slider__links btn btn--blue" title="Click here to go to the contact us page">CONTACT US</a>
              </div>
            </div><!-- .Slider text -->
            <!-- Slider image -->
            <div class="slider__image">
              <?php // Class=wp-post-image
              echo get_the_post_thumbnail(); ?>
            </div><!-- .Slider image -->
          </article><!-- .Indiviual slide -->
      <?php }
      wp_reset_postdata();
      ?>
    </div>
  </section><!-- .Front page slider -->
<?php } 
// .10 Get and display header slider

//* 11. Get and display general header content
function general() { ?>
  <div class="header__general">
    <h1 class="header__heading">
      <?php
          if (is_home()) {
          echo single_post_title();
          }
          else if (is_404()) {
          echo '404 Error';
          }
          else if (is_archive('training')) {
            echo 'All Previous Trainings';
            } else {
          echo the_title();
          }
        ?>
    </h1>
  </div>
  <?php } 
  // .11 Get and display general header content

  //* 12 Get and display Partners section
  function partners() { ?>
        <?php
            $partners = new WP_Query(array(
              'posts_per_page' => 4,
              'post_type' => 'partners',
              'orderby' => 'rand'
            ));

            while($partners->have_posts()) {
              $partners->the_post();?>
              <!-- Individual partner -->
              <a class="partners__link" href="<?php the_permalink();?>" title="Click here to visit <?php the_title(); ?>'s page">
                <!-- Partner logo -->
                <figure class="partners__logo">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" draggable="false">
                  <figcaption class="partners__name p__body"><?php the_title(); ?></figcaption>
                </figure><!-- .Partner logo -->
              </a><!-- .Individual partner -->
              
            <?php }
            wp_reset_postdata();
          ?>
    <?php } //. 12 Get and display Partners section


//* 12 Theme custom image sizes
function icptta_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('consultantLandscape', 400, 260, true);
  add_image_size('consultantPortrait', 480, 650, true);
  add_image_size('training', 870, 870, true);
}
add_action('after_setup_theme', 'icptta_features');
//. 12 Theme custom image sizes

//* 13 Exclude node_modules from exporting
add_filter('ai1wm_exclude_content_from_export', 'ignoreCertainFiles');

function ignoreCertainFiles ($exclude_filters){
  $exclude_filters[] = 'themes/ICP TTA/node_modules';
  return $exclude_filters;
}
//. 13 Exclude node_modules from exporting


