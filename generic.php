<?php
/**
 * * The template for displaying the a single resource page
 *
 * @package icptta
 */

get_header();

?>
	<main class="main general buddypress">
    <section class="buddypress__content buddypress__three-column">
      
            <div class="buddypress__left-sidebar">
              <?php dynamic_sidebar('activity_left'); ?>
            </div>
      

    
			
      <div id="content" class="buddypress__main">
        <div class="padder">

        <?php do_action( 'bp_before_blog_page' ); ?>
          <div class="page" id="blog-page" role="main">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              

              <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="entry">

                  <?php the_content( __( '<p class="serif">Read the rest of this page &rarr;</p>', 'buddypress' ) ); ?>

                  <?php wp_link_pages( array( 'before' => '<div class="page-link"><p>' . __( 'Pages: ', 'buddypress' ), 'after' => '</p></div>', 'next_or_number' => 'number' ) ); ?>
                  <?php //*edit_post_link( __( 'Edit this page', 'buddypress' ), '<p class="edit-link">', '</p>'); *//?>

                </div>

              </div>

            <?php comments_template(); ?>

            <?php endwhile; endif; ?>

          </div><!-- .page -->

        <?php do_action( 'bp_after_blog_page' ); ?>

        </div><!-- .padder -->
      </div><!-- #content -->

	
      <div class="buddypress__sidebar">
      <?php
          if (is_page('members')) {
            dynamic_sidebar('members_sidebar');
          }
          else (is_page('news-feed')) {
            dynamic_sidebar('activity_sidebar')
          } 
        ?>


        
      </div>

     

      
      
    </section>
    

	</main>
<?php get_footer(); ?>

