<?php
/**
 * * The template for displaying the a single resource page
 *
 * @package icptta
 */

get_header();

?>
	<main class="general resource-page">
    <section class="general--single resource-page__content">
      <?php the_content(); ?>
    </section>
    

	</main>
<?php get_footer(); ?>