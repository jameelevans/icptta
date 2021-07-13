<?php
/**
 * * The template for displaying the a single partners page
 *
 * @package icptta
 */

get_header();

?>
	<main class="main general">
    <section class="general--narrow">
      <div class="partner">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" class="partner__logo" draggable="false">
        <div class="partner__content">
          <?php the_content(); ?>
        </div>
      </div>
    </section>
    

	</main>
<?php get_footer(); ?>