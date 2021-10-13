<?php
/**
 * * The template for displaying the a single training page
 *
 * @package icptta
 */

get_header();

?>
<!-- Main content -->
<main class="main training general">
  <section class="training--narrow">
    <p class="p__lead p__lead--centered">Recorded trainings are available for viewing by all who would benefit. After viewing, if you or your community are interested in additional information about a specific subject or would like assistance with customizing a webinar’s content to further your mass violence/domestic terrorism response planning, please contact the program at <a href="mailto:icptta@icf.com">icptta@icf.com</a>.</p>
  </section>
  <section class="training__content general--single-narrow">
    <?php the_content(); ?>
  </section>
</main><!-- .Main content -->
<?php get_footer(); ?>