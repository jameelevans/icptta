<?php
/**
 * * The template for displaying the a single Consultant page
 *
 * @package icptta
 */

get_header();

?>
	<main class="general">
    <section class="general--narrow">
      <div class="consultant">
       

        <?php if ( has_post_thumbnail() ) { ?>
          <img src="<?php the_post_thumbnail_url('consultantPortrait'); ?>" alt="<?php the_title_attribute(); ?>" class="consultant__headshot">
        <?php } else { ?>
        <img class="consultant__headshot" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot-fallback.jpg" alt="<?php the_title(); ?>" />
        <?php } ?>
        <div class="consultant__content">
          <?php the_content(); ?>
        </div>
      </div>
    </section>
    

	</main>
<?php get_footer(); ?>