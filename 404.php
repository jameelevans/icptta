<?php
/**
 * * The template for displaying the a single resource page
 *
 * @package icptta
 */

get_header();

?>
	<main class="general">
    <section class="general--single-narrow">
     <div class="error">
       <h2>Oops.....</h2>
       <p>Sorry the page you’re looking for doesn’t exsist</p>
       <img src="<?php echo esc_url(get_theme_file_uri('assets/img/404.png')); ?>" alt="ICP TTA 404">
       <a href="" class="btn btn--blue">Go Home</a>
     </div>
    </section>

	</main>
<?php get_footer(); ?>


